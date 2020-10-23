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
                                    <div class="col-md-6 col-lg-6">
                                    <form style="padding-bottom:10px" action="master_action.php" method="post">
                                    <input type="submit" name="make_all_com_bg_active" class="btn btn-info" value="Make all Background Guides Active" />
                                    </form>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                    
                                    <form style="float:right; " action="master_action.php" method="post">
                                    <input type="submit" name="make_all_com_bg_inactive" class="btn btn-danger" value="Make all Background Guides InActive" />
                                    </form>
                                    </div>
                                    </div>
                                    <br>


                                    
                                    <div class="row">
                                        <!-- -->
                                         <?php

$boxsql = "SELECT * FROM `mun_committees`";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
<div class="col-md-4">
	<div ';
			if($boxrw['com_valid']==1){
				echo '
style="border:5px solid green" ';
			}else{
				echo'
style="border:4px solid red" ';
			}
			echo' class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title">'.$boxrw['com_long_name'].'<span style="float:right">
			<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['com_id']))).'" style="color:white;" class="ion-edit"></a></span></h3> 
		</div> 
		<div class="panel-body"> 
					
					<p>Visible on home: ';
					
					if($boxrw['com_is_on_home'] == 0){
						echo '<em style="color:red">No</em>';
					}else if($boxrw['com_is_on_home'] == 1){
						echo '<em style="color:green">Yes</em>';
					}
					
					
					echo '</p> 
					
					<p>Background Guide Active: ';
					
					if($boxrw['com_bg_vis'] == 0){
						echo '<em style="color:red">No</em>';
					}else if($boxrw['com_bg_vis'] == 1){
						echo '<em style="color:green">Yes</em>';
					}
					
					
					echo '</p> 
					<p>Background guide src:<br>
						<i style="color:blue">'.$boxrw['com_background_guide_src'].'</i></p><br>
						<hr>
						<p>'.$boxrw['com_long_name'].'</p> 
					<p>'.$boxrw['com_short_name'].'</p> <br>

 
 

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<img style="width:100%" src="../sbsmun/'.$boxrw['com_img_src'].'" alt="'.$boxrw['com_long_name'].'" />
</div>
</div>
<br>

		
			<p>'.$boxrw['com_desc'].'</p> 
		
			<p>
			';
			if($boxrw['com_valid']==1){
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
			if($boxrw['com_valid']==1){
				echo '
		<form action="master_action.php" method="post">
		<input name="ha_com" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['com_id'])))))).'" />
			<input type="submit" class="btn btn-danger" name="com_make_inac" value="Make InActive" />
		</form>
';
			}else{
				echo'
		<form action="master_action.php" method="post">
		<input name="ha_com" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['com_id'])))))).'" />
		<input type="submit" class="btn btn-success" name="com_make_ac" value="Make Active" />
		</form>';
			}
			echo'
			</p>
		</div> 
	</div>
</div>
                                        
	';
	if(($cc % 3) == 0){
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
			<h3 class="panel-title"><input class="form-control"  name="com_long_name" type="text" placeholder="Committee Name" /></h3> 
		</div> 
		<div class="panel-body"> 
			
            <p>Img Src: <input class="form-control"  name="com_img_src" type="file" placeholder="Img Src" /></p>
            <p>Background Guide Src: <input class="form-control"  name="com_bgg_src" type="text" placeholder="Background Guide Src" /></p>
          
            <br>
Description:
                                <textarea name="com_desc" class="form-control">-</textarea>
                    
			 <br>
             <div class="row">
  <p class="col-xs-4">Is on Home: <input class="form-control"  name="com_isonhome" type="number" min="0" max="1" placeholder="0 or 1" /></p>
            <p class="col-xs-4">Background Guide Visible: <input class="form-control"  name="com_bgg_vis" type="number" min="0" max="1" placeholder="0 or 1" /></p>
            <p class="col-xs-4">Is Valid: <input class="form-control"  name="com_is_valid" type="number" min="0" max="1" placeholder="0 or 1" /></p>
            </div>
			<p><input class="btn btn-success " name="com_add" type="submit" value="Add Committee"/></p> 
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

$msql = "SELECT * FROM `mun_committees` ";
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		
		echo '
<div id="'.md5(md5(sha1($mrw['com_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['com_long_name'].'</h4>
      </div>
      <div class="modal-body">
	 
        <form action="master_action.php" method="post">

<div class="form-group">
	<label>Committee Name: </label>
	<input type="text" name="com_edit_long_name" class="form-control" value="'.$mrw['com_long_name'].'">
</div> 
 
<div class="form-group">
	<label>Img src:</label>
	<input type="text" name="com_edit_img" class="form-control" value="'.$mrw['com_img_src'].'">
</div> 

<div class="form-group">
	<label>Background Guide src:</label>
	<input type="text" name="com_edit_bg_src" class="form-control" value="'.$mrw['com_background_guide_src'].'">
</div>

<div class="form-group">
	<label>Description:</label>
	 <textarea class="form-control"  name="com_edit_desc">'.trim($mrw['com_desc']).'</textarea>    
</div>
 


		
<div class="form-group">
	<label>Is on Home: </label>
	<input type="number" name="com_edit_is_home" class="form-control" min="0" max="1" value="'.$mrw['com_is_on_home'].'">
</div>
<div class="form-group">
	<label>Is Background Guide Valid: </label>
	<input type="number" name="com_edit_bg" class="form-control" min="0" max="1" value="'.$mrw['com_bg_vis'].'">
</div>

 





<div class="row">
	<div class="col-xs-6">
		<input name="h_com" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($mrw['com_id'])))))).'" />
		<input name="edit_com" style="float:right" type="submit" class="btn btn-success" value="Save" />
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
         
    </body>

</html>
