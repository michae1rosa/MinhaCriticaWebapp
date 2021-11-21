<!--?php  require_once ("home.html") ?-->




<?php
 session_start();

 if(isset($_SESSION['user']))
 {
     header("location: home.html");
 }

 ?>

