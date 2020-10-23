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
                                <h3 class="panel-title">News Letters(s)</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                    <form style="padding-bottom:10px" action="master_action.php" method="post">
                                    <input type="submit" name="make_all_news_active" class="btn btn-info" value="Make all Newsletters Active" />
                                    </form>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                    
                                    <form style="float:right; " action="master_action.php" method="post">
                                    <input type="submit" name="make_all_news_inactive" class="btn btn-danger" value="Make all Newsletters InActive" />
                                    </form>
                                    </div>
                                    </div>
                                    <br>


                                    
                                    <div class="row">
                                        <!-- -->
                                         <?php

$boxsql = "SELECT * FROM `mun_newsletters`";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
	$cc =1;
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
<div class="col-md-4">
	<div ';
			if($boxrw['nl_valid']==1){
				echo '
style="border:5px solid green" ';
			}else{
				echo'
style="border:4px solid red" ';
			}
			echo' class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title">'.$boxrw['nl_short_name'].'<span style="float:right">
			<a data-toggle="modal" data-target="#'.md5(md5(sha1($boxrw['nl_id']))).'" style="color:white;" class="ion-edit"></a></span></h3> 
		</div> 
		<div class="panel-body"> 
					
<p>
'.$boxrw['nl_desc'].'
</p>				<br>
<hr>	
					<p>Possesses the active link Class: ';
					
					if($boxrw['nl_ul_active'] == 0){
						echo '<em style="color:red">No</em>';
					}else if($boxrw['nl_ul_active'] == 1){
						echo '<em style="color:green">Yes</em>';
					}
					
					
					echo '</p> 
					<p>ID (FOR CALLING):<br>
						<i style="color:blue">'.$boxrw['nl_give_id'].'</i></p>
						
						
						<br>
 
 <br>



		
			<p>
			';
			if($boxrw['nl_valid']==1){
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
			if($boxrw['nl_valid']==1){
				echo '
		<form action="master_action.php" method="post">
		<input name="hash_news" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['nl_id'])))))).'" />
			<input type="submit" class="btn btn-danger" name="news_make_inac" value="Make InActive" />
		</form>
';
			}else{
				echo'
		<form action="master_action.php" method="post">
		<input name="hash_news" type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($boxrw['nl_id'])))))).'" />
		<input type="submit" class="btn btn-success" name="news_make_ac" value="Make Active" />
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
                                    
                                    
                                    
                                    
                                    
                                    
                                     <form action="master_action.php" method="post">
 <div class="col-xs-12">
	<div class="panel panel-color panel-inverse">
		<div class="panel-heading"> 
			<h3 class="panel-title"><input class="form-control"  name="nl_tab_name" type="text" placeholder="Tab Name" /></h3> 
		</div> 
		<div class="panel-body"> 
			
           
          
Description:
                                <textarea name="nl_desc" class="form-control">-</textarea>
                    
			 <br>

             <div class="row">
  <p class="col-xs-6">Has active link: <input class="form-control"  name="nl_activelink" type="number" min="0" max="1" placeholder="0 or 1" /></p>
            <p class="col-xs-6">Is Valid: <input class="form-control"  name="nl_valid" type="number" min="0" max="1" placeholder="0 or 1" /></p>
            </div>
            
			<p><input class="btn btn-success " name="nl_add" type="submit" value="Add Newsletter"/></p> 
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

$msql = "SELECT * FROM `mun_newsletters` ";
$mres = $conn->query($msql );

if ($mres->num_rows > 0) {
    // output data of each row

    while($mrw = $mres->fetch_assoc()) {
		#firts loop begins
		
		echo '
<div id="'.md5(md5(sha1($mrw['nl_id']))).'" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editing '.$mrw['nl_short_name'].'</h4>
      </div>
      <div class="modal-body">
	 
        <form action="master_action.php" method="post">

<div class="form-group">
	<label>Short Name: </label>
	<input type="text" name="nl_edit_name" class="form-control" value="'.$mrw['nl_short_name'].'">
</div> 
 
<div class="form-group">
	<label>Description:</label>
	 <textarea class="form-control"  name="nl_edit_desc">'.$mrw['nl_desc'].'</textarea>    
</div>
 

<div class="form-group">
	<label>Has active Class on Load: </label>
	<input type="number" name="nl_edit_active" class="form-control" min="0" max="1" value="'.$mrw['nl_ul_active'].'">
</div>






<div class="row">
	<div class="col-xs-6">
		<input name="__hn"  type="hidden" value="'.md5(md5(sha1(sha1(md5(md5($mrw['nl_id'])))))).'" />
		<input name="edit_news" style="float:right" type="submit" class="btn btn-success" value="Save" />
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
