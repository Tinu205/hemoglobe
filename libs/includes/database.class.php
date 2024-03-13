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
                $password_db = "cutepanda";
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
    }
?>