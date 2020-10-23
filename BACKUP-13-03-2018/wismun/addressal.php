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
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php 

get_title_link($conn,$pg_config,$web_config);
?>

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
   <?php 
		echo $pg_config['pg_box_txt'];
		?>
        
        
        <!--banner-container end-->
  
  <!-- inner container start -->
  <div class="inner-container" >
  <div class="container">
             <div id="masonry"  class="row">
                    	
                       
                   <?php
$addrsl6sql = "SELECT * FROM mun_addrsls ma 
left join links_o_pages lo on 
ma.ads_page_for = lo.lo_page_name

where ma.ads_col_type =6 and ma.ads_valid = 1 and lo.lo_page_name = 'addrs'";
$addrsl6res = $conn->query($addrsl6sql);

if ($addrsl6res->num_rows > 0) {
    // output data of each row
    while($addrsl6rw = $addrsl6res->fetch_assoc()) {
		echo '<!-- blog item start -->
                    	<div class="col-md-6 grid-item">
                        <div class="blog-item">
                        	<div class="entry-media">
                            	<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
									<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<img src="'.$addrsl6rw['ads_img_src'].'" alt="'.$addrsl6rw['ads_author'].'" />
									</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
								</div>
                            </div>
                            <div class="entry-content">
                                
                                <h5>'.ucwords($addrsl6rw['ads_author']).'</h5>
                                <p>'.$addrsl6rw['ads_desc'].'</p>
                            </div>
                       </div>
                       </div>
                       <!-- blog item end -->';
		
    }
} else {
    echo "";
}
 ?> 
                      
                      
                       
                     
                       
                     
                       
               </div>
               
               
               
               
           </div>
 		<div class="container">
             <div id="masonry"  class="row">
                  <?php /*

$addrsl4sql = "SELECT * FROM mun_addrsls ma 
left join links_o_pages lo on 
ma.ads_page_for = lo.lo_page_name

where ma.ads_col_type =4 and ma.ads_valid = 1 and lo.lo_page_name = 'addrs'";
$addrsl4res = $conn->query($addrsl4sql);

if ($addrsl4res->num_rows > 0) {
    // output data of each row
    while($addrsl4rw = $addrsl4res->fetch_assoc()) {
		echo '<!-- blog item start -->
                    	<div class="col-md-4 col-sm-6 grid-item">
                        <div class="blog-item">
                        	<div class="entry-media">
                            	<div class="row">
								<div class=" col-md-1 col-lg-1"></div>
									<div class="col-md-10 col-lg-10">
									<img src="'.$addrsl6rw['ads_img_src'].'" alt="'.$addrsl6rw['ads_author'].'" />
									</div>
								<div class="col-md-1 col-lg-1"></div>
								</div>
                            </div>
                            <div class="entry-content">
                               
                                <h5>'.ucwords($addrsl4rw['ads_author']).'</h5>
                                <p>'.$addrsl4rw['ads_desc'].'</p>
                            </div>
                       </div>
                       </div>
                       <!-- blog item end -->';
		
    }
} else {
    echo "";
}
 */ 
 ?> 
              
             
             

               
               

           </div>
    </div>
    
    </div>
  <!-- inner container end -->
    

    
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