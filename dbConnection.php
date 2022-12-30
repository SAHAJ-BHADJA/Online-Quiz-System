<?php
	// $con= new mysqli('localhost','root','3306','quiz')or die("Could not connect to mysql".mysqli_error($con));
	$servername = "127.0.0.1:3306";
    $username = "root";
    $password="";
    $dbname="quiz";

    $con = mysqli_connect($servername,$username,$password,$dbname);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_errno();
    }
?>