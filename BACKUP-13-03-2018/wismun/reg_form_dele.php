
<script type="text/javascript">

$().ready(function() {		
				/* @custom validation method (smartCaptcha) 
				------------------------------------------------------------------ */
						
				$("#form_dele").validate({
				
						/* @validation states + elements 
						------------------------------------------- */
						
						errorClass: "has-error",
						validClass: "has-success",
						errorElement: "em",
						
						/* @validation rules 
						------------------------------------------ */
							
						rules: {
							
										nmi: { 
										required: true 
										},
										
                                        cntcno: { 
										required: true ,
										digits: true,
										minlength: 10,
										maxlength: 10
										
										},
                                        
										alcntcno: { 
											 required: true ,
											 digits: true,
										minlength: 10,
										maxlength: 10
											 },
                                        
										
										eml: {
											  required: true 
											 },
                                        
										address: {
											  required: true 
											 },
                                        
										
										pinc: { 
											 required: true,
											 digits: true,
										minlength: 6,
										maxlength: 6
											  },
                                        
										cty: {
											  required: true
											  },
                                        
										id_frm: { required: true 
											 },
                                        
										nme_frm: { 
											 required: true
											  },
											  
                                        eml_frm: { 
											 required: true 
											 },
                                        
										cntc_frm: {
											  required: true ,
											  digits: true,
										minlength: 10,
										maxlength: 10
											 },
                                        
										id_msc: {
											  required: true 
											 },
                                        
										nme_msc: { 
											 required: true }
											 ,
                                        
										eml_msc: { 
											 required: true
											  },
                                        
										cntc_msc: {
											  required: true ,
											  digits: true,
										minlength: 10,
										maxlength: 10
											 },
                                        
										
										nme_msc2: { 
											 required: true }
											 ,
                                        
										eml_msc2: { 
											 required: true
											  },
                                        
										cntc_msc2: {
											  required: true ,
											  digits: true,
										minlength: 10,
										maxlength: 10
											 },
                                        
										
										
										
										exp_del_str: {
											  required: true 
											 },
                                        
										country_pref_1: {
											 required: true },
                                        
										country_pref_2: {
											
											 required: true
											  },
                                        
										country_pref_3: {
											 required: true
											 
											  },
                                        
										id_delp: {
											 required: true 
											 },
                                        
										name_delp: { 
										required: true 
										},
                                        
										
										com_delp: { 
										required: true 
										},
                                        
										
										md5_sha1: {
											 required: true 
										},
                                        
										subm_bt: { 
										required: true 
										}
					
					
							
						},
						
						/* @validation error messages 
						---------------------------------------------- */
							
						messages:{
							
                                    nmi: {
											  required: 'Enter Institution\'s Name'
											  },
											  
                                    cntcno: {
											  required: 'Enter Cotact Number' 
											 },
											 
                                    alcntcno: { required: 'Enter Alternate Contact Number ' 
											 },
											 
											 
                                    eml: { 
											 required: 'Enter Email' },
									
                                    address: { 
											 required: 'Enter Address' 
											 },
											 
                                    pinc: {
											  required: 'Enter Pincode' 
											 },
											 
                                    cty: {
											  required: 'Enter City'
											  },
											  
                                    id_frm: {
											  required: 'Enter Row ID ' 
											 },
											 
                                    nme_frm: {
											  required: 'Enter Faculty advisor\'s Name '
											  },
											  
                                    eml_frm: { 
											 required: 'Enter Faculty advisor\'s Email' 
											 },
											 
                                    cntc_frm: { 
											 required: 'Enter Faculty advisor\'s Mobile No. ' 
											 },
											 
                                    id_msc: { 
											 required: 'Enter Row iD ' 
											 },
											 
                                    nme_msc: { 
											 required: 'Enter Student Coordinator\'s Name '
											  },
											  
                                    eml_msc: { 
											 required: 'Enter Student Coordinator\'s Email ' 
											 },
											 
											 
                                    cntc_msc: { 
											 required: 'Enter Student Coordinator\'s Mobile no. '
											  },
											  
											  
                                    exp_del_str: { 
											 required: 'Enter Expected Strength ' 
											 },
											 
                                    country_pref_1: { 
											 required: 'Enter Country Preference 1' 
											 },
											 
                                    country_pref_2: { 
											 required: 'Enter Country Preference 2' 
											 },
											 
                                    country_pref_3: { 
											 required: 'Enter Country Preference 3' 
											 },
											 
                                    id_delp: { 
											 required: 'Enter Row ID' 
											 },
											 
                                    name_delp: { 
											 required: 'Enter Delegates Name ' 
											 },
											 
                                    com_delp: {
											  required: 'Enter Delegates Committee ' 
											 },
											 
                                    md5_sha1: {
											  required: 'Refresh Page ' 
											 },
											 
                                    subm_bt: { 
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
<div style="margin-top:30px" id="form_container_dele" class="container form_cont_all">
<div class="row">

	<?php /*<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 mar-60  text-center">
 		*/?>
        <div class="col-sm-12 col-md-12 text-center">
        <div class="row">
     		<div class="col-sm-12">

     	    	<form id="form_dele" action="reg_upld_dele.php" method="post">
            
            <div class="row">
            <p style="text-align:left">
<h2>Delegate Registration Form</h2>
            </p>
            </div>
                        <hr>
                                    <p style=" text-transform:capitalize">COMMITTEES</p>
            <div class="row">
            <p style="text-align:center">
<div class="row">
1.United Nations General Assembly<br>
2.Crisis Committee (1991 Gulf War)<br>
3.International Criminal Police Organisation<br>
4.United Nations Security Council<br>
5.United Nations Educational, Scientific and Cultural Organisation<br>
6.Ad Hoc Committee of the Indian Parliament<br>













</div>


            </p>
            </div><hr>

                        <p style=" text-transform:capitalize">SCHOOL'S INFORMATION</p>
						<div class="row">

							<div class="col-sm-3">
								<div class="form-group">

								  <label>Name of <br>institution*</label>
                                  <input name="nmi" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Contact <br>Number*</label>
                                    <input name="cntcno" type="text" value="" class="form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Alternate <br>Contact Number*</label>
                                    <input name="alcntcno" type="text" value="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                                    <label>Email<br> ID*<br></label>
                                    <input name="eml" type="email" value="" class="form-control"  />
                                </div>
                            </div>
                        </div>
                          
                          <div class="row">
                        	<div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Institution's Address*</label>
                                    <input name="address" type="text" class="form-control"  ></input>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>Pincode<br></label>
                                            <input name="pinc" type="text" value="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                            <label>City<br></label>
                                            <input name="cty" type="text" value="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <hr>
                        <p style=" text-transform:capitalize">MUN FACULTY ADVISOR (S)</p>
                        
                        
<div id="dependants_entry1" class="clonedInput2">
                        
                        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input name="id_frm" id="id_frm" type="text" readonly value="1" class="id_frm  form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>Name*</label>
                                  <input name="nme_frm" id="nme_frm" type="text" value="" class="nme_frm form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email*</label>
                                    <input name="eml_frm" id="eml_frm" type="email" value="" class="eml_frm form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No*</label>
                                    <input name="cntc_frm" id="cntc_frm" type="text" value="" class="cntc_frm form-control" />
                                </div>
                            </div>
                        </div>

</div>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons2">
          <input style="border-radius:10px" type="button" id="btnAdd2" value="Add More" class="btn btn-success" >
          <input style="border-radius:10px" type="button" id="btnDel2" value="Remove" class="btn btn-danger">
        </div> 
    </div>
</div>   
<br>
<!-- one end -->

<hr>
<p style=" text-transform:capitalize">MUN STUDENT COORDINATOR (S)</p>

<div id="particulars_entry1" class="clonedInput3">
                        
                        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input name="id_msc" id="id_msc" type="text" readonly value="1" class="id_msc  form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-3">
                            	<div class="form-group">
                            	  <label>Name*</label>
                                  <input name="nme_msc" id="nme_msc" type="text" value="" class="nme_msc form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Email*</label>
                                    <input name="eml_msc" id="eml_msc" type="email" value="" class="eml_msc form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-4">
                            	<div class="form-group">
                                    <label>Contact No*</label>
                                    <input name="cntc_msc" id="cntc_msc" type="text" value="" class="cntc_msc form-control" />
                                </div>
                            </div>
                        </div>

</div>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons3">
          <input style="border-radius:10px" type="button" id="btnAdd3" value="Add More" class="btn btn-success" >
          <input style="border-radius:10px" type="button" id="btnDel3" value="Remove" class="btn btn-danger">
        </div> 
    </div>
</div>   


<hr>
<div class="row">
	<div class="col-sm-4 col-sm-offset-4">
        <div class="form-group">
		        <label>Expected Delegate Strength</label>
                <input name="exp_del_str" id="cntc_msc" type="text" value="" class="cntc_msc form-control" />
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
          <input name="country_pref_1" type="text" value="" class=" form-control"   />
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
          <input name="country_pref_2" type="text" value="" class=" form-control"   />
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
          <input name="country_pref_3" type="text" value="" class=" form-control"   />
        </div>
    </div>
</div>
                        <hr>
                        <p style=" text-transform:capitalize">DELEGATES PARTICIPATING</p>
                        
                        <!--CLONE 4 -->
<div id="delegatespin1" class="clonedInput4">
                        
                        <div class="row">
                        	<div class="col-sm-1">
                            	<div class="form-group">
                            	  <label>SL.</label>
                                  <input name="id_delp" id="id_delp" type="text" readonly value="1" class="id_delp   form-control"  />
                                </div>
                            </div>
                            <div class="col-sm-5">
                            	<div class="form-group">
                                
                            	  <label>Name*</label>
                                  <input name="name_delp" id="name_delp" type="text" value="" class="name_delp form-control"   />
                                </div>
                            </div>
                            <div class="col-sm-6">
                            	<div class="form-group">
                                    <label>Committee*</label>
                                    <input name="com_delp" id="com_delp" type="text" value="" class="com_delp form-control"  />
                                </div>
                            </div>
                        </div>

</div>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons4">
          <input style="border-radius:10px" type="button" id="btnAdd4" value="Add More" class="btn btn-success" >
          <input style="border-radius:10px" type="button" id="btnDel4" value="Remove" class="btn btn-danger">
        </div> 
    </div>
</div>  <br>
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
    
	 function BringDeleForm(){
		 HideAll();
	 $('#form_container_dele').fadeIn();
	  $('html, body').animate({
        scrollTop: $("#f_form_anchor").offset().top
    }, 2000);
	 };
	 </script>   
