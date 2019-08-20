<?php
$servername="localhost";
$username="root";
$password="";
$db="shop";
//create connection
$conn= mysqli_connect($servername, $username, $password, $db);
$user = $_POST["txtUser"];
$pass = $_POST["txtPass"];
$sql="INSERT INTO tbllogin(_user,_password)VALUES('$user','$pass')";
//check connection
if(mysqli_query($conn,$sql))
{
    echo"them thanh cong";
}