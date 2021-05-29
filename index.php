<?php 
  ob_start();
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>GIÀY CHÍNH HÃNG - ĐẸP - CHẤT LƯỢNG - PHONG CÁCH</title>
    <link href="webroot/font/Font Awesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="webroot/bootstrap4/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Sen:400,700,800&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/cb2ec89b0c.js" crossorigin="anonymous"></script><link rel="stylesheet" href="./style.css">

    <link rel="stylesheet" href="webroot/web.css">
    
    <script src="webroot/jquery/jquery.js"></script>
    <script src="webroot/bootstrap4/js/bootstrap.js"></script>
   <!-- tuyết rơi     <script type="text/javascript" src="webroot/tuyetroi.js"></script>  tuyết rơi   --> 

</head>
<body >

   
    <?php
          include_once 'config/database.php';
          include_once('view/element/header.php');
          include_once('controller/view-controller.php');
          include_once('view/element/footer.php');

	?>


</body>
</html>