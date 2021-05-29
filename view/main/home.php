<?php   
   $sx='';
   if(isset($_GET['sx'])){
   	$sx=$_GET['sx'];
   }
   switch ($sx) {
   		case 'price-ascending':
   			$sx1=" ORDER BY DonGia ASC ";
   			break;
   		case 'price-descending':
   			$sx1=" ORDER BY DonGia DESC ";
   			break;
   		default:
   			$sx1=" ";
   			break;
   	
   }
            // lấy danh mục sản phẩm nổi bật			
            $spnb="SELECT * FROM `danhmuc` WHERE `TenDM`=N'Sản Phẩm Nổi Bật' ";
            $query_spnb=mysqli_query($conn,$spnb);
            $kq_dm=mysqli_fetch_array($query_spnb);
            // lấy danh sách sản phẩm của sản phẩm nổi bật theo phân trang.
            if(isset($_GET['trang'])){
                $trang=$_GET['trang'];
                $sx1=$_GET['sx'];
            }
            else{ $trang=1;}
   
            $from =($trang-1)*12;
   
            $ds_spnb="SELECT * FROM `sanpham` WHERE `MaDM`=".$kq_dm['MaDM']." ".$sx1." LIMIT $from,12 ";
            $query_dssp=mysqli_query($conn,$ds_spnb);
   
   ?>
<!-- <div class="container-fluid ">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-bottom:39px">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./webroot/img/converse.gif" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./webroot/img/adidas.png" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./webroot/img/balencia.png" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   </div> -->
<!--
   Follow me on
   Dribbble: https://dribbble.com/supahfunk
   Twitter: https://twitter.com/supahfunk
   Codepen: https://codepen.io/supah/
   
   -->
<!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<div class="demo-cont">
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Black</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Widow</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Captain</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>America</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Iron</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Man</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-blue">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Thor</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Just Thor</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
    </div>
    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          Black Widow
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Captain America
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Iron Man
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Thor
          <span class="fnc-nav__control-progress"></span>
        </button>
      </div>
    </nav>
  </div>
  <!-- slider end -->
  <div class="demo-cont__credits">
    <div class="demo-cont__credits-close"></div>
    <h2 class="demo-cont__credits-heading">Made by</h2>
    <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
    <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
    <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
    <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
    <h2 class="demo-cont__credits-heading">Based on</h2>
    <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
    <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
    <div class="colorful-switch">
      <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
      <label class="colorful-switch__label" for="colorful-switch-cb">
        <span class="colorful-switch__bg"></span>
        <span class="colorful-switch__dot"></span>
        <span class="colorful-switch__on">
          <span class="colorful-switch__on__inner"></span>
        </span>
        <span class="colorful-switch__off"></span>
      </label>
    </div>
  </div>
</div><!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->

<div class="">
   <div class="row boderbot" >
      <h3 class="col-md-10 ft"> <?php echo mb_strtoupper($kq_dm['TenDM']); ?> </h3>
      <select name="SortBy" id="SortBy" onchange="validateSelectBox(this)" class="form-control form-control-sm col-2 form-horizontal">
         <option value="default">Tùy chọn</option>
         <option <?php if ($sx=='price-ascending') {echo 'selected';}?>
            value="price-ascending">Giá từ thấp tới cao</option>
         <option <?php if ($sx==='price-descending') {echo ' selected="selected"';}?>
            value="price-descending">Giá từ cao tới thấp</option>
      </select>
   </div>
   <div class="row boderbot ">
      <?php while ($kq_dssp=mysqli_fetch_array($query_dssp)) {
         // lấy tên nhà sản xuất sản phẩm nổi bật
         $ncc="SELECT * FROM `nhacc` WHERE `MaNCC`=".$kq_dssp['MaNCC'];
         $query_ncc=mysqli_query($conn,$ncc);
         $kq_ncc=mysqli_fetch_array($query_ncc);
         $km="SELECT * FROM `sanphamkhuyenmai` WHERE `MaSP`=".$kq_dssp['MaSP'];
         $query_km=mysqli_query($conn,$km);
         date_default_timezone_set('Asia/Ho_Chi_Minh');$date=getdate();
         $ngay=$date['year']."-".$date['mon']."-".($date['mday']);$a=0;$b=0;
         while ($kq_km=mysqli_fetch_array($query_km)) {
         $km1="SELECT * FROM `khuyenmai` WHERE `MaKM`=".$kq_km['MaKM']." and NgayBD <='".$ngay."' and NgayKT >='".$ngay."'";
         $query_km1=mysqli_query($conn,$km1);
         while ($kq_km=mysqli_fetch_array($query_km1)) { 
         		 if(isset($kq_km['KM_PT'])){ $b=$b+($kq_km['KM_PT']);} 
         		 if(isset($kq_km['TienKM'])){ $a=$a+($kq_km['TienKM']);} 				            	
         }	
         } 
         ?>
      <div class="col-3 item">
         <div class="item2">
            <a  href="index.php?view=chitietsanpham&masp=<?php echo $kq_dssp['MaSP']; ?>" >
               <div>
                  <img src="./webroot/img/sanpham/<?php echo $kq_dssp['AnhNen'];?>"  class="img-circle img-thumbnail item-img">
                  <?php   if ($a!==0){
                     if($b!==0){echo '<label class="sale">Giảm: '.$b.'% & '.number_format($a).'đ</label>';}
                     else{echo '<label class="sale1">Giảm: '.number_format($a).'đ</label>';}
                     }else if ($b!==0){echo '<label class="sale2">Giảm: '.$b.'%</label>';}?>
               </div>
               <div class="item-text ft text-center">
                  <h6 ><?php echo $kq_dssp['TenSP']?></h6>
                  <?php   	if ($a!==0 || $b!==0) {?>
                  <p class="ft2 gia"><strike><?php echo number_format($kq_dssp['DonGia'], 0 , $c = "," , $d = "." ).' '.' VND' ; ?></strike></p>
                  <?php $t=0; if($b==0){$t=$kq_dssp['DonGia']-$a;}else{$t=($kq_dssp['DonGia']-($kq_dssp['DonGia']*$b)/100)-$a;}?>
                  <p class="ft2 gia2"><mark class="badge-danger"><?php echo number_format($t, 0 , $c = "," , $d = "." ).' '.' VND' ; ?></mark></p>
                  <?php }else{?>
                  <p class="ft2 "><mark class="badge-danger"><?php echo number_format($kq_dssp['DonGia'], 0 , $c = "," , $d = "." ).' '.' VND' ; ?></mark></p>
                  <?php }?>
                  <p ><?php echo ($kq_ncc['TenNCC']) ; ?></p>
               </div>
            </a>
         </div>
      </div>
      <?php } ?>
   </div>
</div>
</div>  
<!-- Phân trang -->
<?php  
   $ds_spn1b="SELECT MaSP FROM `sanpham` WHERE `MaDM`=".$kq_dm['MaDM'];
   $query_dssp2=mysqli_query($conn,$ds_spn1b);
   $sosp=mysqli_num_rows($query_dssp2);
   $sotrang = ceil($sosp/12); ?> </div>
<hr>
<ul class="pagination justify-content-center">
   <?php for($x=1;$x<=$sotrang;$x++){ ?>
   <li class="page-item"><a class="page-link" href="?trang=<?php echo $x ?>&sx=<?php echo $sx1 ?>"><?php echo $x ;?></a></li>
   <?php } ?>
</ul>
<!-- sắp xếp sản phẩm  -->
<form action="" method="get" accept-charset="utf-8">
   <input type="submit" name="sx" id="result" hidden>
</form>
<script language="javascript">
   function validateSelectBox(obj){
       var options = obj.children;
       var html = '';
       for (var i = 0; i < options.length; i++){
           if (options[i].selected){
              document.getElementById('result').value =options[i].value;
              jQuery('#result').click();
           }
       }      
      
   }
</script>
<!-- end sắp xếp sản phẩm  -->