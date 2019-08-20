<?php
session_start();
require_once 'connectsql.php';
$user=$_POST["txtUser"];
$pass=$_POST["txtPass"];
$sql="SELECT* FROM tbllogin WHERE _user ='$user' AND _password='$pass'";
$query=mysqli_query($conn,$sql);$sql="SELECT* FROM tbllogin WHERE _user ='$user' AND _password='$pass'";

$num= mysqli_num_rows($query);
if($num==0)
 {
        echo"lai di";
}
   
    else 
    {$_SESSION['admin']= $user;
    header("Location:viewproduct.php");
  
}
?>