<?php 
include('db_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
       <?php 
	   get_head();
	   ?>
        <style>
		textarea { resize:vertical; }
		</style>
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
                                <h3 class="panel-title">Pages</h3>
                                <h5>Only valid if corresponding relation between 'tabs' is established</h5>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <!-- -->

  <?php

$boxxsql = "select 
(SELECT count(*) FROM `web_module` wm  left join links_o_pages lo 
on lo.lo_page_name = wm.module_short_name
where wm.status = 1 and lo.lo_valid =1) as linked, 
 
( SELECT count(*) FROM `links_o_pages` where lo_valid=1) as active_pag,
( SELECT count(*) FROM `links_o_pages` where lo_valid=0) as inactive_pag,

(select count(*) from `web_module` where status =1 ) as active_mod,
(select count(*) from `web_module` where status =0 ) as inactive_mod,

(SELECT count(*) FROM `links_o_pages` where lo_id not in 
(SELECT lo_id FROM `web_module` wm left join links_o_pages lo on 
lo.lo_page_name = wm.module_short_name where wm.status = 1 and lo.lo_valid =1) ) as obsel_page 
from dual  ";
$boxxres = $conn->query($boxxsql);

if ($boxxres->num_rows > 0) {
    // output data of each row
	$boxrww = $boxxres->fetch_assoc();
    foreach($boxrww as $box=>$valbox) {
		
		#firts loop begins
		echo '
        <div class="col-lg-4">
                        <div class="panel panel-color panel-inverse">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">'; 
								if($box == 'linked'){
									echo 'Linked Modules and Pages';
								}else if($box == 'active_pag'){
									echo 'Active Pages';
								}else if($box == 'inactive_pag'){
									echo 'Inactive Pages';
								}else if($box == 'active_mod'){
									echo 'Active Modules';
								}else if($box == 'inactive_mod'){
									echo 'Inactive Modules';
								}else if($box == 'obsel_page'){
									echo 'Unused Pages';
								}
								echo'</h3> 
                            </div> 
                            <div class="panel-body"> 
                                <p>'.$valbox.'</p> 
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
                                         <?php

$boxsql = "SELECT * FROM `links_o_pages` ";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
<div class="col-xs-4">
	<div ';
			if($boxrw['lo_valid']==1){
				echo '
style="border:5px solid green" ';
			}else{
				echo'
style="border:4px solid red" ';
			}
			echo' class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title">'.$boxrw['lo_page_url'].'<span style="float:right">
			<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['lo_id']))).'" style="color:white;" class="ion-edit"></a></span></h3> 
		</div> 
		<div class="panel-body"> 
			<p>Display Name: <em>'.$boxrw['lo_page_display_name'].'</em></p> 
			<p>Linking Name: <em>'.$boxrw['lo_page_name'].'</em></p> 
			<p>Banner Text: <textarea disabled class="form-control">'.$boxrw['pg_box_txt'].'</textarea></p> 
			<p>Banner Image: <textarea disabled class="form-control">'.$boxrw['lo_page_bg_img'].'</textarea></p> 
			<p>
			';
			if($boxrw['lo_valid']==1){
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
			if($boxrw['lo_valid']==1){
				echo '
		<form action="master_action.php" method="post">
		<input name="___hop" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['lo_id'])))))).'" />
			<input type="submit" class="btn btn-danger" name="page_inact" value="Make InActive" />
		</form>
';
			}else{
				echo'
		<form action="master_action.php" method="post">
		<input name="___hop"  type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['lo_id'])))))).'" />
		<input type="submit" class="btn btn-success" name="page_act" value="Make Active" />
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
 <div class="col-xs-4">
	<div class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title"><input class="form-control"  name="pg_url_name" type="text" placeholder="Page Name" /></h3> 
		</div> 
		<div class="panel-body"> 
			<p>Display Name: <input class="form-control" name="pg_disp_name" type="text" /></p> 
			<p>Linking Name: <input class="form-control" name="pg_link_name" type="text" /></p> 
			<p>Banner Text: <textarea class="form-control" name="pg_banner" type="text" >
            </textarea></p> 
			
            <p>Banner Image: <textarea class="form-control" name="pg_img_src" type="text">
            </textarea></p> 
			<p><input class="btn btn-success " name="pg_add" type="submit" value="Add Tab"/></p> 
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

$msql = "SELECT * FROM `links_o_pages` ";
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.md5(md5(sha1($mrw['lo_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['lo_page_url'].'</h4>
      </div>
      <div class="modal-body">
        <form action="master_action.php" method="post">
		
<div class="form-group">
	<label>Display Name : </label>
	<input type="text" name="edit_pg_dname" class="form-control" value="'.$mrw['lo_page_display_name'].'">
</div>

<div class="form-group">
	<label>Banner Text : </label>
	<textarea name="edit_pg_btxt" class="form-control" >'.$mrw['pg_box_txt'].'
	</textarea>
</div>

<div class="form-group">
	<label>Banner Image : </label>
	<textarea name="edit_pg_img" class="form-control"> '.$mrw['lo_page_bg_img'].'
	</textarea>
</div>

<input type="hidden"  name="_hash" value="'.md5(md5(sha1(sha1(md5($mrw['lo_id']))))).'"/>


<div class="row">
	<div class="col-xs-6">
		<input style="float:right" type="submit" class="btn btn-success" name="edit_page" value="Save">
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
