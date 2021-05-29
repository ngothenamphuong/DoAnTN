<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<!-- Messenger Plugin chat Code -->
   
 	<div class="container-fluid bg">

 		<div class="row">
 			<div class="col-5 ">
				<img class="margin imglogo" src="webroot/img/logo.png" >
				<h6 class="chutrang"><i class="fas fa-home"></i>&#160;&#160; 656 QUANG TRUNG - GÒ VẤP - Thành phố HỒ CHÍ MINH</h6>
				<h6 class="chutrang2"><i class="fas fa-phone-alt"></i> &#160;&#160; 0383.202122 </h6>
				<h3 class="chutrang"><i class="fas fa-store"></i> &#160;&#160; Opening from Monday - Sunday ( 9am- 10pm)</h3>
				<img  class="margin imglogo2" src="webroot/img/dathongbao.png" alt="">
			</div>
			<div class="col-5">
				<h6 class="chutrang3 ">DỊCH VỤ - HỔ TRỢ KHÁCH HÀNG</h6>
				<h6 class="chutrang"><i class="fas fa-truck"></i>&#160;&#160; Giao Hàng Toàn Quốc</h6>
				<h6 class="chutrang"><i class="fas fa-shipping-fast"></i>&#160;&#160; Giao Hàng Nhanh</h6>
				<h6 class="chutrang"><i class="fas fa-archive"></i>&#160;&#160; Đóng gói kỹ càng</h6>
				<h6 class="chutrang"><i class="far fa-thumbs-up"></i>&#160;&#160; Cam kết chất lượng</h6>
				<h6 class="chutrang2"><i class="fas fa-phone-alt"></i> &#160;&#160;Chăm sóc khách hàng : 0383.202122</h6>
				<h1 style="color: #333;">
					<i class="fab fa-cc-mastercard"></i> &#160;&#160;<i class="fab fa-cc-visa"></i> &#160;&#160;
					<i class="fab fa-cc-stripe"></i>&#160;&#160;<i class="fab fa-cc-jcb"></i>
				</h1>
				<h1 style="color: #333;">
					<i class="fab fa-cc-discover"></i> &#160;&#160;<i class="fab fa-cc-apple-pay"></i>&#160;&#160;
					<i class="fab fa-cc-amex"></i> &#160;&#160;<i class="fab fa-cc-amazon-pay"></i>
				</h1>
			</div>
			<div class="col-2">
				<h6 class="chutrang3 ">FOLLOW US </h6>
				<label class="fb"><a href="https://www.facebook.com/Sport-Shoes-102346958677513" target="_blank">
										<i class="fab fa-facebook-square"></i></a>&#160;&#160;
								  <a href="https://www.instagram.com"  target="_blank">
								  		<i class="fab fa-instagram"></i></a>&#160;&#160;
								   <a href="https://twitter.com"  target="_blank">
								  		<i class="fab fa-twitter"></i></a>
								  		
				</label>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSport-Shoes-102346958677513&tabs=timeline&width=340&height=473&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="250" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
			</div>
			<div class="col-12">
				<br>
				<h3 class="chutrang text-center">Copyrights © Nhân & Phương </h3>
			</div>
 		</div>
 			

	</div>
		 <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Plugin chat code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="102346958677513">
      </div>
<div class="chat-box-footer" id="chat-box-footer">
<div class="chat-box">
  <div class="header" id="header-chat" onclick="HeaderChat();">
    <div class="avatar-wrapper avatar-big">
      <img src="https://znews-photo.zadn.vn/w660/Uploaded/pnbcuhbatgunb/2020_03_23/i13863960814_1.jpg" alt="avatar" />
    </div>
    <span class="name">Crush</span>
    <span class="options">
      <i class="fas fa-ellipsis-h"></i>
    </span>
  </div>
  <div class="chat-room">
    <div class="message message-left">
      <div class="avatar-wrapper avatar-small">
        <img src="https://znews-photo.zadn.vn/w660/Uploaded/pnbcuhbatgunb/2020_03_23/i13863960814_1.jpg" alt="avatar" />
      </div>
      <div class="bubble bubble-light">
        Hey anhat!
      </div>
    </div>
    <div class="message message-right">
      <div class="avatar-wrapper avatar-small">
        <img src="http://localhost/onishoes/webroot/img/logo.png" alt="avatar" />
      </div>
      <div class="bubble bubble-dark">
        what is going on?
      </div>
    </div>
  </div>
  <div class="type-area">
    <div class="input-wrapper">
      <input type="text" id="inputText" placeholder="Type messages here..." />
    </div>
    <span class="button-add">
      <i class="fas fa-plus-circle"></i>
      <div class="others">
        <span class="emoji-button">
          <i class="far fa-laugh"></i>
         
        </span>
        <span class="image-button">
          <i class="far fa-image"></i>
        </span>
        <span>
          <i class="fas fa-paperclip"></i>
        </span>
      </div>
    </span>
    <button class="button-send">Send</button>
  </div>

</div></div>
<button class="chat-button" id="chat-button" onclick="ButtonChat();">
	Chat
</button>
<script>	

//Content Loaded
window.addEventListener("DOMContentLoaded", (e) => {
  var header = document.querySelector(".header");
  var chatRoom = document.querySelector(".chat-room");
  var typeArea = document.querySelector(".type-area");
  var btnAdd = document.querySelector(".button-add");
  var others = document.querySelector(".others");
  var emojiBox = document.querySelector(".emoji-button .emoji-box");
  var emojiButton = document.querySelector(".others .emoji-button");
  var emojis = document.querySelectorAll(".emoji-box span");
  var inputText = document.querySelector("#inputText");
  var btnSend = document.querySelector(".button-send");
  var messageArea=document.querySelector(".message.message-right");
  //Header onclick event
  header.addEventListener("click", (e) => {
    if (typeArea.classList.contains("d-none")) {
      header.style.borderRadius = "20px 20px 0 0";
    } else {
      header.style.borderRadius = "20px";
    }
    typeArea.classList.toggle("d-none");
    chatRoom.classList.toggle("d-none");
  });
  //Button Add onclick event
  btnAdd.addEventListener("click", (e) => {
    others.classList.add("others-show");
  });
  //Emoji onclick event
  emojiButton.addEventListener("click", (e) => {
    emojiBox.classList.add("emoji-show");
  });
   //Button Send onclick event
  btnSend.addEventListener("click", (e) => {
    var mess=inputText.value;
    var bubble=document.createElement('div');
    bubble.className+=" bubble bubble-dark";
    bubble.textContent=mess;
    messageArea.appendChild(bubble);
    inputText.value="";
  });
  for (var emoji of emojis) {
    emoji.addEventListener("click", (e) => {
      e.stopPropagation();
      emojiBox.classList.remove("emoji-show");
      others.classList.remove("others-show");
      inputText.value+=e.target.textContent;
    });
  }
});
document.getElementById("myBtn").addEventListener("click", function() {
  document.getElementById("demo").innerHTML = "Hello World";
});
function ButtonChat(){
	document.getElementById("chat-box-footer").style.display="block";
	document.getElementById("chat-button").style.display="none";
}
function HeaderChat(){
	document.getElementById("chat-button").style.display="block";

	document.getElementById("chat-box-footer").style.display="none";
}
</script>

<div class="footer_content"><div class="hotline-phone-ring-wrap" id="hotline-phone-1"><div class="hotline-phone-ring"><div class="hotline-phone-ring-circle"></div><div class="hotline-phone-ring-circle-fill"></div><div class="hotline-phone-ring-img-circle"> <a href="tel:+0383202122" class="pps-btn-img"> <span class="background-call"></span> </a></div></div><div class="hotline-bar"> <a href="tel:+0383202122"> <span class="text-hotline">0383.202122</span> </a></div></div><div class="zalo-ben-phai"><div class="hotline-phone-ring"><div class="hotline-phone-ring-circle"></div><div class="hotline-phone-ring-circle-fill"></div><div class="hotline-phone-ring-img-circle"> <a href="https://zalo.me/0383202122" class="pps-btn-img"> <span class="background-zalo-ib"></span></a></div></div> <a href="https://zalo.me/0383202122"> </a></div></div>
<script>
(function() {

  var $$ = function(selector, context) {
    var context = context || document;
    var elements = context.querySelectorAll(selector);
    return [].slice.call(elements);
  };

  function _fncSliderInit($slider, options) {
    var prefix = ".fnc-";

    var $slider = $slider;
    var $slidesCont = $slider.querySelector(prefix + "slider__slides");
    var $slides = $$(prefix + "slide", $slider);
    var $controls = $$(prefix + "nav__control", $slider);
    var $controlsBgs = $$(prefix + "nav__bg", $slider);
    var $progressAS = $$(prefix + "nav__control-progress", $slider);

    var numOfSlides = $slides.length;
    var curSlide = 1;
    var sliding = false;
    var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
    var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

    var autoSlidingActive = false;
    var autoSlidingTO;
    var autoSlidingDelay = 5000; // default autosliding delay value
    var autoSlidingBlocked = false;

    var $activeSlide;
    var $activeControlsBg;
    var $prevControl;

    function setIDs() {
      $slides.forEach(function($slide, index) {
        $slide.classList.add("fnc-slide-" + (index + 1));
      });

      $controls.forEach(function($control, index) {
        $control.setAttribute("data-slide", index + 1);
        $control.classList.add("fnc-nav__control-" + (index + 1));
      });

      $controlsBgs.forEach(function($bg, index) {
        $bg.classList.add("fnc-nav__bg-" + (index + 1));
      });
    };

    setIDs();

    function afterSlidingHandler() {
      $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
      $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");

      $activeSlide.classList.remove("m--before-sliding");
      $activeControlsBg.classList.remove("m--nav-bg-before");
      $prevControl.classList.remove("m--prev-control");
      $prevControl.classList.add("m--reset-progress");
      var triggerLayout = $prevControl.offsetTop;
      $prevControl.classList.remove("m--reset-progress");

      sliding = false;
      var layoutTrigger = $slider.offsetTop;

      if (autoSlidingActive && !autoSlidingBlocked) {
        setAutoslidingTO();
      }
    };

    function performSliding(slideID) {
      if (sliding) return;
      sliding = true;
      window.clearTimeout(autoSlidingTO);
      curSlide = slideID;

      $prevControl = $slider.querySelector(".m--active-control");
      $prevControl.classList.remove("m--active-control");
      $prevControl.classList.add("m--prev-control");
      $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");

      $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
      $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

      $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
      $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");

      $activeSlide.classList.add("m--before-sliding");
      $activeControlsBg.classList.add("m--nav-bg-before");

      var layoutTrigger = $activeSlide.offsetTop;

      $activeSlide.classList.add("m--active-slide");
      $activeControlsBg.classList.add("m--active-nav-bg");

      setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
    };



    function controlClickHandler() {
      if (sliding) return;
      if (this.classList.contains("m--active-control")) return;
      if (options.blockASafterClick) {
        autoSlidingBlocked = true;
        $slider.classList.add("m--autosliding-blocked");
      }

      var slideID = +this.getAttribute("data-slide");

      performSliding(slideID);
    };

    $controls.forEach(function($control) {
      $control.addEventListener("click", controlClickHandler);
    });

    function setAutoslidingTO() {
      window.clearTimeout(autoSlidingTO);
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 1;

      autoSlidingTO = setTimeout(function() {
        performSliding(curSlide);
      }, delay);
    };

    if (options.autoSliding || +options.autoSlidingDelay > 0) {
      if (options.autoSliding === false) return;
      
      autoSlidingActive = true;
      setAutoslidingTO();
      
      $slider.classList.add("m--with-autosliding");
      var triggerLayout = $slider.offsetTop;
      
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      delay += slidingDelay + slidingAT;
      
      $progressAS.forEach(function($progress) {
        $progress.style.transition = "transform " + (delay / 1000) + "s";
      });
    }
    
    $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");

  };

  var fncSlider = function(sliderSelector, options) {
    var $sliders = $$(sliderSelector);

    $sliders.forEach(function($slider) {
      _fncSliderInit($slider, options);
    });
  };

  window.fncSlider = fncSlider;
}());

/* not part of the slider scripts */

/* Slider initialization
options:
autoSliding - boolean
autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
*/
fncSlider(".example-slider", {autoSlidingDelay: 4000});

var $demoCont = document.querySelector(".demo-cont");

[].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
  $btn.addEventListener("click", function() {
    $demoCont.classList.toggle("credits-active");
  });
});

document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
  $demoCont.classList.remove("credits-active");
});

document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
  document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
});
</script>
</body>
</html>