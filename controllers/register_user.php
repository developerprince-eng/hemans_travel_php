<?php 
include('../Models/users.model.php');

$users = new Users();
if(!empty($_POST['useremail']) && !empty($_POST['password'])){
    $res = $users->register_new_user($_POST['usermail'], $_POST['password']);
    if($res){
        echo $res;
        // header('Location: ../dashboard.php'); exit();
    }else{
        header('Location: ../register_user.php'); exit();
    }
}else{
    header('Location: ../register_user.php'); exit();
}
