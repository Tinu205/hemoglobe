<?php
    class database
    {
        public static $conn=null;

        public static function getConnection()
        {
            if(database::$conn==null)
            {
                $servername = "localhost";
                $username_db = "panda";
                $password_db = "cutepanda";//will change later
                $database = "hemo";

                $connection = new mysqli($servername,$username_db,$password_db,$database);
                if($connection->connect_error){
                    die("Connection failed: ".$connection->connect_error);
                }else{
                    database::$conn = $connection;
                    return database::$conn;
                }
            }else{
                return database::$conn;
            }
        }

        public static function add_data($month,$blood_group,$blood_collected,$blood_used,$year){
            $remaining_blood = $blood_collected-$blood_used;
            $connection = database::getConnection();
            //  print("$month $blood_group $blood_collected $blood_used $year");


            if($year==1){
                $query="UPDATE `blood_bank_data_year_1` 
                SET 
                  `blood_collected` = '$blood_collected',
                  `blood_used` = '$blood_used',
                  `remaining_blood` = '$remaining_blood'
                WHERE 
                  `month` = '$month' 
                  AND `blood_group` = '$blood_group'" ;

            }else if($year==2){
                $query = "UPDATE `blood_bank_data_year_2` 
                SET 
                  `blood_collected` = '$blood_collected',
                  `blood_used` = '$blood_used',
                  `remaining_blood` = '$remaining_blood'
                WHERE 
                  `month` = '$month' 
                  AND `blood_group` = '$blood_group'";

            }else{
                $query = "UPDATE `blood_bank_data_year_3` 
                SET 
                  `blood_collected` = '$blood_collected',
                  `blood_used` = '$blood_used',
                  `remaining_blood` = '$remaining_blood'
                WHERE 
                  `month` = '$month' 
                  AND `blood_group` = '$blood_group'";

            }
            $result = $connection->query($query);
            if ($result === TRUE) {
                return $result; // Return the result if successful
            } else {
                return $connection->error; // Return the error message if query fails
            }
                        
        }

        public static function get_data(){
            $conn = database::getConnection();

            //Get current month
            $current_month = date("F");

            //Query to get the avg
            $query = "SELECT `blood_group`,AVG(`blood_used`) AS `avg_blood_collected`FROM(SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_1` WHERE month = '$current_month' UNION ALL SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_2` WHERE month = '$current_month' UNION ALL SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_3` WHERE month = '$current_month') AS `combined_data` WHERE `blood_group` IN ('A+','A-', 'B+','B-', 'AB+','AB-', 'O+', 'O-')  GROUP BY blood_group";

            // Execute the query
            $result = $conn->query($query);

            //return the whole query
            return $result;
        }
    }
?>


