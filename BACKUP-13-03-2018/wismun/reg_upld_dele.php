<?php

include('db_auth.php');
include ("functions/include.php");
if(isset($_POST['md5_sha1'])){
 
 $md5_sha1= $_POST['md5_sha1'];
if(ctype_alnum($md5_sha1)){
}else{die('hash not Valid');}
$checksql_1 = "select * from mun_forms where form_valid=1 and form_hash  ='".$md5_sha1."' and form_valid_till > ".time()."";
$checkres_1 = $conn->query($checksql_1);
$checkres_1 = $checkres_1->num_rows ;

if($checkres_1 ==1 ){
	if(isset($_POST['nmi'])){
		if(isset($_POST['cntcno'])){
			if(isset($_POST['alcntcno'])){
				if(isset($_POST['eml'])){
					if(isset($_POST['address'])){
						if(isset($_POST['pinc'])){
							if(isset($_POST['cty'])){
								if(isset($_POST['id_frm'])){
									if(isset($_POST['nme_frm'])){
										if(isset($_POST['eml_frm'])){
											if(isset($_POST['cntc_frm'])){
										if(isset($_POST['id_msc'])){
									if(isset($_POST['nme_msc'])){
								if(isset($_POST['eml_msc'])){
							if(isset($_POST['cntc_msc'])){
							if(isset($_POST['exp_del_str'])){
								if(isset($_POST['country_pref_1'])){
									if(isset($_POST['country_pref_2'])){
										if(isset($_POST['country_pref_3'])){
											if(isset($_POST['id_delp'])){
												if(isset($_POST['name_delp'])){
													if(isset($_POST['com_delp'])){
														if(isset($_POST['subm_bt'])){  
 
$nmi= $_POST['nmi'];
$cntcno= $_POST['cntcno'];
$alcntcno= $_POST['alcntcno'];
$eml= $_POST['eml'];
$address= $_POST['address'];
$pinc= $_POST['pinc'];
$cty= $_POST['cty'];

$exp_del_str= $_POST['exp_del_str'];

$sql = array();
$error_dump=array();
$sqlcon = array();
if(is_a_contact_no($cntcno)){
}else{
	die('Enter a valid Contact Number');
	}
if(is_a_contact_no($cntcno)){
}else{
	die('Enter a valid Alternate Contact number');
	}



if(is_an_email($eml)){
}else{
	die('Enter a valid email');
	}
	
	
	
if(is_an_address($address)){
}else{
	die('Enter a valid Address');
	}

if(is_a_name($cty,1)){
}else{
	die('Enter a valid City');
	}



if(is_a_pincode($pinc)){
}else{
	die('Enter a valid Pincode');
	}
	
	if(!is_a_delegate_str($exp_del_str)){
		die('Invalid Delegate Strength');
	}


$md5uniqid = md5(sha1($md5_sha1.time().microtime().$nmi).uniqid());

$sql[] = "
INSERT INTO `reg_mun_school_info`( `reg_sch_name`, `reg_sch_addr`, `reg_sch_city`, `reg_sch_pincd`, `reg_sch_contcc_no`, `reg_sch_alt_contcc_no`, `reg_mun_msc_exp_del_str`, `reg_sch_email`, `reg_sch_hash_rel`) VALUES (
'".$nmi."',
'".$address."',
'".$cty."',
'".$pinc."',
'".$cntcno."',
'".$alcntcno."',
'".$exp_del_str."',
'".$eml."',
'".$md5uniqid."'

)
";





$id_frm= $_POST['id_frm'];
$id_msc= $_POST['id_msc'];
$id_delp= $_POST['id_delp'];
if(!is_numeric($id_frm) || !is_numeric($id_msc) || !is_numeric($id_delp)){
	die('Id Value is not valid');
}



 
 for($xx=1;  $xx <= $id_frm; $xx++){
	 if($xx==1){
		 $hit='';
	 }else{
	$hit = $xx;
	 }


if(is_a_name($_POST['nme_frm'.$hit],1) and is_an_email($_POST['eml_frm'.$hit]) and is_a_contact_no($_POST['cntc_frm'.$hit])){
	
	
	
	$sql[]= "INSERT INTO `reg_mun_mfa_frm`( `reg_mfa_frm_name`, `reg_mfa_frm_email`, `reg_mfa_frm_cntccno`, `rel_hash`) VALUES (

'".$_POST['nme_frm'.$hit]."',
'".$_POST['eml_frm'.$hit]."',
'".$_POST['cntc_frm'.$hit]."',
'".$md5uniqid."'
)";



	
	
}else{
	$error_dump[] = '1';
}

	 
	 
	 
	 
 }
 
 

 
 
 /*
$nme_frm= $_POST['nme_frm'];
$eml_frm= $_POST['eml_frm'];
$cntc_frm= $_POST['cntc_frm'];
$nme_frm2= $_POST['nme_frm2'];
$eml_frm2= $_POST['eml_frm2'];
$cntc_frm2= $_POST['cntc_frm2'];

 */ 
 
  for($yy=1;  $yy <= $id_msc; $yy++){
	 if($yy==1){
		 $hitt='';
	 }else{
	$hitt = $yy;
	 }


if(is_a_name($_POST['nme_msc'.$hitt],1) and is_an_email($_POST['eml_msc'.$hitt]) and is_a_contact_no($_POST['cntc_msc'.$hitt])){
	
	$sql[]= "INSERT INTO `reg_mun_msc`(`reg_mun_msc_name`, `reg_mun_msc_email`, `reg_mun_msc_cntcno`, `rel_hash`) VALUES (

'".$_POST['nme_msc'.$hitt]."',
'".$_POST['eml_msc'.$hitt]."',
'".$_POST['cntc_msc'.$hitt]."',
'".$md5uniqid."'
)";

	
	
	
}else{
	$error_dump[] = '1';
}



	
	 
 }
 /*
 
$nme_msc= $_POST['nme_msc'];
$eml_msc= $_POST['eml_msc'];
$cntc_msc= $_POST['cntc_msc'];
$nme_msc2= $_POST['nme_msc2'];
$eml_msc2= $_POST['eml_msc2'];
$cntc_msc2= $_POST['cntc_msc2'];

 */ 
 
 for($zz=1;  $zz<= $id_delp; $zz++){
	 if($zz==1){
		 $hiit='';
	 }else{
	$hiit = $zz;
	 }


if(is_a_name($_POST['name_delp'.$hiit],1) and is_a_name($_POST['com_delp'.$hiit],1) ){
	
	
	$sql[]= "INSERT INTO `reg_delegates`( `reg_dele_name`, `reg_dele_comm`, `rel_hash`) VALUES (

'".$_POST['name_delp'.$hiit]."',
'".$_POST['com_delp'.$hiit]."',
'".$md5uniqid."'
)";

	
	
}else{
	$error_dump[] = '1';
}



 }
 /*
$name_delp= $_POST['name_delp'];
$com_delp= $_POST['com_delp'];
$name_delp2= $_POST['name_delp2'];
$com_delp2= $_POST['com_delp2'];
$name_delp3= $_POST['name_delp3'];
$com_delp3= $_POST['com_delp3'];

 */ 
$subm_bt= $_POST['subm_bt']; 

$country_pref_1= $_POST['country_pref_1'];
$country_pref_2= $_POST['country_pref_2'];
$country_pref_3= $_POST['country_pref_3'];


$sql[]= "INSERT INTO `reg_country_pref`( `country_pref1`, `country_pref2`, `country_pref3`, `rel_hash`) VALUES (

'".$country_pref_1."',
'".$country_pref_2."',
'".$country_pref_3."',
'".$md5uniqid."'
)";






if(count($error_dump) == 0){
	
	foreach($sql as $query){
		if($conn->query($query)){
			$sqlcon[] = 1;
		}else{
			echo '<br>'.$conn->error.'<br>';
		}
	}
}


if(count($sql) == count($sqlcon)){
	header('Location: reg_main.php?regs=vguh00');
	echo '<br><h3>You have Registered Succesfully</h3>';
}else{
	echo '<br><br><br>'.(count($sql)-count($sqlcon)) .'is/are left';
}
	

	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}
	}else{die('Form_Field Mising');}

}else{die('Form_Field Mising');}
 /*

 */ 











}




}else{die('Hash_Missing');}



 ?>