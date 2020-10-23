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
	if(isset($_POST['jr_name'])){
if(isset($_POST['jr_dob_yr'])){
if(isset($_POST['jr_dob_mt'])){
if(isset($_POST['jr_day_o_b'])){
if(isset($_POST['jr_cntcno'])){
if(isset($_POST['jr_eml'])){
if(isset($_POST['jr_exp'])){
if(isset($_POST['jr_id_munex'])){
if(isset($_POST['jr_mun_munex'])){
if(isset($_POST['jr_ins_munex'])){
if(isset($_POST['jr_posi_munex'])){
if(isset($_POST['jr_awr_munex'])){
if(isset($_POST['jr_opt_agnds_wr'])){
if(isset($_POST['jr_rep_sim_intpl'])){
if(isset($_POST['jr_insrt_writing'])){
if(isset($_POST['md5_sha1'])){
if(isset($_POST['subm_bt'])){
 
 $jr_name = $_POST['jr_name'];
$jr_dob_yr = $_POST['jr_dob_yr'];
$jr_dob_mt = $_POST['jr_dob_mt'];
$jr_day_o_b = $_POST['jr_day_o_b'];
$jr_cntcno = $_POST['jr_cntcno'];
$jr_eml = $_POST['jr_eml'];
$jr_exp = $_POST['jr_exp'];
$jr_opt_agnds_wr = $_POST['jr_opt_agnds_wr'];
$jr_rep_sim_intpl = $_POST['jr_rep_sim_intpl'];
$jr_insrt_writing = $_POST['jr_insrt_writing'];




$md5_sha1 = $_POST['md5_sha1'];
$subm_bt = $_POST['subm_bt'];
 

$sql = array();
$error_dump=array();
$sqlcon = array();
 /*
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
 */ 


$md5uniqid = md5(sha1($md5_sha1.time().microtime().$jr_name).uniqid());


if(is_a_name($jr_name,1)){
}else{
	die('Enter a valid Name');
	}
	
	
	if(is_date($jr_day_o_b,$jr_dob_mt,$jr_dob_yr)){
}else{
	die('Enter a valid Date of Birth');
	}


if(is_a_contact_no($jr_cntcno)){
}else{
	die('Enter a valid Contact number');
	}
	
	
if(is_an_email($jr_eml)){
}else{
	die('Enter a valid email');
	}
	


if(is_writeup($jr_exp)){
	
}else{
	die('Enter a valid WriteUp1');
	}
	
	
	if(is_writeup($jr_opt_agnds_wr)){
}else{
	die('Enter a valid WriteUp2');
	}
	
	if(is_writeup($jr_rep_sim_intpl)){
}else{
	die('Enter a valid WriteUp3');
	}
	
	if(is_writeup($jr_insrt_writing)){
}else{
	die('Enter a valid WriteUp4');
	}
	





$sql[] = "
INSERT INTO `jounr_reg_master`( `j_pi_nm`, `j_pi_dob_y`, `j_pi_dob_m`, `j_pi_dom_d`, `j_pi_cnct_no`, `j_pi_eml`, `j_pi_exper_journ`, `j_pi_article_1`, `j_pi_reporting`, `j_pi_writ_smple`, `j_pi_hash`) VALUES (
'".$jr_name."',
'".$jr_dob_yr."',
'".$jr_dob_mt."',
'".$jr_day_o_b."',
'".$jr_cntcno."',
'".$jr_eml."',
'".$jr_exp."',
'".$jr_opt_agnds_wr."',
'".$jr_rep_sim_intpl."',
'".$jr_insrt_writing."',
'".$md5uniqid."'
)
";


$jr_id_munex = $_POST['jr_id_munex'];

$jr_mun_munex = $_POST['jr_mun_munex'];
$jr_ins_munex = $_POST['jr_ins_munex'];
$jr_posi_munex = $_POST['jr_posi_munex'];
$jr_awr_munex = $_POST['jr_awr_munex'];

if(!is_numeric($jr_id_munex) || !is_a_name($jr_mun_munex,1) || !is_a_name($jr_ins_munex,1)|| !is_a_name($jr_posi_munex,1) || !is_a_name($jr_awr_munex,1) ){
	die('Enter Corect Ad Edit Values');
}



 
 for($xx=1;  $xx <= $jr_id_munex; $xx++){
	 if($xx==1){
		 $hit='';
	 }else{
	$hit = $xx;
	 }


if(is_a_name($_POST['jr_mun_munex'.$hit],1) and is_a_name($_POST['jr_ins_munex'.$hit],1) and is_a_name($_POST['jr_posi_munex'.$hit],1) and is_a_name($_POST['jr_awr_munex'.$hit],1)){
	
	
	
	$sql[]= "
	INSERT INTO `jounr_reg_experience`(`j_ex_mun`, `j_ex_ins`, `j_ex_pos`, `j_ex_awards`, `j_ex_rel_hash`) VALUES (
	'".$_POST['jr_mun_munex'.$hit]."',
	'".$_POST['jr_ins_munex'.$hit]."',
	'".$_POST['jr_posi_munex'.$hit]."',
	'".$_POST['jr_awr_munex'.$hit]."',
	'".$md5uniqid."'
		)
	";



	
	
}else{
	$error_dump[] = '1';
}

	 
	 
	 
	 
 }
 
 

 
 




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
 /*

 */ 











}




}else{die('Hash_Missing');}



 ?>