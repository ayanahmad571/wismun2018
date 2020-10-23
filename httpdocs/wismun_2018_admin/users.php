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
                                <h3 class="panel-title">Users</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <!-- -->

                               <?php

$boxsql = "SELECT * FROM `adm_usrs_inf` ";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		if($boxrw['adm_valid'] == 1){
			$bg = 'info';
		}else{
			$bg = 'danger';
		}
		
		if($boxrw['adm_validtill'] == 0){
			$adm = 'Never';
		}else{
			$adm = date("D d M ,Y H:i:s",$boxrw['adm_validtill']);
		}
		
		if(($boxrw['adm_u_id'] == $_SESSION['ADM_U_ID']) and ($boxrw['adm_adm_no'] !== '741') ){
			$give= '<a  data-toggle="tooltip" data-placement="top" title="You are logged in with this account. Log out to make any changes " class="btn btn-sm btn-danger m-t-20 ion-edit"></a>';
		}else{
			$give= '<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['adm_u_id']))).'" class="btn btn-sm btn-warning m-t-20 ion-edit"></a>';
		}
		
		echo '
<div class="col-lg-6">
	<!-- Start Profile Widget -->
	<div style="border:1px grey solid" class="profile-widget text-center">
		<div class="bg-'.$bg.' bg-profile"></div>
		<img src="'; get_stu_pics($boxrw['adm_adm_no'],'9'); echo'" class="thumb-lg img-circle img-thumbnail" alt="img">
		<h3>'.$boxrw['adm_u_f_name'].' '.$boxrw['adm_u_l_name'].'</h3>
<a  data-toggle="tooltip" data-placement="top" title="'.$boxrw['adm_pass_words'].'" class="btn btn-sm btn-purple m-t-20">...</a>
'.$give.'
		<ul class="list-inline widget-list clearfix">
			<li class="col-md-4"><span>'.$boxrw['adm_username'].'</span>Username</li>
			<li class="col-md-4"><span>********</span>Password</li>
			<li class="col-md-4"><span>'.$boxrw['adm_u_access'].'</span>Access Level</li>
			<li class="col-md-12"><span>'.$boxrw['adm_email'].'</span>Email</li>
			<li class="col-md-6"><span>'.$boxrw['adm_contc_no'].'</span>Contact No</li>
			<li class="col-md-6"><span>'.$adm.'</span>Expires</li>
		</ul>
	</div>
	<!-- End Profile Widget -->
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
                                    <div class="row">
                                    <form action="master_action.php" method="post">
                                     <div class="col-md-6">
	<div class="panel panel-color panel-inverse">
            <div class="panel-heading"> 
                <h3 class="panel-title">Normal User</h3> 
        </div>

		<div class="panel-body"> 
<p>Name:<input class="form-control col-xs-6 col-lg-6"  name="usr_f_name" type="text" placeholder="First Name" /></p>
<p><input class="form-control col-xs-6"  name="usr_l_name" type="text" placeholder="Last Name" /></p>
<p>Admission Number: <input class="form-control" name="usr_admno" type="number" /></p> 
<p>UserName (leave undisturbed for random hash):<input class="form-control"  name="usr_uss_name" type="text" placeholder="Login Name" value="-" /></p>
<p>Password (leave undisturbed for random hash): <input class="form-control" name="usr_pw" type="text" value="-"/></p> 
<p>Access Level: <input class="form-control" name="usr_acc" type="number" /></p> 
<p>Tabs: <input class="form-control" name="usr_tabs" type="text" value="1,2,3,4" /></p> 
<p>Contact No: <input class="form-control" name="usr_c_cno" type="number" value="1,2,3,4" /></p> 
<p>Email: <input class="form-control" name="usr_email" type="email" /></p> 
<p>Expires: <input class="form-control" name="usr_validtill" type="number" placeholder='Minutes from now' /></p> 

<p><input class="btn btn-success " name="add_user" type="submit" value="Add User"/></p> 
		</div> 
	</div>
</div>

</form>

<form action="master_action.php" method="post">
                                     <div class="col-md-6">
	<div class="panel panel-color panel-inverse">
        <div class="panel-heading"> 
                <h3 class="panel-title">System Generated User</h3> 
        </div>
		<div class="panel-body"> 
<p>Access Level: <input class="form-control" name="sys_usr_acc" type="number" /></p> 
<p>Tabs: <input class="form-control" name="sys_usr_tabs" type="text" value="1,2,3,4" /></p> 
<p>Expires: <input class="form-control" name="sys_usr_validtill" type="number" placeholder='Minutes from now' /></p> 

<p><input class="btn btn-success " name="add_sys_user" type="submit" value="Add System Generated User"/></p> 
		</div> 
	</div>
    <div class="panel panel-color panel-inverse">
        <div class="panel-heading"> 
                <h3 class="panel-title">Module List</h3> 
        </div>
		<div class="panel-body"> 
<?php
$sql = "SELECT * from adm_modules where mo_valid =1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
		'<p><em style="color:red">'.$row['mo_id'].'</em> -> '.$row['mo_name'].'</p>';
    }
} else {
    echo "0 results";
}
 ?>         


		</div> 
	</div>
    
</div>

</form>
                                    </div>
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
 if($_SESSION['ADM_ADM_NO']==741 or $_SESSION['ADM_ADM_NO']=='741'){
	$msql = "SELECT * FROM `adm_usrs_inf` where adm_u_id";
 
 }else{
$msql = "SELECT * FROM `adm_usrs_inf` where adm_u_id <> ".$_SESSION['ADM_U_ID'];
 }
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		
		echo '
<div id="'.md5(md5(sha1($mrw['adm_u_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['adm_u_f_name'].'</h4>
      </div>
      <div class="modal-body">
        <form action="master_action.php" method="post">
		
<div class="form-group">
	<label>Password : </label>
	<input name="edit_us_pw" type="text" class="form-control" value="'.$mrw['adm_pass_words'].'"/>
</div>

<div class="form-group">
	<label>First Name : </label>
	<input name="edit_us_fname" type="text" class="form-control" value="'.$mrw['adm_u_f_name'].'"/>
</div>

<div class="form-group">
	<label>Last Name : </label>
	<input name="edit_us_lname" type="text" class="form-control" value="'.$mrw['adm_u_l_name'].'"/>
</div>

<div class="form-group">
	<label>Tab Access : </label>
	<input name="edit_us_tabs" type="text" class="form-control" value="'.$mrw['adm_u_tabs'].'"/>
</div>

<div class="form-group">
	<label>Mobile No : </label>
	<input name="edit_us_mobno" type="number" class="form-control" value="'.$mrw['adm_contc_no'].'"/>
</div>

<div class="form-group">
	<label>Email : </label>
	<input name="edit_us_email" type="email" class="form-control" value="'.$mrw['adm_email'].'"/>
</div>




<div class="row">
	<div class="col-xs-6">
	<input type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($mrw['adm_u_id'])))))).'" name="hash_chkr" />
		<input style="float:right" type="submit" class="btn btn-success" name="edit_user" value="Save">
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

            
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

    </body>

</html>
