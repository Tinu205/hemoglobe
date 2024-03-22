<?php
class User {
    public static function login($user, $pass) {
        $connection = database::getConnection();
        //$pass = md5($pass);
        $query = "SELECT * FROM `log_cred` WHERE `email` = '$user'";
        $result = $connection->query($query);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Compare hashed password
            // You should hash the password before storing it in the database and compare the hashed version here
            if ($row['password'] == $pass) {
                return true; // Login successful
            } else {
                return false; // Incorrect password
            }
        } else {
            return false; // User not found
        }
    }
}

?>