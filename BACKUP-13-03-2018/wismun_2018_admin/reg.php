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
                                <h3 class="panel-title">Submitted Applications</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <!-- -->
                                         <?php

$boxsql = "SELECT *,(SELECT COUNT(DISTINCT(j_pi_hash)) FROM `jounr_reg_master`) as journ_app,
(SELECT COUNT(DISTINCT(reg_sch_hash_rel)) FROM `reg_mun_school_info`) as del_app,
(SELECT COUNT(DISTINCT(hash_rel)) FROM `cart_master`) as cart_app
FROM `mun_forms` where form_valid=1 ";
$boxres = $conn->query($boxsql);

if ($boxres->num_rows > 0) {
    // output data of each row
    while($boxrw = $boxres->fetch_assoc()) {
		#firts loop begins
		echo '
        <div class="col-lg-4">
                        <div class="panel panel-color panel-inverse">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">'.$boxrw['form_name'].'</h3> 
                            </div> 
                            <div class="panel-body"> 
                                <p>'; 
								if(strtolower($boxrw['form_name'])== 'delegate'){
									echo $boxrw['del_app'];
								}
								if(strtolower($boxrw['form_name']) == 'journalist'){
									echo $boxrw['journ_app'];
								}
								if(strtolower($boxrw['form_name']) == 'cartoonist'){
									echo $boxrw['cart_app'];
								}
								echo '</p> <p>
								
								';
								
								if(strtolower($boxrw['form_name'])== 'delegate'){
								$jpeg = "
							SELECT * FROM `reg_mun_school_info`";
							$frres = $conn->query($jpeg);

if ($frres->num_rows > 0) {
    // output data of each row
    while($frrw = $frres->fetch_assoc()) {
		#firts loop begins
		
		echo '<button class="btn btn-info" data-toggle="modal" data-target="#'.$frrw['reg_sch_hash_rel'].'">'.$frrw['reg_sch_name'].'</button><br><br>';
	}
	
}
								}
								if(strtolower($boxrw['form_name']) == 'journalist'){
								$jpeg = "
							SELECT * FROM `jounr_reg_master`";
							$frres = $conn->query($jpeg);

if ($frres->num_rows > 0) {
    // output data of each row
    while($frrw = $frres->fetch_assoc()) {
		#firts loop begins
		echo '<button class="btn btn-info" data-toggle="modal" data-target="#'.$frrw['j_pi_hash'].'">'.$frrw['j_pi_nm'].'</button><br><br>';
	}
	
}
								}
								if(strtolower($boxrw['form_name']) == 'cartoonist'){
								$jpeg = "
							SELECT * FROM `cart_master`";
							$frres = $conn->query($jpeg);

if ($frres->num_rows > 0) {
    // output data of each row
    while($frrw = $frres->fetch_assoc()) {
		#firts loop begins
		echo '<button class="btn btn-info" data-toggle="modal" data-target="#'.$frrw['hash_rel'].'">'.$frrw['cart_pi_name'].'</button><br><br>';
	}
	
}
								}
								
								

								
								
								echo'</p>
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
 
 
 
                                        
                                 
                                        <!-- -->
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
		   include('get_del.php');
		   include('get_cart.php');
		   include('get_journ.php');
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
