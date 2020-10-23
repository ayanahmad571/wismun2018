
<script type="text/javascript">

$().ready(function() {		
				/* @custom validation method (smartCaptcha) 
				------------------------------------------------------------------ */
						
				$("#form_cartoon").validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
						errorClass: "has-error",
						validClass: "has-success",
						errorElement: "em",
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
							
				
									
										cr_name : { required: true },
										cr_dob_yr : { required: true,
										digits: true,
										minlength: 4,
										maxlength: 4 },
										
										cr_dob_mt : { required: true,
										 },
										dob_d : { required: true ,
										digits: true,
										minlength: 2,
										maxlength: 2},
										
										schl : { required: true },
										cntcno : { required: true },
										eml : { required: true },
										journ_exp : { required: true },
										id_munex : { required: true },
										mun_munex : { required: true },
										ins_munex : { required: true },
										posi_munex : { required: true },
										awr_munex : { required: true },
										attachment : { required: true ,
													extension:"jpg|jpeg|png|gif"},
										attachment2 : { required: true ,
													extension:"jpg|jpeg|png|gif"},
										attachment11 : { required: true ,
													extension:"jpg|jpeg|png|gif"},
										attachment22 : { required: true ,
													extension:"jpg|jpeg|png|gif"},
										md5_sha1 : { required: true },
										subm_bt : { required: true},
					
							
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
                                   cr_name : { required: 'Enter Name' },
cr_dob_yr : { required: 'Enter Year' },
cr_dob_mt : { required: 'Enter Month' },
dob_d : { required: 'Enter Day' },
schl : { required: 'Enter School\'s Name' },
cntcno : { required: 'Enter Contact Number' },
eml : { required: 'Enter Email' },
journ_exp : { required: 'Enter Experience' },
id_munex : { required: 'Enter ID' },
mun_munex : { required: 'Enter MUN Name' },
ins_munex : { required: 'Enter Institution' },
posi_munex : { required: 'Enter Position' },
awr_munex : { required: 'Enter Award' },
attachment : { required: 'Upload Attachment' },
attachment2 : { required: 'Upload Attachment' },
attachment11 : { required: 'Upload Attachment' },
attachment22 : { required: 'Upload Attachment' },
md5_sha1 : { required: 'Enter MDD' },
subm_bt : { required: 'Enter Submit button value' }
															
						 
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
<div style="margin-top:30px" id="form_container_cartoon" class="container form_cont_all">
<div class="row">

	<?php /*<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
 		*/?>
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">

     	    	<form id="form_cartoon" action="reg_upld_cartoon.php" method="post" enctype="multipart/form-data">
            
            <div class="row">
            <p style="text-align:left">
<h2>Cartoonist Registration Form</h2>
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
                                  <input name="cr_name" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-8">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Year of Birth</label>
                                        <input name="cr_dob_yr" type="number" value="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Month of Birth</label>
                                        <select name="cr_dob_mt" class="form-control">
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
                                        <input name="dob_d" type="number" max="31" value="" class="form-control" />
                                    </div>
                                </div>
                            
                            </div>
                         </div>
                            
                         <div class="row">
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>School*</label>
                                    <input name="schl" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No.*</label>
                                    <input name="cntcno" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email ID*</label>
                                    <input name="eml" type="email" value="" class="form-control"  />
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
                                    <textarea name="journ_exp" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>

  
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN EXPERIENCE</p>

<div id="employer_entry1" class="clonedInput5">
                        
                        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input name="id_munex" id="id_munex" type="number" readonly value="1" class="id_munex  form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>MUN*</label>
                                  <input name="mun_munex" id="mun_munex" type="text" value="" class="mun_munex form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Institution*</label>
                                    <input name="ins_munex" id="ins_munex" type="text" value="" class="ins_munex form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-2">
                            	<div class="form-group">
                                    <label>Position*</label>
                                    <select  name="posi_munex" id="posi_munex" class="posi_munex form-control">
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
                                    <input name="awr_munex" id="awr_munex" type="text" value="" class="awr_munex form-control" />
                                </div>
                            </div>
                        </div>

</div>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons5">
          <input style="border-radius:10px" type="button" id="btnAdd5" value="Add More" class="btn btn-success" >
          <input style="border-radius:10px" type="button" id="btnDel5" value="Remove" class="btn btn-danger">
        </div> 
    </div>
</div>   


<br>

                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                        <p style=" text-align:center; font-weight:300; text-transform:capitalize">Upload here any two previous portrait caricatures sketched by you along with your picture’s subject
</p>
<em style="color:red">Max 1MB, SUPPORTED FILES ARE JPEG,JPG,PNG,GIF
</em>                        
<br>
<br>

<style>
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}</style>

<input id="uploadFile" placeholder="Choose File" disabled="disabled" />
<div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn" name="attachment" type="file" class="upload" />
</div>
<script>
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
</script>
<br>

<input id="uploadFile11" placeholder="Choose File" disabled="disabled" />
<div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn11" name="attachment11" type="file" class="upload" />
</div>
<script>
document.getElementById("uploadBtn11").onchange = function () {
    document.getElementById("uploadFile11").value = this.value;
};
</script>

</div>
</div>
    <br>

                        <hr>
                        <div class="row" style="text-align:left	">
                        <div class="col-sm-6 col-md-offset-3">

                        <p style=" text-align:center; font-weight:300; text-transform:capitalize">Upload here any two previous caricatures sketched by you depicting

any specific scenario along with a write-up explaining the situation.
</p>
<em style="color:red">Max 1MB, SUPPORTED FILES ARE JPEG,JPG,PNG,GIF
</em>                        
<br>
<br>



<input id="uploadFile2" placeholder="Choose File" disabled="disabled" />
<div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn2" name="attachment2" type="file" class="upload" />
</div>
<script>
document.getElementById("uploadBtn2").onchange = function () {
    document.getElementById("uploadFile2").value = this.value;
};
</script>
<br>



<input id="uploadFile22" placeholder="Choose File" disabled="disabled" />
<div class="fileUpload btn btn-primary">
    <span>Upload</span>
    <input id="uploadBtn22" name="attachment22" type="file" class="upload" />
</div>
<script>
document.getElementById("uploadBtn22").onchange = function () {
    document.getElementById("uploadFile22").value = this.value;
};
</script>

<br>
<br>
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
    
	 function BringCartoonForm(){
		 HideAll();
	 $('#form_container_cartoon').fadeIn();
	  $('html, body').animate({
        scrollTop: $("#f_form_anchor").offset().top
    }, 2000);
	 };
	 </script>   
