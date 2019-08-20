<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SHOP QA</title>
        <link rel="stylesheet" stype="text/css" href="Style.css"/>
        <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
    </head>
    <body>
        <div id = website>
          <!--Phan top-->
             <div id ="top">
                 <div id="top-left">
                     <ul>
                         <li><a href="#"><img src="image/facebook.png"/></a></li>
                         <li><a href="#"><img src="image/google-plus.png"/></a></li>
                         <li><a href="#"><img src="image/twitter.png"/></a></li>
                     </ul>
                 </div>
                 <div id="top-right">
                     <ul>
                         <li><img src="image/logout.png"</li>
                         <li>|</li>
                         <li><a href="Login.php">Đăng nhập</a></li>
                         <li>|</li>
                          <li><a href="#">Đăng Kí</a></li>
                     </ul>
                 
                 </div>
             </div>
          <!--Phan header-->
          <div id="header">
              <div style="float: left ; width: 250px;height: 54px ;margin: 6px 0 0 35px;">
                  <a href="#" ><img src="image/logo.png"/></a>
              </div>
              <div style="float: right ; width: 400px;height:153px ;">
                  <div id="shopcart" style="float: right;width: 400px;height: 75px;">
                      <div id="cuahang">
                      <img src="image/cart.png"/>
                      <div id="info-cart">
                          <p>0 sản phẩm</p>
                          <p>0 đ</p>
                          
                      </div>
                      </div>
                  </div>
                  <div id="search">
                      <form id="search-form">
                          <input type="text" placeholder="tìm gì đó đi"id="textsearch"/>
                          <button type="submit" id="search-button">Search</button>
                      </form>
                  </div>
                  <div id="header-phone">
                      SUPPORT : 0373.064.800
                  </div>
              </div>
             
              
          </div>
           <div id="casmenu">
               <ul>
                   <img src="https://img.icons8.com/nolan/64/000000/home.png">
                   <li><a href="#">Trang chủ</a></li>
                   <li><a href="#">Giới thiệu</a></li>
                   <li><a href="#">Thời trang Nam</a></li>
                   <li><a href="#">Thời Trang nữ</a></li>
                   <li><a href="#">Hướng dẫn mua hàng</a></li>
                   <li><a href="#">Liên hệ</a></li>
                   <li><a href="#">Hỗ trợ</a></li>
                   
               </ul>
        </div>
          <div id="ads">
              <div id="ads-trai">
                  <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
                <img src="image/1.jpg" style=" width: 750px ;height: 570px;" />
  	    		</li>
  	    		<li>
  	    	    <img src="image/4.jpg" style=" width: 750px ;height: 570px;" />
  	    		</li>
  	    		<li>
  	    	    <img src="image/3.jpg" style=" width: 750px ;height: 570px;"" />
  	    		</li>
  	    		<li>
  	    	    <img src="image/2.jpg" style=" width: 750px ;height: 570px;"/>
  	    		</li>
          </ul>
        </div>
      </section>
              </div>
              <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav:false,
      });
    });
  </script>
  <div id="ads-phai">
      <img src="image/QQ.gif"style=" width: 580px ;height: 570px;"/>
  </div>
  <div class="clr"></div>
  
   </div>
          <div id="main">
              <div id="main-trai">
                  <div id="menu-trai">
                      <ul  >
                          <li><a href="#">Quần áo nữ</a>
                              <ul class="submenu">
                                  <li><a href="#">Áo thun nữ</a></li>
                                  <li><a href="#">Áo sơ mi nữ</a></li>
                                  <li><a href="#">Váy đầm</a></li>
                              </ul>
                          </li>
                           <li><a href="#">Giày dép nữ</a>
                           <ul class="submenu">
                                  <li><a href="#">Giày cao gót</a></li>
                                  <li><a href="#">Giày thể thao</a></li>
                                  <li><a href="#">giày bata</a></li>
                              </ul>
                           </li>
                      </ul>
                  </div>
                  <div id="facebook"></div>
              </div>
                      
          
           
              <div id="main-phai">
                  
    
<?php 
        require_once 'connectsql.php';
        $id=$_GET['id'];
      
        $sql= "SELECT * FROM tblproduct WHERE _id='$id'";
        $result = mysqli_query($conn, $sql);
        $rs = mysqli_fetch_array($result);
    ?>
  
  
                      <ul>
                          <li>
                             
                              <div  class="content" style="width: 600px;height: 700px">
                                     
                                 
                                  <image width="260px" height="320px" src="image/<?=$rs['img']?>" alt=""/>
                                  <div class="content2" style="width: 400px;height: 400px;float: left;">
                                       <h3>ID:       <?=$rs['_id'] ?></h3>               
	                          <h3>Name:       <?=$rs['_name'] ?></h3>
                                   <h3>Category:      <?=$rs['_category']?> </h3>
                                   <h3>price:       <?=$rs['_price'] ?></h3>               
	                           <h3>Quantity:       <?=$rs['_quantity'] ?></h3>
                      
                                   <h3>Description:<?=$rs['_description'] ?></h3>
                                   
                                 
                                 
                                    </div>
                              </div>
                             
                          </li>
                          
                          
                      </ul>
               
              </div>
          </div>
        
 </div>
       
       
        <?php
        // put your code here
        ?>
    </body>
</html>
