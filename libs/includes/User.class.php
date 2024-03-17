<?php
class User{
 public static function login($user,$pass)   
 {
    if (isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] === true && isset($_SESSION['session_user'])) {
        return $_SESSION['session_user']; // Return previous session user
    }
    $connection = database::getConnection();
    //$pass = md5($pass);
    $query = "SELECT * FROM `log_cred` WHERE `email` = '$user'";
    $result = $connection->query($query);
    if($result->num_rows==1)
    {
        $row = $result->fetch_assoc();
        if($row['password']==$pass)
        {
            return true;
        }else{
            return false;
        }
    }
    Session::set('is_loggedin', true);
    Session::set('session_user', $result);
 }
}
?>