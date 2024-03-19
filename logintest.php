<?php
    include 'libs/load.php';

    // $user = "root@mail";
    // $pass="rootpass";
    // $result = null;
    // if (isset($_GET['logout'])) {
    //     Session::destroy();
    //     die("Session destroyed, <a href='logintest.php'>Login Again</a>");
    // }
    
    // if (Session::get('is_loggedin')) {
    //     $userdata = Session::get('session_user');
    //     print("Welcome Back, $userdata[username]");
    //     $result = $userdata;
    // } else {
    //     printf("No session found, trying to login now. <br>");
    //     $result = User::login($user, $pass);
    //     if ($result) {
    //         echo "Login Success, $result[username]";
    //         Session::set('is_loggedin', true);
    //         Session::set('session_user', $result);
    //         echo "$result";
    //     } else {
    //         echo "Login failed <br>";
    //     }
    // }
    // echo <<<EOL
    // <br><br><a href="logintest.php?logout">Logout</a>
    // EOL;
    //print_r($_POST)
    $conn = database::getConnection();
    $current_month = date("F");
    $query = "SELECT `blood_group`,AVG(`blood_used`) AS `avg_blood_collected`FROM (SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_1` WHERE month = '$current_month' UNION ALL SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_2` WHERE month = '$current_month' UNION ALL SELECT `blood_used`, `blood_group` FROM `blood_bank_data_year_3` WHERE month = '$current_month') AS `combined_data` WHERE `blood_group` IN ('A+', 'B+', 'AB+', 'O+') 
  GROUP BY blood_group";

// Execute the query
$result = $conn->query($query);

// Check if there are any results
if ($result->num_rows > 0) {
// Fetch each row and print the blood group and its average
while ($row = $result->fetch_assoc()) {
echo "Blood Group: " . $row["blood_group"] . ", Average Blood Collected: " . $row["avg_blood_collected"] . "<br>";
}
} else {
echo "No results found";
}
?>