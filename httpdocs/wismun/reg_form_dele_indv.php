
<script type="text/javascript">

$().ready(function() {		
				/* @custom validation method (smartCaptcha) 
				------------------------------------------------------------------ */
						
				$("#form_dele_indv").validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
						errorClass: "has-error",
						validClass: "has-success",
						errorElement: "em",
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
							
										dele_nmi: { 
										required: true 
										},
										
                                        dele_cntcno: { 
										required: true ,
										digits: true,
										minlength: 8,
										maxlength: 15
										
										},
                                        
										dele_alcntcno: { 
											 required: true ,
											 digits: true,
										minlength: 8,
										maxlength: 15
											 },
                                        
										
										dele_eml: {
											  required: true 
											 },
                                        
										dele_address: {
											  required: true 
											 },
                                        
										dele_name: {
											  required: true 
											 },
                                        
										dele_phone: {
											  required: true ,
											 digits: true,
										minlength: 8,
										maxlength: 15
											 },
                                        
										dele_altphone: {
											  required: true ,
											 digits: true,
										minlength: 8,
										maxlength: 15
											 },
                                        
										dele_emailid: {
											  required: true 
											 },
                                        
										
										dele_pinc: { 
											 required: true
											  },
                                        
										dele_cty: {
											  required: true
											  },
                                        
                                        
										dele_country_pref_1: {
											 required: true },
                                        
										dele_country_pref_2: {
											
											 required: true
											  },
                                        
										dele_country_pref_3: {
											 required: true
											 
											  },
                                        
                                        
										
										dele_md5_sha1: {
											 required: true 
										},
                                        
										dele_subm_bt: { 
										required: true 
										}
					
					
							
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
                                    dele_nmi: {
											  required: 'Enter Institution\'s Name'
											  },
											  
                                    dele_cntcno: {
											  required: 'Enter Contact Number' 
											 },
											 
                                    dele_alcntcno: { required: 'Enter Alternate Contact Number ' 
											 },




										dele_name: {
											  required: 'Enter Name' 
											 },
                                        
										dele_phone: {
											  required: 'Enter Contact Number' 
											 },
                                        
										dele_altphone: {
											  required: 'Enter Alternate Contact Number' 
											 },
                                        
										dele_emailid: {
											  required: 'Enter Personal Email ID' 
											 },
											 
											 											 
                                    dele_eml: { 
											 required: 'Enter Email' },
									
                                    dele_address: { 
											 required: 'Enter Address' 
											 },
											 
                                    dele_pinc: {
											  required: 'Enter Pincode' 
											 },
											 
                                    dele_cty: {
											  required: 'Enter City'
											  },
											  
                                    dele_country_pref_1: { 
											 required: 'Enter Country Preference 1' 
											 },
											 
                                   dele_country_pref_2: { 
											 required: 'Enter Country Preference 2' 
											 },
											 
                                    dele_country_pref_3: { 
											 required: 'Enter Country Preference 3' 
											 },
											 
                                    dele_md5_sha1: {
											  required: 'Refresh Page ' 
											 },
											 
                                    dele_subm_bt: { 
											 required: 'Refresh Page ' 
											 }
															
						 
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
<div style="margin-top:30px" id="form_container_dele_indv" class="container form_cont_all">
<div class="row">

	<?php /*<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
 		*/?>
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">

     	    	<form id="form_dele_indv" action="reg_upld_dele_indv.php" method="post">
            
            <div class="row">
            <p style="text-align:left">
<h2>Individual Delegate Registration Form</h2>
            </p>
            </div>
                        <hr>
                                    <p style=" text-transform:capitalize">COMMITTEES</p>
            <div class="row">
            <p style="text-align:center">
<div class="row">
1.Security Council<br>
2.UNESCO (United Nations Educational Scientific and Cultural Organization)<br>
3.ECOSOC (United Nations Economic and Social Council)<br>
4.HRC (Human Rights Council)<br>













</div>


            </p>
            </div><hr>

                        <p style=" text-transform:capitalize">SCHOOL'S INFORMATION</p>
						<div class="row">

							<div class="col-sm-3">
								<div class="form-group">

								  <label>Name of <br>institution*</label>
                                  <input name="dele_nmi" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                    <input name="dele_cntcno" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                    <input name="dele_alcntcno" type="text" value="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                    <input name="dele_eml" type="email" value="" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                          <div class="row">
                        	<div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Institution's Address*</label>
                                    <input name="dele_address" type="text" class="form-control"  ></input>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>Pincode<br></label>
                                            <input name="dele_pinc" type="text" value="NA" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>City<br></label>
                                            <input name="dele_cty" type="text" value="Dubai" class="form-control" />
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
                                  <input name="dele_name" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                    <input name="dele_phone" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                    <input name="dele_altphone" type="text" value="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                    <input name="dele_emailid" type="email" value="" class="form-control"  />
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

Please enter your selections in order of preference. <br>
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
          <input name="dele_country_pref_1" type="text" value="" class=" form-control"   />
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
          <input name="dele_country_pref_2" type="text" value="" class=" form-control"   />
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
          <input name="dele_country_pref_3" type="text" value="" class=" form-control"   />
        </div>
    </div>
</div>



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
<div class="row">                     
    <div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
        <input type="hidden" value="ejkg983ut984uet09gi" name="dele_md5_sha1" />
            <input name="dele_subm_bt" type="submit" value="Register" class="btn btn-primary btn-block btn-lg" />
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
    
	 function BringIndvDeleForm(){
		 HideAll();
	 $('#form_container_dele_indv').fadeIn();
	  $('html, body').animate({
        scrollTop: $("#f_form_anchor").offset().top
    }, 2000);
	 };
	 </script>   
