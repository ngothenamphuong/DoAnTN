<header class="header navigation--sticky" itemscope="" itemtype="http://schema.org/WPHeader">
   <div class="header__top">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-right">
               <p class="user-check d-inline"> <a href="kings-and-queens">👑 King &amp; Queen</a></p>
               <p class="user-check d-inline"> <a href="thanh-vien"><i class="fas fa-users"></i></i> Check User</a></p>
               <p class="hotline-top d-inline"> <i class="fa fa-phone"></i> <span
                  class="d-none d-lg-inline-block">Hotline:</span> <a href="tel:0909300746">0909300746</a>
               </p>
            </div>
         </div>
      </div>
   </div>
   <nav class="navigation" id="myHeader">
      <div class="container-fluid menu" >
         <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="."><img
               src="https://kingshoes.vn/data/upload/logoSL-1531885749--1532082505--1533780352-.png"
               alt=" Cửa Hàng Giày Sneaker Chính Hãng Tại Tphcm | KING SHOES"></a></div>
         </div>
         <div class="navigation__column center d-none d-xl-block">
            <div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <ul class=" menu-l">
            <li class="w">
               <a href="index.php" title="">Danh Mục <i class="fa fa-angle-down"></i></a>
               <ul class="sub-menu main-menu menu" >
                  <?php $dmsql="SELECT * FROM `danhmuc`";
                     $rss=mysqli_query($conn,$dmsql); 
                     while ($row=mysqli_fetch_array($rss)) { ?>   
                  <li><a href="/onishoes/index.php?view=dksanpham&madm=<?php echo $row['MaDM'];?>&t=<?php echo $row['TenDM'] ?>" ><?php echo $row['TenDM'];?></a></li>
                  <?php  } ?>
               </ul>
            </li>
            
            <li class="w">
               <a href="index.php" title="">Sản Phẩm <i class="fa fa-angle-down"></i></a>
               <ul class="sub-menu">
                  <?php $dmsql="SELECT * FROM `nhacc`";
                     $rss=mysqli_query($conn,$dmsql);                 
                     while ($row=mysqli_fetch_array($rss)) { ?>
                  <li><a href="/onishoes/index.php?view=dksanpham&mancc=<?php echo $row['MaNCC'];?>&t=<?php echo $row['TenNCC'] ?>" ><?php echo $row['TenNCC'];?></a></li>
                  <?php  } ?>
               </ul>
            </li>
            
            <li class="w"><a href="?view=about" title="">Thông Tin</a></li>
            <?php 
               if (isset($_SESSION['login'])) {  
                     $ten=$_SESSION['login'];
                    ?>
            <li class="w">
               <i class="fas fa-user-alt"></i>
               <ul class="sub-menu">
                  <li>Hi, <?php echo $ten['TenKH']; ?></li>
                  <li><a href="?view=thongtinkhachhang">Cập nhập thông tin</a></li>
                  <li><a href="view/main/dangxuat.php">Logout</a></li>
               </ul>
            </li>
            <?php  }else{
               echo '<li class="w"><a href="index.php?view=login" >Đăng Nhập</a>
                     <ul class="sub-menu">
               <li><a href="index.php?view=dangky" title="">Đăng Ký</a></li>
               
               </ul>';
               } ?>
            </li>
            <li><a href="?view=hethong">HỆ THỐNG CỬA HÀNG</a></li>
            <li><a href="?view=hethong">Liên Hệ</a></li>
         </ul>
         <!-- <div class="col-md-2 lh"> --><!-- </div> -->
         <!-- <div class="col-md-1  lh"> --><!-- </div> -->
         <!-- <ul class="menu-r">
            </ul> -->
      </div>
         </div>
         <div class="navigation__column right">
            
            <form action="index.php?view=timkiem" method="POST" accept-charset="utf-8" class="ps-search--header searchform" id="searchform">
            <div class="input-group tk">
               <input class=" form-control inputString form-control border-secondary py-2" name="search" type="search" placeholder="Search" id="inputString">
               <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" name="btsearch">
                  <i class="fa fa-search"></i>
                  </button>
               </div>
            </div>
         </form>


            <div class="ps-cart" id="reloaddivso">
               <a class="ps-cart__toggle" rel="noindex nofollow"
                  href="index.php?view=cart"><span><i><b>
                     <?php $dem=0;
               if(isset($_SESSION['cart_product'])){
                 foreach ($_SESSION['cart_product'] as $item_cart){
                   $dem2=$item_cart['SoLuong'];
                   $dem=$dem+$dem2;
                 }
               }?> 
            <?php echo '( '.$dem.' )'; ?>
                  </b></i></span><i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="menu-toggle"><span></span></div>
         </div>
      </div>
   </nav>
</header>
<!--<div class="container-fluid header">
<div class="row ">
   <div class="col-md-4">
      <a href="index.php" title="">	<img class="logoimg" src="webroot/img/logo.png" ></a>
   </div>
   <!-- <div class="col-md-1 "></div>
      </div> 
</div>
<div class="container-fluid menu" id="menu">
   <div class="row">
      <div class="col-md-8">
         <ul class=" menu-l">
            <li class="w">
               <a href="index.php" title="">Danh Mục <i class="fa fa-angle-down"></i></a>
               <ul class="sub-menu main-menu menu" >
                  <?php $dmsql="SELECT * FROM `danhmuc`";
                     $rss=mysqli_query($conn,$dmsql); 
                     while ($row=mysqli_fetch_array($rss)) { ?>	
                  <li><a href="/onishoes/index.php?view=dksanpham&madm=<?php echo $row['MaDM'];?>&t=<?php echo $row['TenDM'] ?>" ><?php echo $row['TenDM'];?></a></li>
                  <?php  } ?>
               </ul>
            </li>
            <li class="a2 w"></li>
            <li class="w">
               <a href="index.php" title="">Sản Phẩm <i class="fa fa-angle-down"></i></a>
               <ul class="sub-menu">
                  <?php $dmsql="SELECT * FROM `nhacc`";
                     $rss=mysqli_query($conn,$dmsql);                 
                     while ($row=mysqli_fetch_array($rss)) { ?>
                  <li><a href="/onishoes/index.php?view=dksanpham&mancc=<?php echo $row['MaNCC'];?>&t=<?php echo $row['TenNCC'] ?>" ><?php echo $row['TenNCC'];?></a></li>
                  <?php  } ?>
               </ul>
            </li>
            <li class="a2 w"></li>
            <li class="w"><a href="?view=about" title="">Thông Tin</a></li>
            <?php 
               if (isset($_SESSION['login'])) {  
                     $ten=$_SESSION['login'];
                    ?>
            <li class="w">
               <i class="fas fa-user-alt"></i>
               <ul class="sub-menu">
                  <li>Hi, <?php echo $ten['TenKH']; ?></li>
                  <li><a href="?view=thongtinkhachhang">Cập nhập thông tin</a></li>
                  <li><a href="view/main/dangxuat.php">Logout</a></li>
               </ul>
            </li>
            <?php  }else{
               echo '<li class="w"><a href="index.php?view=login" >Đăng Nhập</a>
                		<ul class="sub-menu">
               <li><a href="index.php?view=dangky" title="">Đăng Ký</a></li>
               
               </ul>';
               } ?>
            </li>
            <li><a href="?view=hethong">HỆ THỐNG CỬA HÀNG</a></li>
            <li><a href="?view=hethong">Liên Hệ</a></li>
         </ul>
         <!-- <div class="col-md-2 lh"> --><!-- </div> -->
         <!-- <div class="col-md-1  lh"> --><!-- </div> -->
         <!-- <ul class="menu-r">
            </ul> 
      </div>
      <div class="col-md-3 ">
         <form action="index.php?view=timkiem" method="POST" accept-charset="utf-8">
            <div class="input-group tk">
               <input class="form-control border-secondary py-2" name="search" type="search" placeholder="Search">
               <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit" name="btsearch">
                  <i class="fa fa-search"></i>
                  </button>
               </div>
            </div>
         </form>
      </div>
      <div class="col-4 ">
         <li class="cart1  r">
            <a href="index.php?view=cart" title="">
            Giỏ Hàng <i class="fa fa-shopping-bag"></i>
            <?php $dem=0;
               if(isset($_SESSION['cart_product'])){
                 foreach ($_SESSION['cart_product'] as $item_cart){
                   $dem2=$item_cart['SoLuong'];
                   $dem=$dem+$dem2;
                 }
               }?> 
            <?php echo '( '.$dem.' )'; ?>
            </a>
         </li>
      </div>
   </div>
</div>-->

<script>
   
   // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("myHeader");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

</script>
