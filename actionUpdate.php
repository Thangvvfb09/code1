<?php

require_once  "ConnectSql.php";
        $id = $_POST["txtID"];
        $name =$_POST["txtName"];
        $category=$_POST["txtTheloai"];
        $price = $_POST["txtPrice"];
        $quantity = $_POST["txtQuantity"];
        $des = $_POST["txtDes"];
        $image=$_POST["txtImg"];
        
 $sql="UPDATE  tblproduct SET _name='$name',_category='$category',_price='$price',_quantity='$quantity',_description='$des',img='$image' WHERE _id='$id'";
if (mysqli_query($conn,$sql))
{
    header("Location:viewproduct.php");
}  
else
{
    echo"sai roi". mysqli_error($conn);
}
          
 ?>