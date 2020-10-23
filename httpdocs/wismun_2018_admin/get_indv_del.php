 <?php

#$sql = "SELECT distinct(oi_rel_or_id)as oid from sw_order_items where oi_rel_pr_id = 3 and oi_valid= 1 ";
$modalsql = "SELECT * FROM `indv_reg_dele` where i_valid =1";
$modalres = $conn->query($modalsql);

if ($modalres->num_rows > 0) {
    // output data of each row
    while($modalrw = $modalres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="B'.$modalrw['i_id'].'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-full">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$modalrw['i_d_name'].'</h4>
      </div>
      <div class="modal-body">
		';
		
	
				
							?>
                            
<div class="row">
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">            
            <div class="row">
            <p style="text-align:left">
<h2>Delegate Registration Form, <?php echo $modalrw['i_d_name']." from ".$modalrw['i_s_name'] ; ?></h2>
            </p>
            </div>
                        <hr>
                            
                        <p style=" text-transform:capitalize">SCHOOL'S INFORMATION</p>
						<div class="row">

							<div class="col-sm-3">
								<div class="form-group">

								  <label>Name of <br>institution*</label>
                                  <input type="text" value="<?php echo $modalrw['i_s_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                  <input type="text" value="<?php echo $modalrw['i_s_phone'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                  <input type="text" value="<?php echo $modalrw['i_s_altphone'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                  <input type="text" value="<?php echo $modalrw['i_s_email'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                          <div class="row">
                        	<div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Institution's Address*</label>
                                  <input type="text" value="<?php echo $modalrw['i_s_address'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>Pincode<br></label>
                                  <input type="text" value="<?php echo $modalrw['i_s_pincode'] ?>" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>City<br></label>
                                  <input type="text" value="<?php echo $modalrw['i_s_city'] ?>" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        

<hr>

                        <p style=" text-transform:capitalize">DELEGATE'S INFORMATION</p>
						<div class="row">

							<div class="col-sm-3">
								<div class="form-group">

								  <label>Name<br> of Delegate*</label>
                                  <input name="dele_name" type="text" value="<?php echo $modalrw['i_d_name']; ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                    <input name="dele_phone" type="text" value="<?php echo $modalrw['i_d_phone']; ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                    <input name="dele_altphone" type="text" value="<?php echo $modalrw['i_d_altphone']; ?>" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                    <input name="dele_emailid" type="email" value="<?php echo $modalrw['i_d_email']; ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          



<br>
<hr>


<p>
COUNTRY PREFERENCES:<br>

Please note that as far as possible one school shall be assigned delegations of one country

across all committees. However, if for unforeseen reasons this is not possible, the

concerned schools will be notified via the contact details provided.<br>

Please enter your selections in order of preference. The country matrix given on the website

shall be used as reference.<br>
</p>


<div class="row">
    <div class="col-sm-1">
        <div class="form-group">
          <label>Order</label>
          <input type="text" readonly value="1st" class=" form-control"  />
        </div>
    </div>
    <div class="col-sm-11">
        <div class="form-group">
          <label>Country Preference*</label>
                                  <input type="text" value="<?php echo $modalrw['i_cp1'] ?>" class="form-control"  />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-1">
        <div class="form-group">
          <input type="text" readonly value="2nd" class=" form-control"  />
        </div>
    </div>
    <div class="col-sm-11">
        <div class="form-group">
                                  <input type="text" value="<?php echo $modalrw['i_cp2'] ?>" class="form-control"  />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-1">
        <div class="form-group">
          <input type="text" readonly value="3rd" class=" form-control"  />
        </div>
    </div>
    <div class="col-sm-11">
        <div class="form-group">
                                  <input type="text" value="<?php echo $modalrw['i_cp3'] ?>" class="form-control"  />
        </div>
    </div>
</div>

<!--CLONE 4 -->

<hr><br>
<p>
The final allotment of the countries will be at the discretion of the Secretariat of

WISMUN2018
<br>

<ul>

<li>The First Phase of allotments 4<sup>th</sup> April 2018</li>

</ul>
<br>

 <u><i>ELIGIBILITY CRITERION</i></u><br>


Only open to Secondary Students (Year 10 onwards)<br>

<br>

<u><i>CONFERENCE FEE
</i></u><br>

AED 250/-per Individual Delegate<br>




</p>
<p style="color:#D00508; font-style:italic">
Please send your Registration Forms to <a href="mailto:sbsmun2016@gmail.com">sbsmun2016@gmail.com</a>.
<br>

(N.B.: Only applicable for registration via e-mail.)</p>

<div class="row">
<div class="col-xs-8 col-xs-offset-2">
FOR FURTHER DETAILS, PLEASE CONTACT:<br>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
<div class="row">
WISMUN EMAIL
</div><hr>

</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
<div class="row">wismun2018@gmail.com
</div><hr>
</div>


</div>
</div>
<div class="row" style="font-weight:200; font-size:large">
Please Note: This registration form is only applicable for Individual delegation. 
</div>

<br>
<br>

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
 
 
 