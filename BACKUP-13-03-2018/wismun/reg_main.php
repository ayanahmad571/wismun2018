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
<style>
em.has-error{
	margin:0;
	paddin:0;
	border:0;
	margin-bottom:10px;
	color:red;
	font-size:15px;
	}


em.has-success{
	margin:0;
	paddin:0;
	border:0;
	margin-bottom:10px;
	color:green;
	font-size:12px;
}
.form_cont_all{
	border:grey solid 1px;
}
</style>
<script type="text/javascript" src="include/js/jquery.min.js"></script>
<script src="include/forms/jquery.validate.js"></script>
<script src="include/forms/additional-methods.js"></script>

<script type="text/javascript"  src="include/forms/clone-form-td.js"></script>
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
<div id="f_form_anchor"></div>
<div class="inner-container" >
 		<div class="container">
        

        	<div class="row">
            
            	<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
                <div class="row">
                	<div class="col-sm-6 col-sm-offset-3">
                    	 <a style="font-size:12px; margin:0" href="include/docx/Country Matrix.pdf" role="button" class="btn btn-danger btn-block ">Country Matrix </a>
                    </div>
                </div><br>

                <hr />
                    <div class="row">
                    
                    <?php
$formsql = "select * from mun_forms mf left join links_o_pages lo on 
mf.form_page = lo.lo_page_name
where mf.form_valid_till > ".time()." 
and lo.lo_valid = 1 and mf.form_valid = 1 and
lo.lo_page_url = '".basename($_SERVER['PHP_SELF'])."'

order by form_id ASC
";
$formres = $conn->query($formsql);

if ($formres->num_rows > 0) {
    // output data of each row
    while($formrw = $formres->fetch_assoc()) {

echo '
<div class="col-lg-4 col-md-4 mar-20">
                        <h1 class="no-mar"><i class="'.$formrw['form_icon'].'"></i></h1>
                        	<h6 style="font-size:12px;"> '.$formrw['form_name'].' Registration </h6>
                             <button data-toggle="tooltip" data-placement="top" title="Scroll down for Form"  onClick="'.$formrw['form_onclick_function'].'" role="button" class="btn btn-primary btn-block" style="font-size:12px;">'.$formrw['form_submit_text'].'</button>
							 <a style="font-size:12px; margin:0" href="'.$formrw['form_reg_docx'].'" role="button" class="btn btn-primary btn-block visible-lg visible-md visible-sm">Download </a>
                        </div>
';



    }
} else {
    echo '<div class="col-lg-12 col-md-12 ">
                        <h1 class="no-mar">Thank you for Registering. Awaiting Resuts</h1>
                        </div>';
}
 ?> 	
                        
                        
                        
                        
                    </div>
                        
                  </div>
                  
                  
           
                  
                
            </div>
<?php /*
       	<div style="position:fixed; float:right; margin-top:20px" class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> The form has been loaded please scroll to view
</div>

 */      ?>   </div>
        
                 
     
 
<?php 
include('reg_form_journ.php');
?>


<?php 
include('reg_form_cartoon.php');
?>
                 
<?php 
include('reg_form_dele.php');
?>


    
</div><!--Inner Container -->
   <!--footer start-->
  <?php 
  echo $web_config['web_footer_html'];
  ?>
  <!--footer end--> 
</div>
 
    <script>
	    $('#form_container_dele').hide(12);
	$('#form_container_cartoon').hide(12);
	
	$('#form_container_journ').hide(12);
	function HideAll(){
	    $('#form_container_dele').hide(12);
	$('#form_container_cartoon').hide(12);
	
	$('#form_container_journ').hide(12);
		
	}
	
	</script>
    <?php 


get_end_script_for_reg($conn,$pg_config,$web_config);
?>
	<?php 
	if(isset($_GET['regs'])){
		echo '<script>
				window.alert("You have Registered Succesfully");		
				</script>';
	}
	?>
  </body>

</html>