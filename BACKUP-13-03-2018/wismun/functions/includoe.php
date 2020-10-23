<?php 

	
		function get_modules($conn,$pg_config,$web_config){
		
			$sql = "SELECT * FROM `web_module` wm 
left join links_o_pages lo on lo.lo_page_name = wm.module_short_name
where wm.status = 1 and lo.lo_valid =1
 order by `module_pos` ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  if( basename($_SERVER['PHP_SELF']) == basename($row['lo_page_url']) ){
		echo '
		<li><a href="#"><i class="'.$row['module_icon'].'"></i>   '.$row['module_long_name'].'
               
		
		';
			
		}else{
		echo '
		<li> <a href="'.$row['lo_page_url'].'"><i class="'.$row['module_icon'].'"></i>  '.$row['module_long_name'].'
		
		';
			
		}
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












		}
?>


<?php

		function get_title_link($conn,$pg_config,$web_config){
			echo '<title>'. $web_config['web_event_name'].'  '.strtoupper($pg_config['lo_page_display_name']).'</title>
<link href="include/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900" rel="stylesheet" type="text/css">
<link href="include/css/ionicons.min.css" rel="stylesheet" type="text/css">
<link href="include/css/animsition.min.css" rel="stylesheet" type="text/css">
<link href="include/css/slick.css" rel="stylesheet" type="text/css">
<link href="include/css/slick-theme.css" rel="stylesheet" type="text/css">
<link href="include/fa/css/font-awesome.css" rel="stylesheet" type="text/css">

<link href="'.$web_config['web_style_css_href'].'" rel="stylesheet" type="text/css">
<link rel="icon" href="'.$web_config['web_icon_href'].'" type="image/x-icon" />
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> ';
}

function get_end_script($conn,$pg_config,$web_config){

echo '
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

';
}function get_end_script_for_reg($conn,$pg_config,$web_config){

echo '
    <script type="text/javascript" src="include/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="include/js/animsition.min.js"></script>
    <script type="text/javascript" src="include/js/slick.js"></script>  
    <script type="text/javascript" src="include/js/jquery.countTo.js"></script>  
    <script type="text/javascript" src="include/js/scroll.js"></script> 
    <script type="text/javascript" src="include/js/imagesloaded.js"></script>
    <script type="text/javascript" src="include/js/masonry-3.1.4.js"></script>
    <script type="text/javascript" src="include/js/masonry.filter.js"></script> 
    <script type="text/javascript" src="include/js/jquery.vide.js"></script>
    <script type="text/javascript" src="include/js/custom.js"></script> 

';
}




function is_an_address($string){
	
	#address
$address = $string;
$address = str_replace(' ','',$address);
$address = str_replace('-','',$address);
$address = str_replace('/','',$address);
$address = str_replace("'",'\'',$address);
$address = str_replace('>','',$address);
$address = str_replace('<','',$address);

if(ctype_alnum($address) == true){
	return true;
}else{
	return false ;
}

	
	
}


function is_a_name($string,$int){
	# int 1 = remove blank 
	#int 0 = keep blank
 /*
	if($int==1){
		$myVar = str_replace(' ','',$string);

				if(ctype_alpha($myVar)){
					return true;
				}else{
					return false;
				}
	}
	
	else if($int == 0){
		
		
		$myVar = $string;

				if(ctype_alpha($myVar)){
					return true;
				}else{
					return false;
				}
	}
	
 */ 
	return true;
}


function is_a_contact_no($string){

	$mobNo = trim($string);
if(is_numeric($mobNo)){
	if(strlen($mobNo) == 10){
		return true;
	}else{
		return false;
		}
}else{
	return false;
}



}

function validate_email($email) {
				return (preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;
			}
			

function is_an_email($string){
	
				$email = $string;
				
				if(validate_email($email) == true){
					return true;
				}else{
						return false ;
				}
			
		
	
}


function is_date($dy,$mt,$yr){
	
		
				
				if(checkdate($mt,$dy,$yr) == true){
					return true;
				}else{
						return false ;
				}
			
		
	
}



function is_a_pincode($string){

$pincode = $string;
if(is_numeric($pincode)){
	if(strlen($pincode) == 6 and ($pincode > 100000 )){
		return true;
	}else{
		return false;
	}
}else{
	return false;
}



}

function is_a_delegate_str($string){
	
	$delno = $string;

if(is_numeric($delno) && ($delno < 22)){
		return true;
}else{
		return false;
}


}




function is_writeup($string){
	

					return true;
}



?>


