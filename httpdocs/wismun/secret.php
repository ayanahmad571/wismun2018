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

if(include('functions/include.php')){
	
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
        	<div class="row" >
            <div id="masonry" class="row">
            <!-- strt -->
            <?php
$secsql = "SELECT * FROM `sec_members` sm left join sec_master sa on sa.sec_id = sm.smem_sec_rel_id
where sm.smem_valid = 1 and sa.sec_valid =1";
$secres= $conn->query($secsql);

if ($secres->num_rows > 0) {
    // output data of each row
    while($secrw = $secres->fetch_assoc()) {
			echo '
			  <!-- blog item start -->
			        	<div class="col-md-4 col-sm-6 grid-item">
                         <div class="blog-item">
						  <div class="entry-media"><img src="'.$secrw['smem_img_src'].'" alt="" /></div>
                            <div class="row">
							<div class="entry-content">
                                <div class="entry-meta">
                                    ';
									$pieces = explode(';{[]};',$secrw['smem_name']);
									$cont = 0;
									if(count($pieces) >1){
									foreach($pieces as $piece){
										$cont ++;
										
										echo '<span class="entry-author">'.$piece.'</span>';
										
									}

									}else{
									echo '<span class="entry-author">'.ucwords($secrw['smem_name']).'</span>';
									}
									empty($pieces);
									
									echo'
                                </div>
                                <h5>'.$secrw['sec_display_name'].'</h5>
                                <p>'.$secrw['sec_desc'].'</p>
                            </div>
                         </div>
                       </div>
					   </div>
                       <!-- blog item end -->
					   
					   
			
';    }
} else {
    echo "0 results";
}

 ?> 
            	
                
               
               
               <!-- end -->
                
            </div>
        </div>
        </div>
  </div>
  
  
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