<?php
    $host = "localh11ost"; //Default Host Name
    $username = "rodddot"; //Default user name
    $password = ""; //Default password
    $db_name = "test"; //Database name

    $connection = mysqli_connect($host,$username,$password,$db_name); // host,username,password,databasename
    if(!$connection){
        echo "Database Connection is Fail";
     
    }
?>