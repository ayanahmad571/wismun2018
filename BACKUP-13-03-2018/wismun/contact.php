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

if(include('functions\\include.php')){
	
}else{
	die('Please Reload');
}

?>

 <!DOCTYPE html>
<html lang="en">
<?php 

get_title_link($conn,$pg_config,$web_config);
?>

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
           <div class="logo"><a href="" class="animsition-link"><img src="<?php echo $web_config['web_mun_txt_logo_src'] ?>" alt="<?php echo $web_config['web_event_name'] ?>" /></a></div>
         
          <div class="nav-menu-icon"><a href="#"><i></i></a></div>
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
    <div class="inner-banner-container" <?php echo 'style="'.$pg_config['lo_page_bg_img'].'"';   ?>>
  		<?php 
		echo $pg_config['pg_box_txt'];
		?>
  </div>
  <!--banner-container end-->
  
  
  <!-- inner container start -->
  <div class="inner-container" >
 		<div class="container">
        
        	<div class="row">
            
            	<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
                	<div class="row">
                    	<div class="col-sm-8 col-sm-offset-2 text-center mar-20">
                        	<h3>Get in Touch</h3>
                       		 
                        </div>
                    </div>
                    
                    <div class="row">
                    	<div class="col-sm-4 mar-20">
                        	<h1 class="no-mar"><i class="ion ion-ios-location-outline"></i></h1>
                            <h5>ADDRESS</h5>
                            <?php
							echo $web_config['web_sch_addrss']; 
							?>
                        </div>
                        <div class="col-sm-4 mar-20">
                        	<h1 class="no-mar"><i class="ion ion-ios-email-outline"></i></h1>
                        	<h5>EMAIL</h5>
                            <?php
							echo $web_config['web_sch_email']; 
							?>
                        </div>
                        <div class="col-sm-4 mar-20">
                        	<h1 class="no-mar"><i class="ion ion-ios-telephone-outline"></i></h1>
                        	<h5>PHONE</h5>
                            <?php
							echo $web_config['web_sch_phone']; 
							?>
                            
                            
                        </div>
                    </div>
                        
                  </div>
                  
                  
                  
            	<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">
                	<div class="row">
                    	<div class="col-sm-8 col-sm-offset-2 text-center mar-50">
                        <h3>Send us a Message</h3>
                        <?php #<p></p>
						?>
                        </div>
                     </div>
                     
                     <div class="row">
                    	<div class="col-sm-12">
                        <form action="send_mail_action1.php" method="post">
                        <div class="row">
                        	<div class="col-sm-4">
                            	<div class="form-group">
                            	  <label>Name*</label>
                                  <input name="nme_frm" type="text" value="" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email*</label>
                                    <input name="eml_frm" type="email" value="" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Subject</label>
                                    <input name="sbj_frm" type="text" value="" class="form-control" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        	<div class="col-sm-12">
                            	<div class="form-group">
                                    <label>Message*</label>
                                    <textarea name="msg_frm" class="form-control" required ></textarea>
                                </div>
                            </div>
                            
                            <div class="col-sm-4 col-sm-offset-4">
                            	<div class="form-group">
                                <input type="hidden" name="m_lassh1_hsh" value="<?php echo md5(sha1(time().microtime().uniqid())) ?>" />
                                    <input name="subm_bt" type="submit" value="Send Message" class="btn btn-primary btn-block btn-lg" />
                                </div>
                            </div>
                            
                        </div>
                        
                        	
                      </form>
                    		</div>
                    </div>
                </div>
                
                  
                
            </div>
        </div>
  </div>
  <!-- inner container end -->
    
  <!-- map container start -->
 <!-- <div class="map-container">
  	<div id="map-canvas"></div>
  </div>-->
  <!-- map container end --> 
  
  
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