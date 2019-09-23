<?php
// include('../Models/users.model.php');

// $users = new Users();

// $users->register_new_user('princekudzaimaposa@gmail.com', 'jsjsjasjjs');
// print_r(PDO::getAvailableDrivers());
// include('config/db.config.php');
// $res = $users->register_new_user('root@gmail.com', 'password');
// $db = new DB();
// $object = $db->connect();
// if($object == true){
//     print_r($res);
//     print_r("sharp sharp");
// }
$host = 'localhost:3306';
$dbname = 'hemans_travel_db';
$user = 'root2';
$password = '';

try{
    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $dbname) or die(mysql_error());

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $query = "INSERT INTO `users` (`useremail`, `password`) VALUES (?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param('ss',$useremail, $password);
    /* execute statement */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($id, $email, $pwd, $cell);

    /* fetch values */
    while ($stmt->fetch()) {
        $res = array();
        $res['id'] = $id;
        $res['useremail'] = $email;
        $res['password'] = $pwd;
        $res['phonenumber'] = $cell; 
    }

    /* close statement */
    $stmt->close();
} catch (Exception $e){
    echo "DB Error: ". $e->getMessage();
}


