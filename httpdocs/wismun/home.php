<?php
if(include('db_auth.php')){
	
}else{
	die('Please Reload');
}

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
 
<?php 

if(include('functions\include.php')){
	
}else{
	die('Please Reload');
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<?php 

get_title_link($conn,$pg_config,$web_config);
?>
<style>


.intro-scroll-down .mouse {position: relative;display: block;
width: 30px;
height: 45px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 2px solid rgba(239,230,16,1.00);
border-radius: 23px;
-moz-border-radius: 23px;
-webkit-border-radius: 23px;
z-index: 50; opacity:0.9;}

.intro-scroll-down .mouse .mouse-dot {
    background: rgba(232,205,63,1.00) none repeat scroll 0 0;
    border-radius: 50%;
    display: block;
    height: 6px;
    left: 50%;
    margin: -3px 0 0 -3px;
    position: absolute;
    top: 29%;
    transition: all 0.2s ease-out 0s;
    width: 6px;
}

</style>

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
          <div class="logo"><a href="#" class="animsition-link"><img src="<?php echo $web_config['web_mun_txt_logo_src'] ?>" alt="<?php echo $web_config['web_event_name'] ?>" /></a></div>
         
          <div style="color:white" class="nav-menu-icon"><a href="#"><i></i></a></div>
          <nav>
            <ul class="menu">
            
				
			<?php 
		
		
		get_modules($conn,$pg_config,$web_config);
			?>
      
            </ul>
            
            
            
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!--header end-->  

  <!--banner-container start-->
  <div class="banner-container" style=' <?php echo $pg_config['lo_page_bg_img']; ?>'>
  
  
   
    <?php 
		echo $pg_config['pg_box_txt'];
		?>
    
  </div>
  <!--banner-container end--> 
  
  <!-- main container start -->
  <div class="main-container" > 
    
    
    <!-- welcome container start -->
    <div class="welcome-container">
      <div class="container">

        <div class="row">
        
        <div class="row">
        <h1>"The opening ceremony and registration scheduled for Thursday, 26th April have been cancelled due to unforeseen circumstances. Registration will start on Friday, 27th April as per schedule. We sincerely apologise for this inconvenience."</h1>
        </div>
        
        <br>
        <div class="row">
        	<h4>Delegate Guide</h4>
        </div>
        
        <div class="row">
        	<a href="include/wismun_delegate_guide.pdf" target="new"><button class="btn btn-xl btn-primary">Delegate Guide</button></a>
        </div>
        
        <hr><br>
        
          <div class="row">
            <h4>Conference Schedule</h4>
            </div>
            
          
          <div style="border-right: solid black 1px;" class="col-md-6">
            <p><strong>Day 2 : Friday, 27<sup>th</sup> April, 2018</strong></p>
            
        
            <div class="row">
            	<div class="col-xs-3">8:15 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">8:45 a.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Registration at <u>Front Foyer</u></b></div>
                
            </div>
             <div class="row">
            	<div class="col-xs-3">9:00 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">10:00 a.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">All delegates meet <u> Princess Haya Theatre (PHT)</u></b></div>
                
            </div>
             <div class="row">
            	<div class="col-xs-3">10:15 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">12:30 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Session 1 in <u>Respective Rooms</u></b></div>
                
            </div>

             
             <div class="row">
            	<div class="col-xs-3">12:30 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">1:30 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Lunch at <u>Ruby Frog Cafe</u></b></div>
                
            </div>
          
             <div class="row">
            	<div class="col-xs-3">1:35 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">3:00 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Session 2 in <u>Respective Rooms</u></b></div>
                
            </div>
             <div class="row">
            	<div class="col-xs-3">3:00 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">3:10 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Break</b></div>
                
            </div>
             <div class="row">
            	<div class="col-xs-3">3:10 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">4:30 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Session 2 Continued</b></div>
                
            </div>          
          </div>
          
          
          <div class="col-md-6" >
            <p><strong>Day 3 : Saturday, 28<sup>th</sup> April, 2018</strong></p>
            
            
            <div class="row">
            	<div class="col-xs-3">9:00 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">11:00 a.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Session 1 in <u>Respective Rooms</u></b></div>
            </div>

            <div class="row">
            	<div class="col-xs-3">11:00 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">11:10 a.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Break</b></div>
            </div>

            <div class="row">
            	<div class="col-xs-3">11:10 a.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">12:30 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Session 1 Continued</b></div>
            </div>


            <div class="row">
            	<div class="col-xs-3">12:30 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">2:00 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Lunch</b></div>
                
            </div>
             <div class="row">
            	<div class="col-xs-3">2:00 p.m.</div>
            	<div class="col-xs-1">-</div>
            	<div class="col-xs-3">3:30 p.m.</div>
            	<div class="col-xs-1"></div>
            	<div class="col-xs-3"><b style="font-weight:bold">Plenary Session (General Assembly) in Princess Haya Theatre (PHT)</b></div>
                
            </div>
     
          
          </div>
        </div>
        <br>
<br>

        
      </div>
    </div>
    <!-- welcome container end --> 
    
    
    <!-- testimonial container start -->
    <div class="testimonial-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="testimonial-list ">
              <li>
                <div class="testimonial-box">
                <style>
@font-face {
    font-family:"digital 7";
    src: url("include/fonts/digital-7.ttf")/* EOT file for IE */
}

.kuwgfjk {
    font-family:'digital 7';
		
    font-size: 8em;
}

@media screen and (max-width: 580px) {
   .kuwgfjk {
    font-size: 3em;
}

}




</style>  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- testimonial container end --> 
    
  </div>
  <!-- main container end --> 
  
  <!--footer start-->
  <?php 
  echo $web_config['web_footer_html'];
  ?>
  <!--footer end--> 
</div>
 
    <?php 

get_end_script($conn,$pg_config,$web_config);
?>
	
  </body>

</html>