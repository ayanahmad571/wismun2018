 <?php

#$sql = "SELECT distinct(oi_rel_or_id)as oid from sw_order_items where oi_rel_pr_id = 3 and oi_valid= 1 ";
$imgur = '../sbsmun/';
$modalsql = "SELECT * FROM `cart_master` ";

$modalres = $conn->query($modalsql);

if ($modalres->num_rows > 0) {
    // output data of each row
    while($modalrw = $modalres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.$modalrw['hash_rel'].'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-full">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$modalrw['cart_pi_name'].'</h4>
      </div>
      <div class="modal-body">
		';
		
	
				
							?>
                            
<div class="row">

	<?php /*<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
 		*/?>
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">

            
            <div class="row">
            <p style="text-align:left">
<h2>Cartoonist Registration Form <?php echo $modalrw['cart_pi_name']; ?></h2>
            </p>
            </div>
                        <hr>
                                    <p style=" text-transform:capitalize">INSTRUCTIONS:</p>
            <div class="row">
            <p style="text-align:center">
<li>	No other document apart from the contents of this form shall be taken into account. The applicant is required to fill in the answers to all the questions in this form itself.</li>
<li>The application is to be sent in at sbsmun2016ip@gmail.com.</li>
<li>The subject of the email as well as the title of the Word document must be “YourName_Cartoonist”.</li>
<li>The deadline to submit this form is Monday,4th July 2016.</li>
<li>All questions are mandatory.</li>


            </p>
            </div><hr>

                        <p style=" text-transform:capitalize">PERSONAL INFORMATION</p>
						<div class="row">

							<div class="col-sm-4">
								<div class="form-group">

								  <label>Name*</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Year of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_dob_y'] ?>" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Month of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_dob_m'] ?>" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Day of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_dob_d'] ?>" class="form-control"  />
                                    </div>
                                </div>
                            
                            </div>
                         </div>
                            
                         <div class="row">
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>School*</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_schl'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No.*</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_cntcn'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email ID*</label>
                                  <input type="text" value="<?php echo $modalrw['cart_pi_eml'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                        
                        <hr>
                        <p style=" text-transform:capitalize">EXPERIENCE IN JOURNALISM</p>
                        <br>
<em  style="color:red">ACCEPTED SPECIAL CHARACTERS (' " / \ , . ? ;)
</em>                        
<br>
<br>

                         <div class="row">
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" ><?php echo $modalrw['cart_pi_exp_i_jounr'] ?></textarea>
                                </div>
                            </div>
                        </div>

  
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN EXPERIENCE</p>

            <?php
$cartsql= "SELECT * FROM `cart_munex` where cmnx_rel_hash = '".$modalrw['hash_rel']."' ";
$cartres = $conn->query($cartsql);

if ($cartres->num_rows > 0) {
    // output data of each row
	$crx = 1;
    while($cartrw = $cartres->fetch_assoc()) {
		#firts loop begins
		
		?>
        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input  readonly value="<?php echo $crx ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>MUN*</label>
                                  <input type="text" value="<?php echo $cartrw['cmnx_mun'] ?>" class="form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Institution*</label>
                                  <input type="text" value="<?php echo $cartrw['cmnx_ins'] ?>" class="form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-2">
                            	<div class="form-group">
                                    <label>Position*</label>
                                  <input type="text" value="<?php echo $cartrw['cmnx_pos'] ?>" class="form-control"   />
                                </div>
                            </div>
                             <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Awards*</label>
                                  <input type="text" value="<?php echo $cartrw['cmnx_awards'] ?>" class="form-control"   />
                                </div>
                            </div>
                        </div>

        <?php
		$crx++;
	}
}
		?>             
                        


<br>

                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                        <p style=" text-align:center; font-weight:300; text-transform:capitalize">Upload here any two previous portrait caricatures sketched by you along with your picture’s subject
</p>
<div class="row">
<div class="col-sm-6">
	<img src="<?php echo $imgur.$modalrw['../sbsmun_2016_admin/cart_img_cari_1_src'] ?>" class="img-responsive" />
</div>
<div class="col-sm-6">
	<img src="<?php echo $imgur.$modalrw['../sbsmun_2016_admin/cart_img_cari_2_src'] ?>" class="img-responsive" />
</div>

</div>


</div>
</div>
    <br>

                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                        <p style=" text-align:center; font-weight:300; text-transform:capitalize">Upload here any two previous caricatures sketched by you depicting

any specific scenario along with a write-up explaining the situation.
</p>
<div class="row">
<div class="col-sm-6">
	<img src="<?php echo $imgur.$modalrw['../sbsmun_2016_admin/cart_img_cari_3_src'] ?>" class="img-responsive" />
</div>
<div class="col-sm-6">
	<img src="<?php echo  $imgur.$modalrw['../sbsmun_2016_admin/cart_img_cari_4_src'] ?>" class="img-responsive" />
</div>

</div>





</div>
</div>
                        
<!-- Form content end -->
					</div>
				</div>
			</div>
		</div>
	                            <?php
							
						
			
			
	
	echo '
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
}
 ?> 
 
 
 