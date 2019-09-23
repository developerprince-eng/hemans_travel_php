<?php
Class DB
{
    function connect(){
        $host = 'localhost:3306';
        $dbname = 'hemans_travel_db';
        $user = 'root2';
        $password = '';
        $charset = 'utf8';

        try{
            $con = mysqli_connect($host, $user, $password);
            mysqli_select_db($con, $dbname) or die(mysql_error());

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }
            return $con;
        } catch (Exception $e){
            echo "DB Error: ". $e->getMessage();
        }

    }
}


?>