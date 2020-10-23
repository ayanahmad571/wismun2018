<?php

include('db_auth.php');
include ("functions/include.php");
if(isset($_POST['dele_md5_sha1'])){
 
 $md5_sha1= $_POST['dele_md5_sha1'];
if(ctype_alnum($md5_sha1)){
}else{die('hash not Valid');}
$checksql_1 = "select * from mun_forms where form_valid=1 and form_hash  ='".$md5_sha1."' and form_valid_till > ".time()."";
$checkres_1 = $conn->query($checksql_1);
$checkres_1 = $checkres_1->num_rows ;

if($checkres_1 ==1 ){
	if(isset($_POST['dele_nmi'])){
		if(isset($_POST['dele_cntcno'])){
			if(isset($_POST['dele_alcntcno'])){
				if(isset($_POST['dele_eml'])){
					if(isset($_POST['dele_address'])){
						if(isset($_POST['dele_pinc'])){
							if(isset($_POST['dele_cty'])){
								if(isset($_POST['dele_country_pref_1'])){
									if(isset($_POST['dele_country_pref_2'])){
										if(isset($_POST['dele_country_pref_3'])){
											if(isset($_POST['dele_name'])){
												if(isset($_POST['dele_emailid'])){
													if(isset($_POST['dele_phone'])){
														if(isset($_POST['dele_altphone'])){
															if(isset($_POST['dele_subm_bt'])){  
 

$nmi= $_POST['dele_nmi'];
$cntcno= $_POST['dele_cntcno'];
$alcntcno= $_POST['dele_alcntcno'];
$eml= $_POST['dele_eml'];
$address= $_POST['dele_address'];
$pinc= $_POST['dele_pinc'];
$cty= $_POST['dele_cty'];

$del_name = $_POST['dele_name'];
$del_phone = $_POST['dele_phone'];
$del_altphone = $_POST['dele_altphone'];
$del_email =$_POST['dele_emailid'];

$sql = array();
$error_dump=array();
$sqlcon = array();

if(is_a_contact_no($cntcno)){
}else{
	die('Enter a valid Institute Contact Number');
	}
if(is_a_contact_no($cntcno)){
}else{
	die('Enter a valid Institute Alternate Contact number');
	}



if(is_a_contact_no($del_phone)){
}else{
	die('Enter a valid Delegate Contact number');
	}

if(is_a_contact_no($del_altphone)){
}else{
	die('Enter a valid Delegate Alternate Contact number');
	}





if(($eml)){
}else{
	die('Enter a school email');
	}
	
	

if(($del_email)){
}else{
	die('Enter a personal email');
	}
	
	


	
if(is_an_address($address)){
}else{
	die('Enter a valid Address');
	}

if(is_a_name($cty,1)){
}else{
	die('Enter a valid City');
	}





$country_pref_1= $_POST['dele_country_pref_1'];
$country_pref_2= $_POST['dele_country_pref_2'];
$country_pref_3= $_POST['dele_country_pref_3'];

$sql = " INSERT INTO `indv_reg_dele`(`i_s_name`, `i_s_email`, `i_s_phone`, `i_s_altphone`, `i_s_address`, `i_s_pincode`, 
`i_s_city`, `i_d_name`, `i_d_phone`, `i_d_altphone`, `i_d_email`, `i_cp1`, `i_cp2`, `i_cp3`, `i_dnt`, `i_ip`) VALUES 
('".$nmi."',
'".$eml."',
'".$cntcno."',
'".$alcntcno."',
'".$address."',
'".$pinc."',
'".$cty."',
'".$del_name."',
'".$del_phone."',
'".$del_altphone."',
'".$del_email."',
'".$country_pref_1."',
'".$country_pref_2."',
'".$country_pref_3."',
'".time()."',
'".$_SERVER['REMOTE_ADDR']."'
)";





if($conn->query($sql)){
	header('Location: reg_main.php?regs=vguh00');
	echo '<br><h3>You have Registered Succesfully</h3>';
}else{
	die("ERR#65573<br>Please Email the error code to wismun2018@gmail.com");
}
	

	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Fo1rm_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}
 /*

 */ 











}




}else{die('Hash_Missing');}



 ?>