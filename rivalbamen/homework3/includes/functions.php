<?php
include_once 'config.php';
 
class User
{
    //Database connect
    public function __construct()
    {
    $db = new DB_Class();
    }
    //Registration process
    public function register_user($username, $email, $password, $full_name, $no_hp, $website )
    {
        $password = md5($password);
        $sql = mysql_query("SELECT user_id from user WHERE username = '$username' or email = '$email'");
        $no_rows = mysql_num_rows($sql);
        if ($no_rows == 0)
        {
            $result = mysql_query("INSERT INTO user(username, email, password, full_name, no_hp, website)
                                   values ('" . mysql_real_escape_string($username)."',
                                           '" . mysql_real_escape_string($email)."',
                                           '" . mysql_real_escape_string($password)."',
                                           '" . mysql_real_escape_string($full_name)."',
                                           '" . mysql_real_escape_string($no_hp)."',
                                           '" . mysql_real_escape_string($website)."'
                                           )") or die(mysql_error());
            return $result;
        }
        else
        {
            return FALSE;
        }
    }
    // Login process
    public function check_login($emailusername, $password)
    {
        $password = md5($password);
        $result = mysql_query("SELECT user_id from user WHERE email = '$emailusername' or username='$emailusername' and password = '$password'");
        $user_data = mysql_fetch_array($result);
        $no_rows = mysql_num_rows($result);
        if ($no_rows == 1)
        {
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user_data['user_id'];
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
?>