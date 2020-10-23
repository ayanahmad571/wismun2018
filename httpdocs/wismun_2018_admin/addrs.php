<?php 
include('db_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
 <meta charset="utf-8" />
       <?php 
	   get_head();
	   ?>
       
               <link href="assets/summernote/summernote.css" rel="stylesheet" />
                        <!--Plugin Css-->
        <link rel="stylesheet" href="assets/codemirror/codemirror.css" />
        <link rel="stylesheet" href="assets/codemirror/ambiance.css">


        
    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

           <?php 
		   give_brand();
		   ?> 
        
            <?php 
			get_modules($conn);
			?>
                
        </aside>
        <!-- Aside Ends-->
        <?php
		
$optionsql = "SELECT lo_page_name,lo_page_display_name  FROM `links_o_pages` where lo_valid =1 ";
$optres = $conn->query($optionsql);

if ($optres->num_rows > 0) {
    // output data of each row
	$cc =1;
    $optrw= array();
	while($options = $optres->fetch_assoc()){
		$optrw[] = $options;
	}
	
	
} else {
   $optrw = 'Add Pages to link';
}
 ?>

        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
           
                <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">
                   
                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">  
                       
                        
                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img src="<?php get_stu_pics($_SESSION['ADM_ADM_NO'],'8'); ?>" alt=""  class="img-circle profile-img thumb-sm">
                                <span class="username"><?php echo ucwords($_SESSION['ADM_U_F_NAME']) ?> </span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                               
                                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->       
                    </ul>
                    <!-- End right navbar -->
                </nav>
                
            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Welcome <?php echo ucwords($_SESSION['ADM_U_F_NAME']).' '.ucwords($_SESSION['ADM_U_L_NAME']) ?> !</h3> 
                </div>



                 <!-- end row -->

                <div class="row">
                    

                    <div class="col-lg-12	">

                        <div class="panel panel-default"><!-- /primary heading -->
                            <div class="portlet-heading">
      
                            <div class="panel-heading">
                                <h3 class="panel-title">Addressal(s)</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <!-- -->
                                         <?php

$boxsql = "SELECT * FROM `mun_addrsls`";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
<div class="col-md-6">
	<div ';
			if($boxrw['ads_valid']==1){
				echo '
style="border:5px solid green" ';
			}else{
				echo'
style="border:4px solid red" ';
			}
			echo' class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title">'.$boxrw['ads_author'].'<span style="float:right">
			<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['ads_id']))).'" style="color:white;" class="ion-edit"></a></span></h3> 
		</div> 
		<div class="panel-body"> 
					<p>Linked to:'.$boxrw['ads_page_for'].'</p> 
					<p>Col type:'.$boxrw['ads_col_type'].'</p> 

<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<img style="width:100%" src="../sbsmun/'.$boxrw['ads_img_src'].'" alt="'.$boxrw['ads_author'].'" />
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
</div>
<br>

		
			<p>'.$boxrw['ads_author'].'</p> 
			<p>'.$boxrw['ads_desc'].'</p> 
		
			<p>
			';
			if($boxrw['ads_valid']==1){
				echo '
<hr style="border-bottom:6px solid green;border-radius:5px">';
			}else{
				echo'
<hr style="border-bottom:6px solid red;border-radius:5px">';
			}
			echo'
			</p>
			<p>
			';
			if($boxrw['ads_valid']==1){
				echo '
		<form action="master_action.php" method="post">
		<input name="__ha_d" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['ads_id'])))))).'" />
			<input type="submit" class="btn btn-danger" name="addrs_inact" value="Make InActive" />
		</form>
';
			}else{
				echo'
		<form action="master_action.php" method="post">
		<input name="__ha" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['ads_id'])))))).'" />
		<input type="submit" class="btn btn-success" name="addrs_act" value="Make Active" />
		</form>';
			}
			echo'
			</p>
		</div> 
	</div>
</div>
                                        
	';
	if(($cc % 2) == 0){
		echo '</div><div class="row">';
	}
	$cc++;
	#first loop ends
    }
} else {
    echo "0 results";
}
 ?> 

 
                                        
                                 
                                        <!-- -->
                                    </div> 
                                    
                                    
                                    
                                    
                                    
                                    
                                     <form enctype="multipart/form-data" action="master_action.php" method="post" enctype="multipart/form-data">
 <div class="col-xs-12">
	<div class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title"><input class="form-control"  name="addrs_long_name" type="text" placeholder="Authors Full Name" /></h3> 
		</div> 
		<div class="panel-body"> 
        <p>Image: <input class="form-control" class="form-control"  name="addrs_img_aut" type="file" /></p>
			<p>Linked to: <select class="form-control" name="adrs_linkedto" type="text" placeholder="ion-plus" >
            <?php 
			
			if(is_string($optrw)){
				echo '<option value="">'.$optrw.'</option>';
			}else{
			foreach($optrw as $op){
				
				echo '<option value="'.$op['lo_page_name'].'">'.$op['lo_page_name'].', '.$op['lo_page_display_name'].'</option>';
			}
			}
			?>
            
            </select></p> 
            
            <br>
Text:
                                <textarea name="adrs_desc" class="summernote_add">Hello Summernote</textarea>
                    
			 
			<p><input class="btn btn-success " name="adrs_add" type="submit" value="Add Addressal"/></p> 
		</div> 
	</div>
</div>
 </form>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    
                </div> <!-- End row -->


            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            
 <?php

$msql = "SELECT * FROM `mun_addrsls` ";
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.md5(md5(sha1($mrw['ads_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['ads_author'].'</h4>
      </div>
      <div class="modal-body">
        <form action="master_action.php" method="post">

<div class="form-group">
	<label>Author: </label>
	<input type="text" name="ads_edit_author" class="form-control" value="'.$mrw['ads_author'].'">
</div> 

		
<div class="form-group">
	<label>Linked to: </label>
	<input type="text" name="ads_edit_linkedto" class="form-control" value="'.$mrw['ads_page_for'].'">
</div> 
<div class="form-group">
	<label>Img src: </label>
	<input type="text" name="ads_edit_img" class="form-control" value="'.$mrw['ads_img_src'].'">
</div> 




<div class="form-group">
	<label>Code:</label>
	 <textarea class="form-control" id="code2" name="ads_edit_code">'.$mrw['ads_desc'].'</textarea>    
</div>



<div class="row">
	<div class="col-xs-6">
		<input name="ads_hash" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($mrw['ads_id'])))))).'" />
		<input name="ads_edit" style="float:right" type="submit" class="btn btn-success" value="Save" />
	</div>
	<div class="col-xs-6">
		<button type="reset" class="btn btn-danger">Reset</button>
	</div>
</div>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>


  </div>
</div>
		
	';
	
	#first loop ends
    }
} else {
    echo "0 results";
}
 ?> 
            
            <footer class="footer">
                Admin SBSMUN
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        

<?php 
get_end_script();
?>
         
            <script src="assets/summernote/summernote.min.js"></script>
    <script src="assets/codemirror/custom.codemirror.js"></script>
    <!--codemirror-->
      <script src="assets/codemirror/codemirror.js"></script>
    <script src="assets/codemirror/formatting.js"></script>
    <script src="assets/codemirror/xml.js"></script>
    <script src="assets/codemirror/javascript.js"></script>
    <script src="assets/codemirror/custom.codemirror.js"></script>


        <script>

            jQuery(document).ready(function(){

                $('.summernote_add').summernote({
                    height: 200,                 // set editor height

                    minHeight: null,             // set minimum height of editor
                    maxHeight: null             // set maximum height of editor
                });

            });
        </script>


    </body>

</html>
