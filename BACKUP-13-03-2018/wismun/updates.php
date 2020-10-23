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
<script type="text/javascript" src="include/js/jquery.min.js"></script>

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


<div class="inner-container">
    <div class="container">
    
    
    <!-- -->
    
    <div class="col-sm-12">
          <div class="tabs-container"> 
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
          
              <li role="presentation" class="active"><a href="#tabOne" aria-controls="tab" role="tab" data-toggle="tab">Day 1</a></li>
             
              <li role="presentation"><a href="#tabThree" aria-controls="tab" role="tab" data-toggle="tab">Day 2</a></li>
              <li role="presentation"><a href="#tabFour" aria-controls="tab" role="tab" data-toggle="tab">Day 3</a></li>
            </ul>
            
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="tabOne">
                <h4>Day 1 Pictures</h4>
                     <div class="row">
      <?php
$da1imgsql = "SELECT *,(select count(lk_val) from mun_gallery_likes where lk_valid =1 and `lk_id_rel_mun_gall_id` = ma.mun_id) as likes FROM `mun_gallery` ma  
where img_valid = 1 and mun_day =1";
$da1imgres = $conn->query($da1imgsql);

if ($da1imgres->num_rows > 0) {
	 // output data of each row
	echo '<div class ="row">';
	$ejkthguiertb = 0;
    while($dorw = $da1imgres->fetch_assoc()) {
		if(($ejkthguiertb % 2  )==0){
			echo '</div><div class="row">';
		}else{
			echo '';
		}
		if($dorw['likes'] ==1){
			$plu = 'Like';
		}else{
			$plu = 'Likes';
		}
               echo '<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                	<div class="team-box full">
                    	<figure><img class="lazy" data-original="'.$dorw['imgsrc'].'" alt="" />
                        	<figcaption>
                            	<h6 ><i class="h'.sha1($dorw['mun_id']).'">'.$dorw['likes'].'</i> '.$plu.'
								 <form id="form'.sha1($dorw['mun_id']).'">
								<input type="hidden" name="h_hh" value="'.md5(sha1($dorw['mun_id'])).'"/>
								<button class="cvv'.sha1($dorw['mun_id']).' btn fa fa-thumbs-up" style="border:1px solid black;padding:7px;" type="submit" ></button>
								</form>
								
								    
    
								</h6>
								
                            </figcaption>
                        </figure>
                    </div>
					<script>


             
$(document).ready(function () {
    $(\'#form'.sha1($dorw['mun_id']).'\').on(\'submit\', function(e) {
        e.preventDefault();
        $.ajax({
            url : \'master_action.php\',
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                  $(".cvv'.sha1($dorw['mun_id']).'").hide();
			   $(".h'.sha1($dorw['mun_id']).'").html(data);

            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

	</script>
                </div>';
				$ejkthguiertb++;
    }
	echo '</div>';
} else {
    echo "No Image";
}
 ?> 
      
            	
                
            	
                
               
                
  </div>
              </div>
             
              <div role="tabpanel" class="tab-pane fade" id="tabThree">
                <h4>Day 2 Pictures</h4>
                <?php
$da1imgsql = "SELECT *,(select count(lk_val) from mun_gallery_likes where lk_valid =1 and `lk_id_rel_mun_gall_id` = ma.mun_id) as likes FROM `mun_gallery` ma  
where img_valid = 1 and mun_day =2";
$da1imgres = $conn->query($da1imgsql);

if ($da1imgres->num_rows > 0) {
    // output data of each row
	echo '<div class ="row">';
	$ejkthguiertbg = 0;
    while($dorw = $da1imgres->fetch_assoc()) {
		if(($ejkthguiertbg % 2  )==0){
			echo '</div><div class="row">';
		}else{
			echo '';
		}
		
		if($dorw['likes'] ==1){
			$plu = 'Like';
		}else{
			$plu = 'Likes';
		}
               echo '<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                	<div class="team-box full">
                    	<figure><img class="lazy" data-original="'.$dorw['imgsrc'].'" alt="" />
                        	<figcaption>
                            	<h6 ><i class="h'.sha1($dorw['mun_id']).'">'.$dorw['likes'].'</i> '.$plu.'
								 <form id="form'.sha1($dorw['mun_id']).'">
								<input type="hidden" name="h_hh" value="'.md5(sha1($dorw['mun_id'])).'"/>
								<button class="cvv'.sha1($dorw['mun_id']).' btn fa fa-thumbs-up" style="border:1px solid black;padding:7px;" type="submit" ></button>
								</form>
								
								    
    
								</h6>
								
                            </figcaption>
                        </figure>
                    </div>
					<script>


             
$(document).ready(function () {
    $(\'#form'.sha1($dorw['mun_id']).'\').on(\'submit\', function(e) {
        e.preventDefault();
        $.ajax({
            url : \'master_action.php\',
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                  $(".cvv'.sha1($dorw['mun_id']).'").hide();
			   $(".h'.sha1($dorw['mun_id']).'").html(data);

            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

	</script>
                </div>';
				$ejkthguiertbg++;
    }
	echo '</div>';
} else {
    echo "No Image";
}
 ?> 
              </div> 
              <div role="tabpanel" class="tab-pane fade" id="tabFour">
                <h4>Day 3 Pictures</h4>
                <?php
$da3imgsql = "SELECT *,(select count(lk_val) from mun_gallery_likes where lk_valid =1 and `lk_id_rel_mun_gall_id` = ma.mun_id) as likes FROM `mun_gallery` ma  
where img_valid = 1 and mun_day =3";
$da3imgres = $conn->query($da3imgsql );

if ($da3imgres->num_rows > 0) {
    // output data of each row
		echo '<div class= "row">';
	$ejkthguiertg = 0;

    while($dorw = $da3imgres->fetch_assoc()) {
		if(($ejkthguiertg % 2  )==0){
			echo '</div><div class="row">';
		}
		if($dorw['likes'] ==1){
			$plu = 'Like';
		}else{
			$plu = 'Likes';
		}
               echo '<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                	<div class="team-box full">
                    	<figure><img class="lazy" data-original="'.$dorw['imgsrc'].'" alt="" />
                        	<figcaption>
                            	<h6 ><i class="h'.sha1($dorw['mun_id']).'">'.$dorw['likes'].'</i> '.$plu.'
								 <form id="form'.sha1($dorw['mun_id']).'">
								<input type="hidden" name="h_hh" value="'.md5(sha1($dorw['mun_id'])).'"/>
								<button class="cvv'.sha1($dorw['mun_id']).' btn fa fa-thumbs-up" style="border:1px solid black;padding:7px;" type="submit" ></button>
								</form>
								
								    
    
								</h6>
								
                            </figcaption>
                        </figure>
                    </div>
					<script>


             
$(document).ready(function () {
    $(\'#form'.sha1($dorw['mun_id']).'\').on(\'submit\', function(e) {
        e.preventDefault();
        $.ajax({
            url : \'master_action.php\',
            type: "POST",
            data: $(this).serialize(),
            success: function (data) {
                  $(".cvv'.sha1($dorw['mun_id']).'").hide();
			   $(".h'.sha1($dorw['mun_id']).'").html(data);

            },
            error: function (jXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });
});

	</script>
                </div>';
				$ejkthguiertg++;
    }
	echo '</div>';
	
} else {
    echo "No Image";
}
 ?> 
              </div>
            </div>
          </div>
        </div>
    <!-- -->
 
  </div>
  </div>
 <!--footer start-->
  <?php 
  echo $web_config['web_footer_html'];
  ?>
  <!--footer end--> 
</div>
 
    <?php 

get_end_script_for_reg($conn,$pg_config,$web_config);
?>
	<script src="include/js/jquery.lazyload.js"></script>
    <script>
	$(function() {
    $("img.lazy").lazyload();
});
	</script>
    

  </body>

</html>