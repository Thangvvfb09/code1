<?php
require_once 'connectsql.php';
$id = $_POST["txtID"];
$name = $_POST["txtName"];
$category =$_POST['txtTheloai'];
$price = $_POST["txtPrice"];
$quantity = $_POST["txtQuantity"];
$description = $_POST["txtDes"];
$image = $_POST["txtImg"];
$sql="INSERT INTO tblproduct(_id,_name,_category,_price,_quantity,_description,img)VALUES('$id','$name','$category',$price','$quantity','$description','$image')";
//check connection

//check connection
if(mysqli_query($conn,$sql))
{
    header("Location:viewproduct.php");
}
?>