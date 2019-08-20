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
        <h1> List All Product </h1> 
        <form action="viewproduct.php"method="POST">
        <table border="1px sol0id black"width="60%">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Image</th>
                 <th>Delete</th>
                  <th>Update</th>
            </tr>
            <?php
            require_once 'connectsql.php';
            $sql= "SELECT * FROM tblproduct";
            $result=mysqli_query($conn,$sql);
            while($row= mysqli_fetch_array($result)){
                ?>
            <tr>
            <td> <?=$row["_id"]?></td>
            <td> <?=$row["_name"]?></td>
             <td> <?=$row["_category"]?></td>
            <td> <?=$row["_price"]?></td>
            <td> <?=$row["_quantity"]?></td>
            <td> <?=$row["_description"]?></td>
            <td><?=$row["img"]?></td>
            <td> <a href="Delete.php?id=<?=$row['_id']?>">Delete</a></td>
            <td> <a href="Update.php?id=<?=$row['_id']?>">Update</a></td>
            </tr>
            <?php
            }
            mysqli_close($conn)
            ?>
        </table>
        </form>
        <a href="addNewProduct.php">Add new</a> <a href="ShopQA.php">Home</a>
    </body>
</html>
