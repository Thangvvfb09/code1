<?php

include 'connectsql.php'; 
$id=$_GET['id'];
$sql="DELETE FROM tblproduct WHERE _id='$id'";
if(mysqli_query($conn, $sql) )
        {
    
    header("Location:viewProduct.php");
}
?>