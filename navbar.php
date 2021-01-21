<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
<nav>
<div class="row">
    <div class="navbar-fixed white black-text col m2 l4">
        
        <a href="#" data-activates="slide-out" class="button-collapse "><i class="material-icons black-text">menu</i></a>

        <div><a href="index.php" class="brand-logo center"><img src="./images/Endurance5.png" height="50"></a></div>
        <ul class="left hide-on-med-and-down">
            <!-- <li class="<?php active('index.php');?>"><a href="index.php" class="black-text">Home</a></li> -->
            <li class="<?php active('contact.php');?>" ><a href="contact.php" class="homelink black-text">Contact Us</a></li>
            <li class="<?php active('documents.php');?>"><a href="documents.php" class="homelink black-text">Documents</a></li>
            <li class="<?php active('about.php');?>"><a href="about.php" class="homelink black-text">About Us</a></li>
            <li class="<?php active('products.php');?>"><a href="products.php" class="homelink black-text">Products</a></li>
            <li></li>
<!-- style="margin: auto auto auto 100px" -->

        </ul>
    </div>
    </div>

    <ul class="side-nav" id="slide-out">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="documents.php">Documents</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
  </ul>


</nav>