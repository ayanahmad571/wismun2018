<?php
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
<?php
$pg_config =array();

$page_mastersql = "SELECT * FROM links_o_pages where lo_page_url = '".basename($_SERVER['PHP_SELF'])."' and lo_valid= 1 limit 1  ";

/*echo '<script>alert("'.$page_mastersql.'");</script>';
*/
$pgrs = $conn->query($page_mastersql);

if ($pgrs->num_rows == 1) {
    // output data of each row
   $pgrw = $pgrs->fetch_assoc();
   
   $pg_config = $pgrw;
} else {
    echo "0 results";
}


?> 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $web_config['web_event_name'].' @'.$pg_config['lo_page_display_name']; ?></title>
<link href="include/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link href="include/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="include/css/animsition.min.css" rel="stylesheet" type="text/css">
<link href="include/css/slick.css" rel="stylesheet" type="text/css">
<link href="include/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="<?php echo $web_config['web_style_css_href']; ?>" rel="stylesheet" type="text/css">
<link rel="icon" href="<?php echo $web_config['web_icon_href'] ?>" type="image/x-icon" />
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="home">
<!-- LOADER  -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div>
<div class="animsition">
<!--header start-->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="logo"><a href="index-2.html" class="animsition-link"><img src="include/images/logo.png" alt="PEELAA" /></a></div>
         
          <div class="nav-menu-icon"><a href="#"><i></i></a></div>
          <nav>
            <ul class="menu">
            
			
			<?php 
			
			
			$sql = "SELECT * FROM `web_module` wm 
left join links_o_pages lo on lo.lo_page_name = wm.module_short_name
where wm.status = 1 and lo.lo_valid =1
 order by `module_pos` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
		<li><a href="'.$row['lo_page_url'].'">'.$row['module_long_name'].'
               
		
		';
		if($row['module_sub_mod_exsits'] == 1){
			
			
			echo '<span class="ion ion-ios-arrow-down"></span></a>
			 <ul class="dropmenu">
			';
			
			
			$submod = "SELECT * FROM `sub_web_modules` where status = 1 and sub_rel_mod_id ='".$row['mod_id']."'";
$subres = $conn->query($submod);

if ($subres->num_rows > 0) {
    // output data of each row
    while($subrow = $subres->fetch_assoc()) { 
	
	echo '
	<li><a href="">'.$subrow['sub_mod_long_name'].'</a></li>
	';
	}
}else{
	echo '
                  <li><a href="index-2.html">Home Image</a></li>
                  <li><a href="home-text-rotator.html">Home Text Rotator</a></li>
                  <li><a href="home-slider.html">Home Slider</a></li>
                  <li><a href="home-video-bg.html">Home Video BG</a></li>
             ';
}
			
		
			 
			 
			 
			 
			 
			 echo '</ul>';






	}else{
		
		echo '</a>';
	}
	
	
			  echo '</li>';
    }
} else {
    echo "0 results";
}
			?>
      
            </ul>
            
            
            
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--header end-->
 
  
  <!-- inner container start -->
  
   <?php
   
  echo basename($_SERVER['PHP_SELF']).' Yet to be edited';   ?>
  <!-- map container end --> 
<?php 
echo $web_config['web_footer_html'];
?>
	</div>
	<script type="text/javascript" src="include/js/jquery.min.js"></script>
    <script type="text/javascript" src="include/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="include/js/animsition.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="include/js/slick.js"></script>  
    <script type="text/javascript" src="include/js/jquery.countTo.js"></script>  
    <script type="text/javascript" src="include/js/scroll.js"></script> 
    <script type="text/javascript" src="include/js/imagesloaded.js"></script>
    <script type="text/javascript" src="include/js/masonry-3.1.4.js"></script>
    <script type="text/javascript" src="include/js/masonry.filter.js"></script> 
    <script type="text/javascript" src="include/js/jquery.vide.js"></script>
    <script type="text/javascript" src="include/js/custom.js"></script> 

  </body>

<!-- Mirrored from html.slicemytheme.com/peelaa/contact-us-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 May 2016 04:34:05 GMT -->
</html>
 