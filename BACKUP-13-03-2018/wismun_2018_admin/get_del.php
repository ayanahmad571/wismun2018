 <?php

#$sql = "SELECT distinct(oi_rel_or_id)as oid from sw_order_items where oi_rel_pr_id = 3 and oi_valid= 1 ";
$modalsql = "SELECT * FROM `reg_mun_school_info` si left join reg_country_pref cp on si.reg_sch_hash_rel = cp.rel_hash ";
$modalres = $conn->query($modalsql);

if ($modalres->num_rows > 0) {
    // output data of each row
    while($modalrw = $modalres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.$modalrw['reg_sch_hash_rel'].'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-full">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$modalrw['reg_sch_name'].'</h4>
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
<h2>Delegate Registration Form <?php echo $modalrw['reg_sch_name']; ?></h2>
            </p>
            </div>
                        <hr>
                            
                        <p style=" text-transform:capitalize">SCHOOL'S INFORMATION</p>
						<div class="row">

							<div class="col-sm-3">
								<div class="form-group">

								  <label>Name of <br>institution*</label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_contcc_no'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_alt_contcc_no'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_email'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                          <div class="row">
                        	<div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Institution's Address*</label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_addr'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>Pincode<br></label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_pincd'] ?>" class="form-control"  />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>City<br></label>
                                  <input type="text" value="<?php echo $modalrw['reg_sch_city'] ?>" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <hr>
                        <p style=" text-transform:capitalize">MUN FACULTY ADVISOR (S)</p>
                        
<?php
$mfasql= "SELECT * FROM `reg_mun_mfa_frm` where rel_hash = '".$modalrw['reg_sch_hash_rel']."' ";
$mfares = $conn->query($mfasql);

if ($mfares->num_rows > 0) {
    // output data of each row
	$mfax = 1;
    while($mfarw = $mfares->fetch_assoc()) {
		#firts loop begins
        ?>
        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input readonly type="text" value="<?php echo $mfax ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>Name*</label>
                                  <input type="text" value="<?php echo $mfarw['reg_mfa_frm_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email*</label>
                                  <input type="text" value="<?php echo $mfarw['reg_mfa_frm_email'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No*</label>
                                  <input type="text" value="<?php echo $mfarw['reg_mfa_frm_cntccno'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
        <?php
        $mfax++;
        }
}

?>
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN STUDENT COORDINATOR (S)</p>

                        
                        
                        
<?php
$mscsql= "SELECT * FROM `reg_mun_msc` where rel_hash = '".$modalrw['reg_sch_hash_rel']."' ";
$mscres = $conn->query($mscsql);

if ($mscres->num_rows > 0) {
    // output data of each row
	$mscx = 1;
    while($mscrw = $mscres->fetch_assoc()) {
		#firts loop begins
        ?>
       <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input readonly type="text" value="<?php echo $mscx ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>Name*</label>
                                  <input type="text" value="<?php echo $mscrw['reg_mun_msc_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email*</label>
                                  <input type="text" value="<?php echo $mscrw['reg_mun_msc_email'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No*</label>
                                  <input type="text" value="<?php echo $mscrw['reg_mun_msc_cntcno'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>

        <?php
        $mscx++;
        }
}

?>


<hr>
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
		        <label>Expected Delegate Strength</label>
                                  <input type="text" value="<?php echo $modalrw['reg_mun_msc_exp_del_str'] ?>" class="form-control"  />
        </div>
    </div>
</div>

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
                                  <input type="text" value="<?php echo $modalrw['country_pref1'] ?>" class="form-control"  />
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
                                  <input type="text" value="<?php echo $modalrw['country_pref2'] ?>" class="form-control"  />
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
                                  <input type="text" value="<?php echo $modalrw['country_pref3'] ?>" class="form-control"  />
        </div>
    </div>
</div>
                        <hr>
                        <p style=" text-transform:capitalize">DELEGATES PARTICIPATING</p>
                        
                        <?php
$delsql= "SELECT * FROM `reg_delegates` where rel_hash = '".$modalrw['reg_sch_hash_rel']."' ";
$delres = $conn->query($delsql);

if ($delres->num_rows > 0) {
    // output data of each row
	$delx = 1;
    while($delrw = $delres->fetch_assoc()) {
		#firts loop begins
        ?>
      
 <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input type="text" value="<?php echo $delx ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-5">
                            	<div class="form-group">
                                
                            	  <label>Name*</label>
                                  <input type="text" value="<?php echo $delrw['reg_dele_name'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Committee*</label>
                                  <input type="text" value="<?php echo $delrw['reg_dele_comm'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>

        <?php
        $delx++;
        }
}

?>
<!--CLONE 4 -->

<hr><br>
<p>
The final allotment of the countries will be at the discretion of the Secretariat of

SBSMUN2016
<br>

<ul>

<li>The First Phase of allotments Monday 4<sup>th</sup> July 2016</li>

<li>The Second Phase of allotments Thursday 14<sup>th</sup> July 2016</li>
</ul>
<br>

 <u><i>ELIGIBILITY CRITERION</i></u><br>


Classes IX –XII<br>


[Ages 14 –18]<br>

<br>

<u><i>CONFERENCE FEE
</i></u><br>

₹3500/-per School<br>


₹3000/-per Individual Delegate<br>


Cheques to be drawn in favour of "Step by Step School".<br>


Please note –SBSMUN2016 must be clearly printed on the envelope.<br>


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
Ms. Shruti Mishra<br>
Chef de Cabinet
</div><hr>
<div class="row">
Siddhartha Rai Tandon<br>
Secretary General
</div><hr>
<div class="row">
Arnav Mohan Gupta<br>
USG Conference Services
</div>
<hr>

</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" >
<div class="row">9810222747<br>

shruti.mishra@sbs-school.org
</div><hr>
<div class="row">8800160719<br>
siddharthatandon31@gmail.com
</div><hr>
<div class="row">9910160090<br>
arnavmohangupta@yahoo.co.in
</div><hr>
</div>


</div>
</div>
<div class="row" style="font-weight:200; font-size:large">
Please Note: This registration form is applicable for both individual and school delegations. 
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
 
 
 