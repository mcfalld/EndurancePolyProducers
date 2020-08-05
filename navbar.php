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
    <div class="nav-wrapper deep-orange">
        <a href="index.php" class="brand-logo center"><img src="./images/Endurance5.png" width="200">
        </a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down">
            <li class="<?php active('index.php');?>"><a href="index.php">Home</a></li>
            <li class="<?php active('contact.php');?>"><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <ul class="side-nav" id="mobile-demo">
        <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Contact Us</a></li>
  </ul>


</nav>