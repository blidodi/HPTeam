<?php
session_start();
include_once 'includes/functions.php';
$user = new User();
 
if ($user->get_session())
{
    header("location:home.php");
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $login = $user->check_login($_POST['emailusername'], $_POST['password']);
    if ($login)
    {
        // Login Success
        header("location:login.php");
    }
    else
    {
        // Login Failed
        $msg= 'Username / password wrong';
    }
}
?>
                <form method="POST" action="" name="login">
                <tr>
                    <th>Email or Username</th>
                    <td> : </td>
                    <td>
                        <input type="text" name="emailusername"/>
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td> : </td>
                    <td>
                        <input type="password" name="password"/>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td> </td>
                    <td>
                        <input type="submit" value="Login"/>
                    </td>
                </tr>
                <tr>
                    <th>Don't have account?</th>
                    <td> : </td>
                    <td>
                        <a href="./register.php"><b>Register Now</b></a> <br>
                    </td>
                </tr>
                </form>
            </table>