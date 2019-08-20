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
        <h1> Add new Product </h1>
        <form method ="POST" action="truyvansanpham.php"/>
        ID product:<input type="text" name="txtID"/><br/>
        Name:<input type="text" name="txtName"/><br/>
        category:<input type="text" name="txtTheloai"/><br/>
        Price:<input type="text"name="txtPrice"/><br/>
        Quantity:<input type="number" name ="txtQuantity"/><br/>
        Description:<textarea rows="10" cols="30"name="txtDes"> </textarea><br/>
        Image:<input type="text" name="txtImg"/><br/>
        <input type="submit" value="ADD New"/><br/>
    </body>
</html>