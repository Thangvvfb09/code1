<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'connectsql.php';
        $id= $_GET['id'];
        $sql ="SELECT * FROM tblproduct WHERE _id='$id' ";
        $result= mysqli_query($conn, $sql);
        $row= mysqli_fetch_array($result);
        ?>
        <h1> Update PRODUCT </h1> 
        <FORM action="actionUpdate.php" method="POST"> 
            ID  &emsp; <input type="text" name="txtID" value="<?=$row["_id"]?>" size="30"/> <br/> <br/>
            Name  &emsp; <input type="text" name="txtName" value="<?=$row["_name"]?>" size="30"/> <br/> <br/>
            Category  &emsp; <input type="text" name="txtTheloai" value="<?=$row["_category"]?>" size="30"/> <br/> <br/>
            Price &emsp;  <input type="number" name="txtPrice" value="<?=$row["_price"]?>" size="30"/> <br/> <br/>
            Quality  &emsp; <input type="number" name="txtQuantity" value="<?=$row["_quantity"]?>" size="30"/> <br/> <br/>
           
            <textarea name="txtDes" value="description" style="width: 200px;height: 200px;"> Description </textarea>
            Image  &emsp; <input type="text" name="txtImg" value="<?=$row["img"]?>" size="30"/> <br/> <br/>
            <br/>
            <input type="submit" value="Update" name="btnUpdate"/> 
             
        </FORM>
    </body>
</html>