<script type="text/javascript">

$().ready(function() {		
				/* @custom validation method (smartCaptcha) 
				------------------------------------------------------------------ */
						
				$("#form_journ").validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
						errorClass: "has-error",
						validClass: "has-success",
						errorElement: "em",
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
							
											jr_name : { required: true },
											jr_dob_yr : { required: true,
											digits: true,
										minlength: 4,
										maxlength: 4
											 },
											jr_dob_mt : { required: true
											},											jr_day_o_b : { required: true,
											digits: true,
										minlength: 2,
										maxlength: 2 },
											jr_cntcno : { required: true,
											digits: true,
										minlength: 10,
										maxlength: 10 },
											jr_eml : { required: true },
											jr_exp : { required: true },
											jr_id_munex : { required: true },
											jr_mun_munex : { required: true },
											jr_ins_munex : { required: true },
											jr_posi_munex : { required: true },
											jr_awr_munex : { required: true },
											jr_opt_agnds_wr : { required: true },
											jr_rep_sim_intpl : { required: true },
											jr_insrt_writing : { required: true },
											md5_sha1 : { required: true },
											subm_bt : { required: true }
					
					
							
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
											jr_name : {
											required: 'Enter Name' },
											jr_dob_yr : {
											required: 'Enter Year' },
											jr_dob_mt : {
											required: 'Enter Month' },
											jr_day_o_b : {
											required: 'Enter Day' },
											jr_cntcno : {
											required: 'Enter Contact Number' },
											jr_eml : {
											required: 'Enter Email' },
											jr_exp : {
											required: 'Enter Journalist Experience' },
											jr_id_munex : {
											required: 'Enter ID' },
											jr_mun_munex : {
											required: 'Enter MUN Name' },
											jr_ins_munex : {
											required: 'Enter MUN Institution' },
											jr_posi_munex : {
											required: 'Enter MUN Position' },
											
											jr_awr_munex : {
											required: 'Enter Awards' },
											
											jr_opt_agnds_wr : {
											required: 'Enter Agenda Related Article' },
											
											jr_rep_sim_intpl : {
											required: 'Enter Simulation Related Report' },
											
											jr_insrt_writing : {
											required: 'Enter Writing Sample' },
											md5_sha1 : {
											required: 'Enter Value' },
											subm_bt : {
											required: 'Enter Value' }
															
						 
						},

						/* @validation highlighting + error placement  
						---------------------------------------------------- */	
						
						highlight: function(element, errorClass, validClass) {
								$(element).closest('.field').addClass(errorClass).removeClass(validClass);
						},
						unhighlight: function(element, errorClass, validClass) {
								$(element).closest('.field').removeClass(errorClass).addClass(validClass);
						},
						errorPlacement: function(error, element) {
						   if (element.is(":radio") || element.is(":checkbox")) {
									element.closest('.option-group').after(error);
						   } else {
									error.insertAfter(element);
						   }
						}
								
				});		
		
		});	
</script><style>
hr{
	border-bottom:black 2px solid;
}
</style>
<div style="margin-top:30px" id="form_container_journ" class="container form_cont_all">
<div class="row">

	<?php /*<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
 		*/?>
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">

     	    	<?php 
				if(isset($_GET['testing'])){
					$url = 'var_dump.php';
				}else{
					$url = 'reg_upld_journ.php';
				}
				?><form id="form_journ" action="<?php echo $url ?>" method="post">
            
            <div class="row">
            <p style="text-align:left">
<h2>Journalist Registration Form</h2>
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
                                  <input name="jr_name" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Year of Birth</label>
                                        <input name="jr_dob_yr" type="number" value="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Month of Birth</label>
                                        <select name="jr_dob_mt" class="form-control">
                                        <option>Month</option>
                                        <option value="01">Jan</option>
                                        <option value="02">Feb</option>
                                        <option value="03">Mar</option>
                                        <option value="04">Apr</option>
                                        <option value="05">May</option>
                                        <option value="06">Jun</option>
                                        <option value="07">Jul</option>
                                        <option value="08">Aug</option>
                                        <option value="09">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Day of Birth</label>
                                        <input name="jr_day_o_b" type="number" max="31" value="" class="form-control" />
                                    </div>
                                </div>
                            
                            </div>
                         </div>
                            
                         <div class="row">
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Contact No.*</label>
                                    <input name="jr_cntcno" type="" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Email ID*</label>
                                    <input name="jr_eml" type="email" value="" class="form-control"  />
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
                                    <textarea name="jr_exp" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>

  
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN EXPERIENCE</p>

<div id="entry1" class="clonedInput">
                        
                        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input name="jr_id_munex" id="jr_id_munex" type="text" readonly value="1" class="jr_id_munex  form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>MUN*</label>
                                  <input name="jr_mun_munex" id="jr_mun_munex" type="text" value="" class="jr_mun_munex form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Institution*</label>
                                    <input name="jr_ins_munex" id="jr_ins_munex" type="text" value="" class="jr_ins_munex form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-2">
                            	<div class="form-group">
                                    <label>Position*</label>
                                    <select  name="jr_posi_munex" id="jr_posi_munex" class="jr_posi_munex form-control">
                                    <option value="IP">IP</option>
                                    <option value="EB">EB</option>
                                    <option value="OC">OC</option>
                                    <option value="DEL">DEL</option>
                                    </select>
                                </div>
                            </div>
                             <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Awards*</label>
                                    <input name="jr_awr_munex" id="jr_awr_munex" type="text" class="jr_awr_munex form-control" />
                                </div>
                            </div>
                        </div>

</div>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons">
          <input style="border-radius:10px" type="button" id="btnAdd" value="Add More" class="btn btn-success" >
          <input style="border-radius:10px" type="button" id="btnDel" value="Remove" class="btn btn-danger">
        </div> 
    </div>
</div>   



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
                                    <textarea name="jr_opt_agnds_wr" class="form-control" ></textarea>
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
                                    <textarea name="jr_rep_sim_intpl" class="form-control" ></textarea>
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
                                    <textarea name="jr_insrt_writing" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
<!-- Form content end -->
<div class="row">                     
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
        <input type="hidden" value="9w834nhmtcg8uiej9" name="md5_sha1" />
            <input name="subm_bt" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" />
        </div>
    </div>
</div>
</form>
					</div>
				</div>
			</div>
		</div>
	</div>
    
     <script>
    
	 function BringJournForm(){
		 HideAll();
	 $('#form_container_journ').fadeIn();
	  $('html, body').animate({
        scrollTop: $("#f_form_anchor").offset().top
    }, 2000);
	 };
	 </script>   
