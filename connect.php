<?php
$con=new mysqli('localhost', 'root' , '', 'company_db'); // new mysqli is used to provided an interface with mysql databases. donc to connect the database to  php code we need to write this line first;

// the if statement is saying that if database is not connecte successfully print out this error,but if it is connected to show anything

if(!$con){
    die(mysqli_error($con));  // this is a sql query to display error
}

?>