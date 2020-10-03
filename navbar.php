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
    <div class="navbar-fixed white black-text">
        
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
        <div><a href="index.php" class="brand-logo center"><img src="./images/Endurance5.png" height="50"></a></div>

        <ul class="left hide-on-med-and-down">
            <li><div><a href="index.php" class="brand-logo center"><img src="./images/Endurance5.png" height="50"></a></div></li>
            <li class="<?php active('index.php');?>"><a href="index.php" class="black-text">Home</a></li>
            <li class="<?php active('contact.php');?>"><a href="contact.php" class="black-text">Contact Us</a></li>
            <li class="<?php active('documents.php');?>"><a href="documents.php" class="black-text">Documents</a></li>
            <li class="<?php active('about.php');?>"><a href="about.php" class="black-text">About Us</a></li>
            <li class="<?php active('products.php');?>"><a href="products.php" class="black-text">Products</a></li>
        </ul>
    </div>

    <ul class="side-nav" id="mobile-demo">
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>

        <a href="index.php"><img src="./images/Endurance5.png" height="50"></a>
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="documents.php">Documents</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="products.php">Products</a></li>
  </ul>


</nav>