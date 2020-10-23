 <?php

#$sql = "SELECT distinct(oi_rel_or_id)as oid from sw_order_items where oi_rel_pr_id = 3 and oi_valid= 1 ";
$modalsql = "SELECT * FROM `jounr_reg_master`";
$modalres = $conn->query($modalsql);

if ($modalres->num_rows > 0) {
    // output data of each row
    while($modalrw = $modalres->fetch_assoc()) {
		#firts loop begins
		echo '
<div id="'.$modalrw['j_pi_hash'].'" class="modal fade" role="dialog">
  <div class="modal-dialog modal-full">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">'.$modalrw['j_pi_nm'].'</h4>
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
<h2>Journalist Registration Form <?php echo $modalrw['j_pi_nm']; ?></h2>
            </p>
            </div>
                        <hr>
                                    <p style=" text-transform:capitalize">INSTRUCTIONS:</p>
            <div class="row">
            <p style="text-align:center">
<li>No other document apart from the contents of this form shall be taken into account. The applicant is required to fill in the answers to all the questions in this form itself.</li>
<li>The application is to be sent in at sbsmun2016ip@gmail.com.</li>
<li>The subject of the email as well as the title of the Word document must be “YourName_Journalist”.</li>
<li>The deadline to submit this form is Monday, 4th July 2016.</li>
<li>All questions are mandatory.</li>

            </p>
            </div><hr>

                        <p style=" text-transform:capitalize">PERSONAL INFORMATION</p>
						<div class="row">

							<div class="col-sm-4">
								<div class="form-group">

								  <label>Name*</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_nm'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Year of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_dob_y'] ?>" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Month of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_dob_m'] ?>" class="form-control"  />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Day of Birth</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_dom_d'] ?>" class="form-control"  />
                                    </div>
                                </div>
                            
                            </div>
                         </div>
                            
                         <div class="row">
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Contact No.*</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_cnct_no'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Email ID*</label>
                                  <input type="text" value="<?php echo $modalrw['j_pi_eml'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                        
                        <hr>
                        <p style=" text-transform:capitalize">EXPERIENCE IN JOURNALISM</p>
                        
                        

                         <div class="row">
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <label>SEPERATE POINTS WITH A COMMA( ,)</label>
                                                            <br>
<em  style="color:red">ACCEPTED SPECIAL CHARACTERS (' " / \ , . ? ;)
</em>                        
<br>
<br>
                                    <textarea class="form-control" ><?php echo $modalrw['j_pi_exper_journ'] ?></textarea>
                                </div>
                            </div>
                        </div>

  
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN EXPERIENCE</p>

<div id="entry1" class="clonedInput">
              <?php
$jexpsql= "SELECT * FROM `jounr_reg_experience` where j_ex_rel_hash = '".$modalrw['j_pi_hash']."' ";
$jexpres = $conn->query($jexpsql);

if ($jexpres->num_rows > 0) {
    // output data of each row
	$jrx = 1;
    while($jexprw = $jexpres->fetch_assoc()) {
		#firts loop begins
		?>
         <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input type="text" value="<?php echo $jrx ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>MUN*</label>
                                  <input type="text" value="<?php echo $jexprw['j_ex_mun'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Institution*</label>
                                  <input type="text" value="<?php echo $jexprw['j_ex_ins'] ?>" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-2">
                            	<div class="form-group">
                                    <label>Position*</label>
                                  <input type="text" value="<?php echo $jexprw['j_ex_pos'] ?>" class="form-control"  />
                                </div>
                            </div>
                             <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Awards*</label>
                                  <input type="text" value="<?php echo $jexprw['j_ex_awards'] ?>" class="form-control"  />
                                </div>
                            </div>
                        </div>
        <?php
		
		
		$jrx++;
	}
}?>          
                       






                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                        <p style=" text-align:center; font-weight:300; text-transform:capitalize"><b>Write an article on any one of the following agendas.[500 - 600 words]</b></p>
<p>
Please note that your pieces must reflect analysis, research, and a

well-substantiated opinion.<br>


&bull; Threat posed by bioterrorism to quality of life in volatile

nations.<br>


&bull; Destruction of symbols of cultural heritage by the ISIS in Mosul

and Palmyra.<br>



</p>                        <br>
<em  style="color:red">ACCEPTED SPECIAL CHARACTERS (' " / \ , . ? ;)
</em>                        
<br>
<br>
</div>
</div>
    <br>
                    
                        

                         <div class="row">
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" ><?php echo $modalrw['j_pi_article_1'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                       <p>
                       You are reporting from the simulation of the INTERPOL, the agenda<br>


being “Widespread corruption and tax evasion by shell companies

recently highlighted by the Panama Papers leak.” Write down 3
<br>

questions that you as a journalist would ask any of the delegates

present; assuming the direction the debate could take. Please
<br>

ensure you specify which country’s delegation you would pose the

questions to.
                       </p>                        <br>
<em  style="color:red">ACCEPTED SPECIAL CHARACTERS (' " / \ , . ? ;)
</em>                        
<br>
<br>
</div></div>
                        
                        

                         <div class="row">
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" ><?php echo $modalrw['j_pi_reporting'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        <hr>
<div class="row" style="text-align:left	">
<div class="col-sm-6 col-md-offset-3">
                       <p>
                       Write below a writing sample that you believe exemplifies who you

are as a writer, and showcases your ability to think analytically and


critically.
<br>
<br>

[Preferably a piece written at an MUN, if you have prior

experience of the same - Please do not attach a separate

document to the email.]     </p>
                        <br>
<em  style="color:red">ACCEPTED SPECIAL CHARACTERS (' " / \ , . ? ;)
</em>                        
<br>
<br>
</div></div>                        
                        

                         <div class="row">
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" ><?php echo $modalrw['j_pi_writ_smple'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
<!-- Form content end -->

					</div>
				</div>
			</div>
		</div>
	</div>                            <?php
							
						
			
			
	
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
 
 
 