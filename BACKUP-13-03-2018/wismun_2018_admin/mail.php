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
                                <h3 class="panel-title">Mail Records</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <!-- -->

  <?php

$boxxsql = "select * from mail_rec order by ml_timestamp_sent DESC ";
$boxxres = $conn->query($boxxsql);

if ($boxxres->num_rows > 0) {
    // output data of each row
    while($box = $boxxres->fetch_assoc() ) {
		
		#firts loop begins
		echo '<div class="panel panel-default m-t-20">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">'.$box['ml_subj'].'</h3> 
                            </div>
                            <div class="panel-body">
                                <div class="media m-b-30 ">
                                    <div class="media-body">
                                        <span class="media-meta pull-right">'.date('D d M, Y @ h:i:s A',$box['ml_timestamp_sent']).'</span>

                                        <h4 class="text-primary m-0">'.$box['ml_from_name'].'</h4>
                                        <small class="text-muted">From: '.$box['ml_from_email'].'</small>
                                    </div>
                                </div> <!-- media -->

                                <p>'.$box['ml_content'].'</p>
								
                                <hr/>

                               
                            
                            </div> <!-- panel-body -->
                        </div>';
		
	#first loop ends
    }
} else {
    echo "0 results";
}
 ?> 
                                        
 
                                        
                                 
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
            
 
            
            <footer class="footer">
                Ayan Ahmad <i class="fa fa-copyright"></i>
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
