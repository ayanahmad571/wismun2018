
<?php
/*** set the content type header ***/
header("Content-type: text/css");
include('db_auth.php');
?>
<?php
$web_config =array();

$web_mastersql = "SELECT * FROM web_config where valid = 1 limit 1 ";
$wmrs = $conn->query($web_mastersql);

if ($wmrs->num_rows == 1) {
    // output data of each row
   $wmrw = $wmrs->fetch_assoc();
   
   $web_config = $wmrw;
} else {
    echo "0 results";
}


?>
<style>/*reset css starts here*/

* { margin:0; padding:0; }
h1, h2, h3, h4, h5, h6, p, ul, li, body, html, form, fieldset { margin:0; padding:0; outline:none; font-weight:400; border:0 }
form, fieldset { width:100% }
img { border:0; }
a { text-decoration:none; border:0; outline:0; }
.clear { clear:both; width:auto !important }
ul { list-style:none; }
article, section, footer, header, figure, aside, hgroup, nav{display:block;}
header,nav,article,footer,section,aside,figure,figcaption{display:block}
button {outline: none; border: none; box-shadow: none; background: none;}
a:focus, input:focus,button:focus, textarea:focus, *:focus { outline:0 !important; box-shadow:none !important;}
input[type=text], textarea{-webkit-appearance: none;}
/*reset css ends here*/
html {margin:0px; padding:0px; height:100%; width: 100%;}
body {margin:0px; padding:0px; font-size:14px; line-height:24px; height:100%; width:100%; font-family: 'Lato'; color:#222; background-color: #fff; font-weight: 450; font-style: normal;  -webkit-user-select: none; -moz-user-select: none; -khtml-user-select: none; -ms-user-select: none; }
.container{width:100%; max-width:1200px;}
a, input{text-decoration:none; color: inherit; outline:none; transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in; }
a:hover {text-decoration: none;color: #222;}
a img{border: 0px none;}
a:hover {outline: none;}
a:active {outline: none; text-decoration: none;}
a:focus {outline: none; outline-offset: 0px; text-decoration: none; color:inherit;}
::-webkit-input-placeholder {color:#999; opacity: 1;}
::-moz-placeholder {color:#999; opacity: 1;}
:-moz-placeholder {color:#999; opacity: 1;}
:-ms-input-placeholder {color:#999; opacity: 1;}
img {max-width: 100%;}
h1, h2, h3, h4, h5, h6{font-weight: bold;margin:0px; padding:0px; margin-bottom:15px; line-height:170%; text-transform:uppercase; letter-spacing:3px;}
h1{font-size:40px;}
h2{font-size:32px;}
h3{font-size:24px;}
h4{font-size:19px;}
h5{font-size:16px;}
h6{font-size:14px;}
p{margin:0px; padding:0px; margin-bottom:25px;}
.large-text{font-size:18px;}
p:last-child{margin-bottom:0;}
p b{font-weight:400;}
p strong{font-weight:400;}
.main-container p a:not(.btn), .inner-container p a:not(.btn){border-bottom:dotted 1px;}
.main-container p a:not(.btn):hover, .inner-container p a:not(.btn):hover{ border-bottom-color:transparent;}
.mar-20 {margin-bottom: 20px;}
.mar-30 {margin-bottom: 30px;}
.mar-40 {margin-bottom: 40px;}
.mar-50 {margin-bottom: 50px;}
.mar-60 {margin-bottom: 60px;}
.mar-100 {margin-bottom: 100px;}
.h-30{height:30px; width:100%; clear:both;}
.h-40{height:40px; width:100%; clear:both;}
.h-50{height:50px; width:100%; clear:both;}
.ion-lg{font-size:100px;}
.no-mar{margin:0;}
/* LOADING */
#loading{background-color: #f6f6f6; height: 100%; width: 100%; position: fixed; z-index: 9999; margin-top: 0px; top: 0px;}
#loading-center{width: 100%;height: 100%;position: relative;}
#loading-center-absolute { position: absolute; left: 50%; top: 43%; height: 110px; width: 110px; margin-top: -55px; margin-left: -55px;}
.object{width: 20px; height: 20px; background-color: #222; float: left; margin-right: 15px; margin-top: 65px; -moz-border-radius: 50% 50% 50% 50%; -webkit-border-radius: 50% 50% 50% 50%; border-radius: 50% 50% 50% 50%; }
#object_one {	 -webkit-animation: object_one 1.5s infinite; animation: object_one 1.5s infinite; }
#object_two { -webkit-animation: object_two 1.5s infinite; animation: object_two 1.5s infinite; -webkit-animation-delay: 0.25s;  animation-delay: 0.25s; }
#object_three {  -webkit-animation: object_three 1.5s infinite; animation: object_three 1.5s infinite; -webkit-animation-delay: 0.5s; animation-delay: 0.5s;}
@-webkit-keyframes object_one {75% { -webkit-transform: scale(0); }}
@keyframes object_one {75% {transform: scale(0);-webkit-transform: scale(0);}}
@-webkit-keyframes object_two {75% { -webkit-transform: scale(0); }}
@keyframes object_two {75% { transform: scale(0); -webkit-transform:  scale(0);}}
@-webkit-keyframes object_three {75% { -webkit-transform: scale(0); }}
@keyframes object_three { 75% {  transform: scale(0); -webkit-transform: scale(0);}}
header{width:100%; position:fixed; left:0; right:0; top:0; background:rgba(25,37,91,1);  z-index:999; height:60px; }
.logo {position: relative; float: left; margin: 22px 0 0 0; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
.logo img {max-width: 150px; float:left;}
.header-cart {position: relative;float: right; padding-top:18px; transition: all .2s ease-out;-webkit-transition: all .2s ease-out;-moz-transition: all .2s ease-out;-ms-transition: all .2s ease-out;}
.nav-menu-icon {position: relative; float: right; width: 24px; height: 24px; z-index: 600; margin-right: 50px; margin-top: 20px; display: none; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
.nav-menu-icon a {display: block;width:24px;height:24px;cursor: pointer;text-decoration: none; top:15px; position:relative;}
.nav-menu-icon a i {position: relative;display: inline-block;width: 24px;height: 3px;color:#222; text-indent:-55px;background: white; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
.nav-menu-icon a i:before, .nav-menu-icon a i:after {content:''; width: 24px;height: 3px;background: white;position: absolute;left:0;transition:all .2s ease-out;}
.nav-menu-icon a i:before {top: -7px;}
.nav-menu-icon a i:after {bottom: -7px;}
.nav-menu-icon a:hover i:before {top: -9px;}
.nav-menu-icon a:hover i:after {bottom: -9px;}
.nav-menu-icon a.active i {background: none;}
.nav-menu-icon a.active i:before {top:0;-webkit-transform: rotateZ(45deg);-moz-transform: rotateZ(45deg);-ms-transform: rotateZ(45deg);-o-transform: rotateZ(45deg);transform: rotateZ(45deg);}
.nav-menu-icon a.active i:after {bottom:0;-webkit-transform: rotateZ(-45deg);-moz-transform: rotateZ(-45deg);-ms-transform: rotateZ(-45deg);-o-transform: rotateZ(-45deg);transform: rotateZ(-45deg);}
nav {position: relative; float: right; margin-right: 30px; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out; text-transform:uppercase;} 
nav > ul > li {position: relative; float: left; margin: 0px 21px; font-size: 12px; font-weight: 300; line-height: 16px; text-transform: uppercase;}
nav > ul > li > a:hover {color: #F7EFC0;}
nav ul li a {color: #fff; padding:22px 0; display:inline-block; font-weight:bold;}
.current-menu-item, nav > ul > li.active > a {color: #222; font-weight: 300;}
nav > ul > li.active > a > span {color: #222; transform: rotateX(-180deg);-webkit-transform: rotateX(-180deg);-moz-transform: rotateX(-180deg);-ms-transform: rotateX(-180deg);}
nav > ul > li > a > span {padding-left: 10px; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
nav ul > li ul {opacity: 0; position: absolute; top: 60px; visibility: hidden; left: -10px; display: block; min-width: 160px;  transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out; background: #fff; background:rgba(255,255,255,0.85); -webkit-box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.05); -moz-box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.05); -ms-box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.05); -o-box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.05); box-shadow: 0px 2px 5px 0 rgba(0,0,0,0.05);}
nav ul > li > ul > li span {position: absolute; right: 12px; line-height: 15px;  transform: rotate(-90deg);-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-ms-transform: rotate(-90deg);  transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
nav ul > li:hover .dropmenu {opacity: 1; visibility: visible; }
nav ul > li > ul > li > ul {opacity: 0; visibility: hidden; position: absolute; left: 100%; max-width: 150px; background: #fff; background:rgba(255,255,255,0.8); top: 0px; }
nav ul > li > ul > li {position: relative; }
nav ul > li > ul > li:last-child{border-bottom: 0px none;}
nav ul > li > ul > li:hover > ul {opacity: 1; visibility: visible;}
nav ul li > ul li a {display: block; clear: both; padding: 8px 10px; position: relative; font-size: 12px; line-height: 16px;}
nav ul > li > ul > li > a:hover {background: #222; color: #f6f6f6;}
.banner-container{width:100%; height:100%; background-position:center top; background-repeat:no-repeat; background-size:cover; position:relative; }
.inner-banner-container{width:100%; height:550px; background: url(include/images/fourthestate.png) no-repeat center top; background-size:cover; background-attachment:fixed; position:relative;padding-top:60px;  }
.banner-container:before, .inner-banner-container:before,.banner-slide:before, .text-rotator:before{content:''; position:absolute; left:0; top:0; width:100%; height:100%; float:left; background:rgba(0,0,0,0.2); }
.banner-image{width:100%; height:100%; padding-top:60px; background: url(<?php echo $web_config['web_school_logo_lg'];
?>) no-repeat center top; background-size:cover; background-attachment:fixed;}
.banner-video{width:100%; height:100%; position:relative;}
.banner-slider{width:100%; height:100%; position:relative;}
.banner-slide{width:100%; height:100%; background-position:center top; background-repeat:no-repeat; background-size:cover; position:relative; z-index:2;}
.banner-slider.slick-slider .slick-track, .banner-slider.slick-slider .slick-list{height:100%;}
.banner-slider .slick-dots{bottom:10px;}
.text-rotator{width:100%; height:100%;position:relative;  background: url(include/images/banner2.jpg) no-repeat center top; background-size:cover; background-attachment:fixed;}
.text-slide{width:100%; height:100%; position:relative; z-index:2;}
.text-rotator.slick-slider .slick-track, .text-rotator.slick-slider .slick-list{height:100%;}
.text-rotator .slick-dots{bottom:0;}
.mc-hide-scrolls{overflow:hidden;}
body .mc-cycle { height:100%; left:0; overflow:hidden; position:fixed; top:0; width:100%; z-index:-1;}
div.mc-image {-webkit-transition: opacity 1s ease-in-out;  -moz-transition: opacity 1s ease-in-out; -o-transition: opacity 1s ease-in-out;  transition: opacity 1s ease-in-out; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position:center center; background-repeat:no-repeat; height:100%; overflow:hidden; width:100%;}
.mc-old-browser .mc-image { overflow:hidden;}
video, object {top:0;left:0;position:absolute;}
.banner-title {position: relative; left: 50%; top: 50%;  transform: translateX(-50%) translateY(-50%);-webkit-transform: translateX(-50%) translateY(-50%);-moz-transform: translateX(-50%) translateY(-50%);-ms-transform: translateX(-50%) translateY(-50%); background: rgba(255,255,255,0.85); padding: 50px 50px; text-align: center; text-transform:uppercase; width:100%; max-width:810px;}
.banner-title h1 {font-size:40px; line-height:40px; margin:0; letter-spacing: 5px; }
.banner-title h2 {font-size:28px; line-height:30px; margin:0; margin-top:20px;  letter-spacing: 5px;}
.intro-scroll-down {position: absolute; z-index: 1;bottom: 35px;left: 50%;margin-left: -15px; cursor: pointer;}
.intro-scroll-down .mouse {position: relative;display: block;width: 30px;height: 45px;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;border: 2px solid #fff;border-radius: 23px;-moz-border-radius: 23px;-webkit-border-radius: 23px;z-index: 50; opacity:0.9;}
.intro-scroll-down .mouse .mouse-dot {position: absolute;display: block;top: 29%;left: 50%;width: 6px;height: 6px;margin: -3px 0 0 -3px;background: #fff;border-radius: 50%;-moz-border-radius: 50%;-webkit-border-radius: 50%; transition:all .2s ease-out;-webkit-transition:all .2s ease-out;-moz-transition:all .2s ease-out;-ms-transition:all .2s ease-out;}
.intro-scroll-down:hover .mouse .mouse-dot{top:70%;}
.welcome-container{padding:80px 0;}
.video-container{margin-bottom:30px; outline: 1px solid #222; outline-offset: 3px; }
ul.list-group{margin-bottom:25px;}
ul.list-group li{padding-left:20px; position:relative;}
ul.list-group li:before{content:"\f3fd"; width:20px; font-family:"Ionicons"; position:absolute; left:0; top:0; font-size:20px; }
.recent-project-container{padding:80px 0; background:#f6f6f6; box-shadow:0 0 6px rgba(0,0,0,0.1) inset; }
.project-img-box{width:98%; display:inline-block; max-width:500px; position:relative;}
.imac-img-content{width: 92.6%; height: 62.3%; float:left; background:#222; position:absolute; left: 3.8%; top: 4.4%; overflow:hidden;}
.imac-img-content img{width:100%; min-width:100%; min-height:100%; float:left;}
.project-img-box img{width:100%; float:left;}
.project-box{padding:0 50px;}
.project-box h4 small{font-weight:300; letter-spacing:1px; color:#222;}
.projects-slides .slick-dots{bottom:10px;}
.projects-slides .slick-dots li span:before{color:#fff;}
.feature-container{ box-shadow:0 1px 6px rgba(0,0,0,0.1); position:relative; z-index:9;  width:100%; display:inline-block;}
.feature-box{background:#fff; text-align:center; padding:40px 30px; position:relative; width:25%;}
.feature-box i{font-size:50px; margin-bottom:15px; cursor:pointer;}
.feature-box:hover{background:#222 !important; color:#f6f6f6;}
.feature-box.dark{background:#f6f6f6;}
.testimonial-container{padding:70px 0; text-align:center; background:#fff url(include/images/testimonial-banner1.JPG) no-repeat center right; background-attachment:fixed; background-size:cover; color:#fff;  position:relative;  clear:both;}
.scroll-bg{background-attachment:scroll !important;}
.testimonial-container:before{content:''; position:absolute; left:0; top:0; width:100%; height:100%; float:left; background:rgba(0,0,0,0.7);}
.testimonial-box{padding:40px 15%;}
.testimonial-box p{font-size:16px; line-height:28px;}
.testimonial-container .slick-prev:before, .testimonial-container .slick-next:before, .testimonial-container .slick-dots li span:before, .banner-container .slick-prev:before, .banner-container .slick-next:before, .banner-container .slick-dots li span:before  {color:#fff;}
footer{background-color:rgba(25,37,91,1); color:white; font-size:13px; line-height:21px;}
footer h5{color:#f6f6f6; font-weight:300;}
footer h5 i{vertical-align:inherit;}
footer h5.small{margin-bottom:5px;}
.footer-logo{width:80px;}
footer .open{padding-left:27px;}
footer a{color:#f0f0f0;}
footer a:hover{color:#999;}
.footer-upper{padding:70px 0 30px;}
.footer-lower{padding:25px 0; background:rgba(255,255,255,0.02);}
address {margin-bottom:25px;}
address  p{line-height:24px;}
ul.footer-post-list li{margin-bottom:15px;}
ul.footer-post-list li a{color:#999; display:inline-block;}
ul.footer-post-list li  img{width:70px; float:right; margin:5px 0px 5px 15px; padding:2px; border:solid 1px #999;}
ul.footer-post-list li a:hover img{opacity:0.85;}
ul.footer-post-list li a:hover{color:#f6f6f6;}
ul.footer-tweet-list li{margin-bottom:15px;}
.footer-upper i{margin-right:6px; color:#fff; font-size:17px; vertical-align:middle;}
ul.social-links{float:right;}
ul.social-links li{float:left; margin:0 8px;}
ul.social-links li a{float:left; line-height:26px; font-size:20px; color:#fff;}
ul.social-links li a:hover{color:#999; }


/* ============ABOUT PAGE START================= */
.inner-container{padding:100px 0; transition: height 0.3s ease-in; -moz-transition: height 0.3s ease-in;-o-transition: height 0.3s ease-in;-webkit-transition: height 0.3s ease-in;-ms-transition: height 0.3s ease-in;}
.director-message-container{padding:60px 0 0; background:#f6f6f6;}
.director-message-container img{width:100%; max-width:170px;}
.director-message-container h3{margin-bottom:0;}
.stat-container{ box-shadow:0 1px 6px rgba(0,0,0,0.1); position:relative; z-index:9;  width:100%; display: -webkit-flex; display: -ms-flexbox; display: flex;  -webkit-flex-wrap: wrap; -ms-flex-wrap: wrap; flex-wrap: wrap;}
.stat-box{background:#fff; text-align:center; padding:40px; position:relative; transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in; }
.stat-box > div{width:100%;}
.stat-box i{font-size:50px; margin-bottom:15px; cursor:pointer;}
.stat-box:hover{background:#222 !important; color:#f6f6f6;}
.stat-box:nth-child(2n+2){background:#f6f6f6;}
.about-member-img{width:120px; margin:0 30px 30px 0; float:left; outline: 1px solid #222; outline-offset: 3px;}
.img-thumbnail{border-radius:0; border-color:#222; padding:3px;}
.history-container{width:100%; position:relative;}
.ss-container { width: 100%; position: relative; text-align: left; overflow: hidden;}
.ss-row { width: 100%; clear: both; float: left; position: relative; padding: 30px 0; }
.ss-left, .ss-right { float: left; width: 50%; position: relative; }
.ss-right{}
.ss-left{text-align: right; float: left; }
.ss-content-box{width:100%; max-width:450px; padding:15px; display:inline-block;}
.ss-media-box{ outline: 1px solid #222; outline-offset: 3px; line-height:0;}
/* ============ABOUT PAGE END================= */
/* ============SERVICE PAGE START================= */
.service-box{margin-bottom:40px; position:relative; min-height:130px;}
.service-box > i{font-size:50px; margin-bottom:10px;}
.service-layout .service-box{padding-left:150px;}

/* ============ABOUT PAGE END================= */
/* ============TEAM PAGE START================= */
.team-box{width:100%; position:relative; transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in; outline: 1px solid #222; outline-offset: 3px; margin-bottom:50px; position:relative; overflow:hidden;}
.team-box img{width:100%;  }
.team-box:hover img {}
.team-box-detail{position:absolute; left:0; top:0; width:100%; height:100%; background:rgba(255,255,255,0.9); text-align:center;  opacity:0;   transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in;}
.team-box-detail .ion{padding:10px; font-size:20px;}
.team-box-detail p a:hover i{color:#666;}
.team-box:hover .team-box-detail{opacity:1;}
.member-details {-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); top: 50%; position:absolute; width:100%; padding:30px; margin-top: -25px; transition: all 0.35s ease-out; -moz-transition: all 0.35s ease-out;-o-transition: all 0.35s ease-out;-webkit-transition: all 0.35s ease-out;-ms-transition: all 0.35s ease-out;}
.member-details p a{border:0 !important;}
.team-box:hover .member-details {margin-top: 0px;}
.bottom-container{padding:70px 0; text-align:center; background:url(include/images/bottom-bg.jpg) no-repeat center center; background-size:cover; background-attachment:fixed; position:relative; }
.bottom-container:before{content:''; position:absolute; left:0; top:0; width:100%; height:100%; float:left; background:rgba(0,0,0,0.6);}
.bottom-content {position: relative; display:inline-block; background: rgba(255,255,255,0.9); padding: 50px; text-align: center; outline: 1px solid #fff; outline-offset: 8px; text-transform:uppercase; width:94%; max-width:600px;}
.bottom-content h2{margin-bottom:30px;}
.team-box figcaption{position:absolute; left:0; bottom:0; width:100%; padding:15px 15px 0px; background: rgba(255,255,255,0.9); }
.team-box h3{margin-bottom:5px;}

/* ============TEAM PAGE END================= */
/* ============FAQs PAGE START================= */

.faq-container{margin-bottom:50px; padding-left:150px; position:relative;}
.faq-container h5{margin-bottom:5px;}
.faq-container h5:before{content:"\f375"; font-family: "Ionicons"; margin-right:10px;}
.icon-box{position:absolute; left:0px; top:0; width:110px; text-align:center; font-size:50px; line-height:110px; height:110px;  outline:solid 1px #222; outline-offset:3px; background:#222; color:#fff; margin-top:10px;}
.panel-body p b{text-transform:uppercase; padding-right:10px;  }
/* ============FAQs PAGE START================= */


/* ============CONTACT PAGE START================= */
.form-group{margin-bottom:25px;}
label{font-weight:300; display:block; text-transform:uppercase; letter-spacing:3px;}
.form-control{border-radius:0; height:44px; border-color:#999; color:#222; box-shadow:none; -webkit-apperance:none;}
.form-control:focus{border-color:#222;}
textarea.form-control{height:120px; resize:none;}
.contact-details{text-align:center;}
.map-container{height:400px; position:relative; margin:0; padding:0; }
#map-canvas{height:100%;}
/* ============CONTACT PAGE END================= */

/* ============PORTFOLIO PAGE START================= */
ul.project-category{text-align:center; margin-bottom:40px;}
ul.project-category li{display:inline-block; padding:2px 5px;}
ul.project-category li a{float:left; padding:5px 20px; border:solid 1px #222; color:#222; text-transform:uppercase;  transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in;}
ul.project-category li a:hover, ul.project-category li a.active{background:#9F0508; color:#fff;}
.grid-item {margin-bottom:30px;}
.grid-item img{width:100%;}
.portfolio-hover{position:absolute; left:0; top:0; width:100%; height:100%; background:rgba(255,255,255,0.9); text-align:center;  opacity:0;   transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in;}
.grid-item:hover .portfolio-hover{opacity:1;}
.portfolio-hover-content {-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); top: 50%; position:absolute; width:100%; padding:15px; margin-top: -25px; transition: all 0.35s ease-out; -moz-transition: all 0.35s ease-out;-o-transition: all 0.35s ease-out;-webkit-transition: all 0.35s ease-out;-ms-transition: all 0.35s ease-out;}
.grid-item:hover .portfolio-hover-content {margin-top: 0px;}
.project-sidebar-widget{margin-bottom:40px;}
.project-sidebar-widget h3, .project-sidebar-widget h4{margin-bottom:5px;}
.project-screens{margin-bottom:40px;}
.project-screens img{width:100%;}
.project-nav{margin-bottom:40px; padding:10px 0;}
.project-nav .prev-project{float:left;}
.project-nav .next-project{float:right;}
.screen-slider .slick-dots{bottom:20px;}

/* ============PORTFOLIO PAGE END================= */

/* ============BLOG PAGE START================= */
.blog-item{background:#f6f6f6;}
.entry-media{line-height:0;}
.blog-item:hover .entry-media{opacity:0.9;}
.entry-content{padding:70px 20px 20px; position:relative;}
.entry-date{position:absolute; left:0; top:0; padding:10px; background:#222; color:#fff; width:100%; text-align:center;}
.entry-date:hover a{color:#fff;}
.entry-meta{margin-bottom:15px;}
.entry-meta span{display:inline-block; margin-right:20px;}
.entry-author:before{content:"\f47e"; font-family: "Ionicons"; margin-right:10px; font-size:20px; position:relative; top:2px; }
.entry-comment:before{content:"\f3fc"; font-family: "Ionicons"; margin-right:10px; font-size:20px; position:relative; top:2px; }
.entry-media .slick-dots{bottom:10px;}
blockquote{border:solid 5px #fff; outline:solid 1px #222; background:#222; color:#fff; font-size:20px; line-height:30px; padding:30px; font-style:italic; margin:20px 0 40px; clear:both; display:inline-block; width:100%;}
.single-post{margin-bottom:40px;}
.single-post .entry-content{padding-left:0; padding-right:0;}
.widget-box{width:100%; display:inline-block; margin:0 0 40px 0;}
.search-container{width:100%; position:relative; padding-left:10px; padding-right:50px; border:solid 1px #222;}
.search-container:before{content:"\f4a4"; font-family: "Ionicons"; font-size:20px; position:absolute; top:0px; right:0; width:45px; text-align:center; line-height:40px; }
.search-input{width:100%; height:40px; background:transparent; border:0; box-shadow:none;}
.search-submit{position:absolute; top:0; right:0; width:45px; height:100%; background:transparent; border:0; cursor:pointer;}
ul.list li{margin-bottom:10px; padding:2px; border:solid 1px #222; }
ul.list li a{color:#222; display:inline-block; width:100%; background:#fff; padding:10px;}
ul.list li  img{width:70px; float:left; margin:0 15px 0 0; padding:2px; border:solid 1px #222;}
ul.list li a:hover img{border-color:#fff;}
ul.list li a:hover{background:#222; color:#fff;}
.tag-box a {position: relative; float: left; padding: 8px 12px; color: #222; border:solid 1px #222; margin: 0px 10px 15px 0px;}
.tag-box a:hover {background: #222; color: #fff;}
.post-nav{margin-bottom:20px; padding:10px 0; width:100%; display:inline-block;}
.post-nav h4{width:50%;}
.post-nav .prev-post{float:left;}
.post-nav .next-post{float:right; text-align:right;}
.blog-author {position: relative; margin-bottom: 40px; padding: 10px 15px;  padding-left: 100px; background:#f6f6f6; }
.blog-author img {width: 70px; height: 70px; left: 10px; top: 10px; z-index: 1; position: absolute; padding:3px; border:solid 1px #222; overflow:hidden;}
.blog-author .desc{position: relative;}
.blog-author .desc h5{margin-bottom:5px;}
.blog-author .desc p{margin-bottom:15px;}
.blog-author .desc .author-socials a{margin-right: 15px; border:0;}
.comments { margin: 0; padding: 0; margin-bottom: 30px; padding:20px 0; }
.comments ul { margin-left: 90px;}
.comments ul li{padding:15px;  background:#f6f6f6;  margin-bottom:5px;}
.comments ul li .post-comment{margin:0;}
.post-comment { min-height: 80px; position: relative; padding-left: 90px; margin-bottom:20px; }
.post-comment .img-profile { width: 70px; height: 70px; left: 0; top: 0; z-index: 1; position: absolute; padding:3px; border:solid 1px #222;}
.post-comment .desc { position: relative; }
.post-comment .desc h5 { margin-bottom: 5px; }
.post-comment .desc .date { margin-bottom: 10px; }
.left .entry-meta span{margin-right:0; margin-left:15px;}
.pagination {border-radius: 0; margin:30px 0;}
.pagination > li {padding:0px; display:inline-block; float:left;}
.pagination > li > a, .pagination > li > span { position: relative; float: left; padding: 10px 18px; margin-left: -1px;   background-color: #fff; border: solid 1px #222; color:#222;}
.pagination > li:first-child > a, .pagination > li:first-child > span { border-radius:0;}
.pagination > li:last-child > a, .pagination > li:last-child > span { border-radius:0;}
.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
  background-color:#222; color:#fff; border:solid 1px #222;}
.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {z-index: 2; color: #fff; cursor: default; background-color: #9F0508; border-color: #222;}
/* ============BLOG PAGE END================= */

/* ============PRODUCT PAGE START================= */
.product-item{position:relative; }
.product-hover{position:absolute; left:0; top:0; width:100%; height:100%; background:rgba(255,255,255,0.8); text-align:center;  opacity:0;   transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in;-o-transition: all 0.3s ease-in;-webkit-transition: all 0.3s ease-in;-ms-transition: all 0.3s ease-in;}
.grid-item:hover .product-hover{opacity:1;}
.product-hover-content {-webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); -ms-transform: translateY(-50%); transform: translateY(-50%); top: 50%; position:absolute; width:100%; padding:15px; margin-top: -25px; transition: all 0.35s ease-out; -moz-transition: all 0.35s ease-out;-o-transition: all 0.35s ease-out;-webkit-transition: all 0.35s ease-out;-ms-transition: all 0.35s ease-out; text-align:center;}
.grid-item:hover .product-hover-content {margin-top: 0px;}
.product-image{position:relative;}
.product-detail{padding:15px;}
.product-detail h4{margin-bottom:5px;}
.product-detail del{color:#999; margin-right:20px;}
.form-control.orderby{display:inline-block; width:200px;}
.quantity{clear:both; margin:30px 0; padding:20px 0; }
.quantity .form-control{width:70px; display:inline-block; float:left; margin-right:15px;}
.product-meta span{margin:0 10px 0 0; display:inline-block; }
.product-meta a{text-transform:none;}
ul.review-list { margin: 0; padding:20px 0; }
ul.review-list li{padding:0; margin-bottom:35px;}
ul.review-list li .post-comment{margin:0; min-height: 80px; position: relative; padding-left: 90px; margin-bottom:20px; }
ul.review-list li .img-profile { width: 70px; height: 70px; left: 0; top: 0; z-index: 1; position: absolute; padding:3px; border:solid 1px #222;}
ul.review-list li .desc { position: relative; }
ul.review-list li .desc h5 { margin-bottom: 5px; }
ul.review-list li .desc .date { margin-bottom: 10px; }
.stars a{margin-right:5px; font-size:20px; border:0 !important;}
.cart-table{vertical-align:top;}
.qty-input{width:80px;}
.table.cart-table > thead > tr > th, .table.cart-total-table > thead > tr > th{border:solid 1px #fff;}
.table.cart-table > tbody > tr > td, .table.cart-total-table > tbody > tr > td{border:solid 1px #ccc;}
.table.cart-total-table > tbody > tr > td:first-child{text-transform:uppercase;}
.table.cart-total-table > tbody > tr > td:last-child{text-align:right;}
.product-thumbnail img{width:100%; max-width:60px;}
.table.cart-table > tbody > tr:hover > td{background:#f9f9f9;}
.coupon{position:relative; padding-right:200px;}
.coupon .btn{position:absolute; right:0; top:0; width:195px; margin:0;}
.cart-actions .btn{margin:0; }
.product-remove{text-align:center;}
.remove-item, .remove-item:hover, .remove-item:focus{display:inline-block; width:30px; height:30px; color:#fff; background:#222; line-height:30px;}

/* ============PRODUCT PAGE END================= */


/* ============SHORTCODE PAGE START================= */
.shortcode-container{padding:0 0 70px 0;}
.heading{border-bottom:solid 1px #222; margin-bottom:40px;}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small{font-weight:300; color:#666;}
/*Buttons*/
.btn{border-radius:0; padding:11px 20px; margin:2px 0; font-weight:300 !important; text-transform:uppercase; letter-spacing:3px; text-decoration:none !important; border-style:solid !important;}
.btn.btn-xs{padding:7px 15px;}
.btn.btn-lg{padding:15px 25px;}
.btn-default { color: #222;  background-color: transparent; border-color: #222;}
.btn-default:hover, .btn-default:focus,.btn-default:active{color: #fff; background-color: #9F0508; border-color: #222 !important;}
.btn-primary { color: #f6f6f6;  background-color:rgba(25,37,91,1); border-color: #222;}
.btn-primary:hover, .btn-primary:focus,.btn-primary:active{color: black; background-color:#F0D85D; border-color: #222;}
.btn + .btn{margin-left:12px;}
/*ACCORDION*/
.panel{box-shadow:none; border:0; border-radius:0; margin-bottom:40px; }
.panel-heading{padding:0 0 5px 0;}
.panel-body{padding:0;}
.panel-title{font-size:14px;}
.accordion-panel{margin-bottom:5px;}
.accordion-panel .panel-body{display:none;}
.accordion-panel .panel-body.open{display:block;}
.accordion-panel{position:relative; background:#f6f6f6; }
.accordion-panel .panel-title{position:relative; padding:20px 20px 20px 50px;}
.accordion-panel .panel-body{padding:0 25px 25px 50px;}
.accordion-panel .panel-heading{padding:0; cursor:pointer;}
.accordion-panel .panel-title:before{content:"\f48a"; font-family: "Ionicons"; font-size:30px; padding:20px 15px; position:absolute; left:0px; top:0; transition: all 0.2s ease-out; -moz-transition: all 0.2s ease-out;-o-transition: all 0.2s ease-out;-webkit-transition: all 0.2s ease-out;-ms-transition: all 0.2s ease-out;}
.accordion-panel.open .panel-title:before{content:"\f463";}
/*TABS*/
.tab-content > .tab-pane{padding:30px 20px;}
.nav-tabs{border-color:#222;}
.nav-tabs > li{margin-bottom:0; margin:0 5px 0 0; border:solid 1px #222; border-bottom:0; padding:2px 2px 0 2px;}
.nav-tabs > li > a{border-radius:0; text-transform:uppercase; letter-spacing:3px; font-size:16px; margin:0; }
.nav-tabs > li > a:hover {border-color: #222; background:#222; color:#fff;}
.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {color: #fff; cursor: default; background-color: #9F0508; border: 1px solid #222; border-bottom-color: transparent;}
/*TOOLTIP*/
.tooltip{background:#f6f6f6;}
.tooltip-inner {background-color: #222; border-radius: 0; font-family: 'Lato';  font-weight:300; outline:solid 1px #222; outline-offset:1px; position:relative;}
.tooltip-arrow{border-top-color:#222; display:none;}
.tooltip.top .tooltip-inner:before{content:''; border-top: solid 5px #222; border-right: solid 5px transparent; border-left: solid 5px transparent; position:absolute; left:50%; top:100%;margin-top: 2px; margin-left: -5px;}
.tooltip.top .tooltip-inner:after{content:''; border-top: solid 5px #fff; border-right: solid 5px transparent; border-left: solid 5px transparent; position:absolute; left:50%; top:100%;margin-top: 1px;margin-left: -5px;}
.tooltip.bottom .tooltip-inner:before{content:''; border-bottom: solid 5px #222; border-right: solid 5px transparent; border-left: solid 5px transparent; position:absolute; left:50%; bottom:100%;margin-bottom: 2px; margin-left: -5px;}
.tooltip.bottom .tooltip-inner:after{content:''; border-bottom: solid 5px #fff; border-right: solid 5px transparent; border-left: solid 5px transparent; position:absolute; left:50%; bottom:100%;margin-bottom: 1px;margin-left: -5px;}
.tooltip.left .tooltip-inner:before{content:''; border-left: solid 5px #222; border-top: solid 5px transparent; border-bottom: solid 5px transparent; position:absolute; left: 100%; top: 50%;margin-top: -5px; margin-left: 2px;}
.tooltip.left .tooltip-inner:after{content:''; border-left: solid 5px #fff; border-top: solid 5px transparent; border-bottom: solid 5px transparent; position:absolute; left:100%; top:50%;margin-top: -5px;margin-left: 1px;}
.tooltip.right .tooltip-inner:before{content:''; border-right: solid 5px #222; border-top: solid 5px transparent; border-bottom: solid 5px transparent; position:absolute; right: 100%; top: 50%;margin-top: -5px; margin-right: 2px;}
.tooltip.right .tooltip-inner:after{content:''; border-right: solid 5px #fff; border-top: solid 5px transparent; border-bottom: solid 5px transparent; position:absolute; right:100%; top:50%;margin-top: -5px;margin-right: 1px;}
/*TABLE*/
.table {border-color: #f6f6f6; text-align: left; border:0;}
.table > thead > tr > th {background: #222; color: #fff;border-bottom: 0;text-transform: uppercase;  border-color: #fff; letter-spacing:3px;  font-weight:300; font-size:15px;}
.table > thead > tr > th, .table > tbody > tr > td{padding: 15px 20px; border:0;}
.table-striped > tbody > tr:nth-child(odd) > td, .table-striped > tbody > tr:nth-child(odd) > th {background: #fff;}
.table-striped > tbody > tr:nth-child(even) > td, .table-striped > tbody > tr:nth-child(even) > th {background: #f6f6f6;}
/*Alerts*/
.alert{border-radius:0; outline-offset:2px; outline:solid 1px #222;}
.alert-success{outline-color:#d6e9c6;}
.alert-info{outline-color:#bce8f1;}
.alert-warning{outline-color:#faebcc;}
.alert-danger{outline-color:#ebccd1;}
.alert-default {color: #fff; background-color: #222; border-color: #222;}
.alert-default hr {border-top-color: #222;}
.alert-default .alert-link {color: #fff;}
.alert-default.alert-dismissable .close, .alert-default.alert-dismissible .close:hover {color: #fff;}
.alert .alert-link{font-weight:400;}
/*LIST ITEM*/	
ol{padding-left:15px;}
.list-group-item{list-style-position:inside; padding:0; padding-left:15px; border:0; list-style:disc;margin-bottom:25px;}
/* ============SHORTCODE PAGE END================= */
/* ============================= */
/* ! Layout for ipad lanscape */
/* ============================= */
@media only screen and (max-width: 1050px) {
.nav-menu-icon {display: block; float: none;  margin: 0 auto;}
nav {position: fixed; width: 100%; height: 100%; padding-top: 60px; background: #fff; background:rgba(25,37,91,0.9); left: 0px; top: 0px; z-index: 500; text-align: left; overflow-y: auto; transform: translateY(-100%);-webkit-transform: translateY(-100%);-moz-transform: translateY(-100%);-ms-transform: translateY(-100%);}
nav.slide-menu {transform: translateY(0%);-webkit-transform: translateY(0%);-moz-transform: translateY(0%);-ms-transform: translateY(0%);text-align: center;}
nav > ul > li{margin:0; width:100%; border-bottom:solid 1px #f6f6f6; text-align:center;}
nav ul li a{display:block; padding:10px 0; font-size:20px; line-height:30px;}
nav ul > li ul{visibility:visible; opacity:1; left:auto; top:auto; position:relative; box-shadow:none;  background:#f6f6f6; }
nav ul > li > ul > li > ul{position:relative;left: auto;top: auto;opacity: 1;visibility: visible;max-width: 100%; background:#f6f6f6; }
nav ul > li > ul > li span {position: relative; right: auto; transform: rotate(0deg);-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg); padding-left:10px;}
nav ul li > ul > li > a{font-size:14px;}
nav ul li > ul > li > ul > li > a{font-size:12px;}
nav ul > li > ul > li > a:hover {background: transparent; color: #222;}
nav ul > li ul{display:none;}
nav ul li a.active span{ transform: rotate(180deg);-webkit-transform: rotate(180deg);-moz-transform: rotate(180deg);-ms-transform: rotate(180deg); padding-right:10px; padding-left:0;}
.banner-image, .testimonial-container, .text-rotator, .inner-banner-container, .bottom-container{ background-attachment:scroll;}
.team-box-detail, .product-hover{opacity:1; display:none;}
.team-box:hover .team-box-detail, .grid-item:hover .product-hover{opacity:1; display:block;}
}


/*============================= 
! Layout for ipad portrait  
============================= */
@media only screen and (max-width: 1004px) {

.footer-upper .text-right{text-align:left;}
ul.footer-post-list li img{float:left; margin:0 15px 5px 0;}
.footer-lower{text-align:center;}
ul.social-links{float:none; display:inline-block; margin-bottom:10px;}
.project-img-box{max-width:400px; margin-bottom:20px;}
.inner-container{padding:60px 0;}
.form-group{margin-bottom:15px;}
.map-container{height:300px;}
.stat-box:nth-child(2n+2){background:#fff ;}
.stat-box:nth-child(3n+1){background:#f6f6f6;}
.ion-lg{font-size:80px;}

}
/* ============================= */
/* ! Layout for mobile(lanscape) version   */
/* ============================= */
@media handheld, only screen and (max-width: 767px) {
h1{font-size:36px;}
h2{font-size:28px;}
h3{font-size:22px;}
h4{font-size:17px;}
h5{font-size:15px;}
h6{font-size:14px;}
.banner-title{padding:50px 25px;}
.inner-banner-container{height:410px;}
.banner-title h1{font-size:25px;}
.banner-title h2{font-size:18px; margin-top:5px;}
.project-box{padding:0;}
.project-box h4 small{display:block; margin-top:5px;}
.testimonial-box{padding:35px 0;}
.banner-container .slick-prev, .banner-container .slick-next,.recent-project-container .slick-prev, .recent-project-container .slick-next, .testimonial-container .slick-prev, .testimonial-container .slick-next{display:none !important;}
.welcome-container, .recent-project-container, .testimonial-container{padding:60px 0;}
.footer-upper{padding:50px 0 20px;}
.contact-details{text-align:left; margin-top:40px;}
.map-container{height:220px;}
.stat-container, .stat-box{display:block;}
.stat-box:nth-child(2n+2){background:#fff ;}
.stat-box:nth-child(2n+1){background:#f6f6f6;}
.director-message-container{text-align:center;}
.ss-left, .ss-right{width:100%;}
.ss-content-box{max-width:100%; text-align:center;}
.ss-media-box{width:100%; max-width:400px; display:inline-block; position:relative;}
.right .ss-media-box:before{content:''; border-bottom: solid 15px #222; border-right: solid 15px transparent; border-left: solid 15px transparent; position:absolute; left:50%; bottom:100%;margin-bottom: 4px; margin-left:-15px;}
.right .ss-media-box:after{content:''; border-bottom: solid 15px #fff; border-right: solid 15px transparent; border-left: solid 15px transparent; position:absolute; left:50%; bottom:100%;margin-bottom: 3px;margin-left: -15px;}
.left .ss-media-box:before{content:''; border-top: solid 15px #222; border-right: solid 15px transparent; border-left: solid 15px transparent; position:absolute; left:50%; top:100%;margin-top: 4px; margin-left:-15px;}
.left .ss-media-box:after{content:''; border-top: solid 15px #fff; border-right: solid 15px transparent; border-left: solid 15px transparent; position:absolute; left:50%; top:100%;margin-top: 3px;margin-left: -15px;}
.faq-container, .service-layout .service-box{padding-left:0px;}
.icon-box{position:relative; font-size:40px; margin-bottom:20px; width:90px; height:90px; line-height:90px;}
.large-text{font-size:15px;}
.ion-lg{font-size:60px;}
.grid-item {width:100%; margin-bottom:20px;}
.comments ul{margin-left:30px;}
.form-control.orderby{float:left;}
.nav-tabs > li > a{font-size:13px; letter-spacing:1px; padding:8px 12px;}
.tab-content > .tab-pane, .product-detail{padding:20px 0;}
.bottom-content{padding:30px;}
.bottom-content h2{margin-bottom:15px; font-size:22px;}
}
/* ============================= */
/* ! Layout for mobile(portrait) version   */
/* ============================= */
@media only screen and (max-width: 479px) {
.project-nav .prev-project, .project-nav .next-project{width:100%; margin:10px 0;}
.post-nav .prev-post, .post-nav .next-post{width:100%; margin:10px 0;}

}

a:focus{
	color:#CCB200;
}