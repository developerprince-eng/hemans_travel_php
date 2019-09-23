<?php 
include('../Models/users.model.php');

$users = new Users();
$res = $users->register_new_user($_POST['usermail'], $_POST['password']);
if($res = [] ){
    print_r('Registered In');
    header('Location: dashboard.php'); exit();
}
 