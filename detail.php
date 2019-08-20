<?php
session_start();
require ('template/header.php');
?>
<div class="container">
    <div class="col-md-2"></div>
    <?php
    //dung thu vien ket noi csdl
    require ("library/config.php");
    //thuc hien cau truy van
    $result=mysqli_query($conn,"select _id,_name,_category,_price,_quantity,_description,img");
    $data=mysqli_fetch_assoc(result);
    echo"<div class='col-md-8' style='margin: 50px auto 50px;'>";
    echo"<table class=''table'>";
    echo  "<tr>";
    echo     "<td style='border: 2px solid #45A5A; width:150px; height: 250px;'><img src='image/$data[image]'></td>";
    echo     "<td>";
    echo        "<h4 style='color: #5bc0de'>Ten San Pham: #data[name]</h4>";
    echo " <h4 style='color:#5bc0de'>Mo Ta:</h4>";
    echo "<p> #data[introduce]</p>";
    echo "<h4 style='color: #5bc0de'>Gia Ban: #data[price]đ</h4>";
    echo "<a href= class='btn btn-info'>Them Vao Gio Hang</a>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
    mysqli_close($conn);
    ?>
</div>
<?php
    require 'template/footer.php';
    ?>