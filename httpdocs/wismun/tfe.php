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
  
  <!-- inner container start -->
  <div class="inner-container" >
  <div class="container">
<?php
$nl_sqll = "SELECT * FROM `mun_newsletters` WHERE nl_valid = 1";
$nl_sqllrs = $conn->query($nl_sqll);

if ($nl_sqllrs->num_rows > 0) {
  
  echo '
  
  
<style>
.bottom-container{
	background: url("include/images/fourthestate.png") no-repeat fixed center center / cover ;
    padding: 70px 0;
    position: relative;
    text-align: center;
}
</style>
<!-- row start-->
      <div class="row ">
        <div class="col-sm-12">
          <h2 class="heading">Newsletters</h2>
        </div>
        <div class="col-sm-12">
          <div class="tabs-container"> 
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
';			
			

    // output data of each row
    while($nl_sqllrw = $nl_sqllrs->fetch_assoc()) {
		if($nl_sqllrw['nl_ul_active']== 1){
			echo '

              <li role="presentation" class="active"><a href="#'.$nl_sqllrw['nl_give_id'].'" aria-controls="tab" role="tab" data-toggle="tab">'.$nl_sqllrw['nl_short_name'].'</a></li>	
	';
		}else{
	echo '
	 <li role="presentation"><a href="#'.$nl_sqllrw['nl_give_id'].'" aria-controls="tab" role="tab" data-toggle="tab">'.$nl_sqllrw['nl_short_name'].'</a></li>
	
	';}

    }

    echo '    
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
			
			';

$nlsql = "SELECT * FROM `mun_newsletters` WHERE nl_valid = 1";
$nlsqlrs = $conn->query($nlsql);

if ($nlsqlrs->num_rows > 0) {
    // output data of each row
    while($nlsqlrw = $nlsqlrs->fetch_assoc()) {
	if($nlsqlrw['nl_ul_active']== 1){
	
	echo '
	  <div role="tabpanel" class="tab-pane fade active in" id="'.$nlsqlrw['nl_give_id'].'">
                <p>'.$nlsqlrw['nl_desc'].'</p>
              </div>
	';	
	}else{
		echo '
	  <div role="tabpanel" class="tab-pane fade " id="'.$nlsqlrw['nl_give_id'].'">
                <p>'.$nlsqlrw['nl_desc'].'</p>
              </div>
	';	
	}
	
	
    }
} else {
    echo "0 results";
}
       
             
              
              
             
echo ' 
              
            </div>
          </div>
        </div>
      </div>
      <!-- row end--> 

';
 
};
 
?>

<!-- blog item start -->
<div class="row">
    	<div class="col-sm-3">
            <div class="row">
            	<div class="col-sm-12"><img src="include/images/cartoons/_MG_2712.JPG" class="img-responsive" /></div>
            </div>
            <div class="row">
            	<div class="col-sm-12"><img src="include/images/cartoons/_MG_2715.JPG" class="img-responsive" /></div>
            </div>
            </div>
           
        <div class="col-sm-6 ">
        <div class="blog-item">
        <div class="entry-content">
        <p >At SBSMUN, the Fourth Estate is a varied amalgamation of journalists, cartoonists, and
        
        photographers.</p>
        <p> It has been an essential part of Step By Step’s MUN Conference since its
        
        inception. </p>
        <p>It is a platform that enriches the processes of debate and discussion through various
        
        forms of reportage, simplifying them for all to understand. The Fourth Estate is essentially a
        
        platform for young, aspiring journalists, cartoonists and photographers to showcase their talents,
        
        and step up to report and give their views on the proceedings of the various committees in
        
        session throughout the duration of the conference as observers. Be it the serious, witty, or just
        
        plain humourous moments of committee - the Fourth Estate puts all under its lens and seeks to
        
        uncover the hidden, and make plain the complex.</p>
        <p>
        
        We at SBSMUN2016 invite all aspiring journalists and cartoonists from participating schools to
        
        the Fourth Estate.</p>
        </div>
        </div>
        </div>	
 		<div class="col-sm-3">
            <div class="row">
            	<div class="col-sm-12"><img src="include/images/cartoons/_MG_2724.JPG" class="img-responsive" /></div>
            </div>
            <div class="row">
            	<div class="col-sm-12"><img src="include/images/cartoons/Rhea_Cartoon_Day1.JPG" class="img-responsive" /></div>
            </div>
        </div>    
    
    <!-- blog item end -->

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