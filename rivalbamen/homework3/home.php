<?php
 
session_start();
include_once 'includes/functions.php';
$user = new User();
$uid = $_SESSION['user_id'];
 
if (!$user->get_session())
{
    header("location:login.php");
}
if ($_GET['q'] == 'logout')
{
    $user->user_logout();
    header("location:login.php");
}
?>
<!-- -------HTML------- -->
<a href="?q=logout">Logout</a>