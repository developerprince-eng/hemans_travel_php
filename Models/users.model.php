<?php
require '../config/db.config.php';
$db = new DB();
class Users extends DB{   
    function register_new_user($useremail, $password){
        $con = $this->connect();
        $query = "INSERT INTO `users` (`useremail`, `password`) VALUES (?,?)";
        $stmt = $con->prepare($query);
        // $stmt->bind_param('ss',$useremail, $password);
        /* execute statement */
        $stmt->execute([$useremail, $password]);
    
        /* bind result variables */
        $stmt->bind_result($id, $email, $pwd, $cell);
    
        /* fetch values */
        while ($stmt->fetch()) {
            $res = array();
            $res['id'] = $id;
            $res['useremail'] = $email;
            $res['password'] = $pwd;
            $res['phonenumber'] = $cell; 
            return $res;
        }
    
        /* close statement */
        $stmt->close();
        

    }

    function get_user($useremail, $password){
        $con = $this->connect();
        $query = 'SELECT * FROM users WHERE usermail=? AND password=?';
        $stmt = $con->prepare($query);
        // $stmt->bind_param('ss',$useremail, $password);
        /* execute statement */
        $stmt->execute([$useremail, $password]);
    
        /* bind result variables */
        $stmt->bind_result($id, $email, $pwd);
    
        /* fetch values */
        while ($stmt->fetch()) {
            $res = array();
            $res['id'] = $id;
            $res['useremail'] = $email;
            $res['password'] = $pwd;
            return $res;
    }

    function get_all_user(){
        $stmt = $this->connect()->query("SELECT * FROM users");  
        while ($row = $stmt->fetch()){
            return $row;
        }
    }

    function delete_user($id){
        $stmt = $this->connect()->prepare("DELETE FROM users WHERE id=?");  
        $stmt->execute([$id]);
        while ($row = $stmt->fetch()){
            return $row;
        }
    }

    function update_user_contact($contact, $id){
        $stmt = $this->connect()->prepare("UPDATE users SET phonenumber = ? WHERE id = ? ");
        $stmt->execute([$contact, $id]);
        while ($row = $stmt->fetch()){
            return $row;
        }
    }
}