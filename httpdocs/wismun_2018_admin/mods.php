<?php 
include('db_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
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
                                <h3 class="panel-title">Tabs / Modules</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <!-- -->
                                         <?php

$boxsql = "SELECT * FROM `web_module`";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
<div class="col-md-4">
	<div ';
			if($boxrw['status']==1){
				echo '
style="border:5px solid green" ';
			}else{
				echo'
style="border:4px solid red" ';
			}
			echo' class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title">'.$boxrw['module_long_name'].'<span style="float:right">
			<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['mod_id']))).'" style="color:white;" class="ion-edit"></a></span></h3> 
		</div> 
		<div class="panel-body"> 
			<p>Linked to: <em>'.$boxrw['module_short_name'].'</em></p> 
			<p>Icon: '.$boxrw['module_icon'].' -> <i class=" '.$boxrw['module_icon'].' "></i></p> 
			<p>Sub Menu: ' ; if($boxrw['module_sub_mod_exsits'] == 1){echo '<i style="font-size:15px;color:green">Yes</i>';}else{echo '<i style=" font-size:15px;color:red">No</i>';} echo '</p> 
			<p>Position: '.$boxrw['module_pos'].'</p> 
			<p>
			';
			if($boxrw['status']==1){
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
			if($boxrw['status']==1){
				echo '
		<form action="master_action.php" method="post">
		<input name="hash_inc" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['mod_id'])))))).'" />
			<input type="submit" class="btn btn-danger" name="tab_inact" value="Make InActive" />
		</form>
';
			}else{
				echo'
		<form action="master_action.php" method="post">
		<input name="hash_ac" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['mod_id'])))))).'" />
		<input type="submit" class="btn btn-success" name="tab_act" value="Make Active" />
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
 <form action="master_action.php" method="post" >
 <div class="col-md-4">
	<div class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title"><input class="form-control"  name="mod_long_name" type="text" placeholder="Name" /></h3> 
		</div> 
		<div class="panel-body"> 
			<p>Icon: <input class="form-control" name="mod_icon" type="text" placeholder="ion-plus" /></p> 
			<p>Linked to: <select class="form-control" name="mod_lnk_to" type="text" placeholder="ion-plus" >
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
			<p>Sub Menu: <input class="form-control"  name="mod_sub_menu" type="number" max="1" min="0" placeholder=" 1 or 0" /></p> 
			<p>Position: <input class="form-control"  name="mod_pos" type="number" placeholder="Position" /></p> 
			<p><input class="btn btn-success " name="mod_add" type="submit" value="Add Tab"/></p> 
		</div> 
	</div>
</div>
 </form>
 
                                        
                                 
                                        <!-- -->
                                    </div> </div>
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

$msql = "SELECT * FROM `web_module` ";
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.md5(md5(sha1($mrw['mod_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['module_long_name'].'</h4>
      </div>
      <div class="modal-body">
        <form action="master_action.php" method="post">
		
<div class="form-group">
	<label>Long Name : </label>
	<input type="text" name="edit_mod_lngnme" class="form-control" value="'.$mrw['module_long_name'].'">
</div>

<div class="form-group">
	<label>Identification Name/ Short Name (Linked to) : </label>
	<input type="text" name="edit_mod_shrtnme" class="form-control" value="'.$mrw['module_short_name'].'">
</div>

<div class="form-group">
	<label>Icon : </label>
	<input type="text" name="edit_mod_icon" class="form-control" value="'.$mrw['module_icon'].'">
</div>

<div class="form-group">
	<label>Position: </label>
	<input type="text" name="edit_mod_pos" class="form-control" value="'.$mrw['module_pos'].'">
</div>

<div class="form-group">
	<label>Sub Module: </label>
	<input type="text" name="edit_mod_sub" class="form-control" value="'.$mrw['module_sub_mod_exsits'].'">
</div>



<div class="row">
	<div class="col-xs-6">
	<input type="hidden" name="hash_ei" value="'.md5(md5(sha1(sha1(md5(md5($mrw['mod_id'])))))).'"></input>
		<input name="edit_mod" style="float:right" type="submit" class="btn btn-success" value="Save" />
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
  <script>
$(document).ready(function() {
	$(".editable").editable("master_action.php", { 
			id: 'edit_thing',
			name : 'value_edited',
			
		  tooltip   : "Doubleclick to edit...",
		  event     : "dblclick",
		  style  : "inherit"
	});
	
	
	
});
 

</script>
            
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    </body>

</html>
