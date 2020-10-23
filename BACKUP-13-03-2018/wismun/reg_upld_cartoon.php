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
if(isset($_POST['cr_name'])){
if(isset($_POST['cr_dob_yr'])){
if(isset($_POST['cr_dob_mt'])){
if(isset($_POST['dob_d'])){
if(isset($_POST['schl'])){
if(isset($_POST['cntcno'])){
if(isset($_POST['eml'])){
if(isset($_POST['journ_exp'])){
if(isset($_POST['id_munex'])){
if(isset($_POST['mun_munex'])){
if(isset($_POST['ins_munex'])){
if(isset($_POST['posi_munex'])){
if(isset($_POST['awr_munex'])){
if(isset($_POST['md5_sha1'])){
if(isset($_POST['subm_bt'])){

if(isset($_FILES['attachment'])){
if(isset($_FILES['attachment2'])){
if(isset($_FILES['attachment22'])){
if(isset($_FILES['attachment11'])){



$cr_name = $_POST['cr_name'];#
$cr_dob_yr = $_POST['cr_dob_yr'];#
$cr_dob_mt = $_POST['cr_dob_mt'];#
$dob_d = $_POST['dob_d'];#
$schl = $_POST['schl'];
$cntcno = $_POST['cntcno'];
$eml = $_POST['eml'];
$journ_exp = $_POST['journ_exp'];

$md5_sha1 = $_POST['md5_sha1'];
$subm_bt = $_POST['subm_bt'];






$sql = array();
$error_dump=array();
$sqlcon = array();

if(is_a_name($cr_name,1)){
}else{
	die('Enter valid Name');
	}

	if(is_date($dob_d,$cr_dob_mt,$cr_dob_yr)){
}else{
	die('Enter a valid Date of Birth');
	}

if(is_a_name($schl,1)){
}else{
	die('Enter valid Name');
	}



if(is_a_contact_no($cntcno)){
}else{
	die('Enter a valid Contact number');
	}
	
	
if(is_an_email($eml)){
}else{
	die('Enter a valid email');
	}
	


if(is_writeup($journ_exp)){
	
}else{
	die('Enter a valid WriteUp1');
	}
	


$att1 = $_FILES['attachment'];
$att2 = $_FILES['attachment11'];
$att3 = $_FILES['attachment2'];
$att4 = $_FILES['attachment22'];
			#upld 1
			$target_dir = "uploads/";
			$target_file1 = $target_dir.md5(basename($att1["name"]).time().microtime().uniqid().sha1(time())).basename($att1["name"]);
			$uploadOk = 1;
			
			
			$imageFileType = pathinfo($target_file1,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
				$check = getimagesize($att1["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			// Check if file already exists
			if (file_exists($target_file1)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size 1Mb
			if ($att1["size"] > 1000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($att1["tmp_name"], $target_file1)) {
				} else {
					die( "Sorry, there was an error uploading your file.");
				}
			}
			
			
			#upld1.////.
			
			
			
			#upld 2
			$target_file2 = $target_dir.md5(basename($att2["name"]).time().microtime().uniqid().sha1(time())).basename($att2["name"]);
			$uploadOk = 1;
			
			
			$imageFileType = pathinfo($target_file2,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
				$check = getimagesize($att2["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			// Check if file already exists
			if (file_exists($target_file2)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($att1["size"] > 1000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($att2["tmp_name"], $target_file2)) {
				} else {
					die( "Sorry, there was an error uploading your file.");
				}
			}
			
			
			#upld2.////.
			
			
			
			
			
			
			
			#upld 3
			$target_file3 = $target_dir.md5(basename($att3["name"]).time().microtime().uniqid().sha1(time())).basename($att3["name"]);
			$uploadOk = 1;
			
			
			$imageFileType = pathinfo($target_file3,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
				$check = getimagesize($att3["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			// Check if file already exists
			if (file_exists($target_file3)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($att3["size"] > 1000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($att3["tmp_name"], $target_file3)) {
				} else {
					die( "Sorry, there was an error uploading your file.");
				}
			}
			
			
			#upld3.////.
			
			
			
			
			
			
			
			#upld 4
			$target_file4 = $target_dir.md5(basename($att4["name"]).time().microtime().uniqid().sha1(time())).basename($att4["name"]);
			$uploadOk = 1;
			
			
			$imageFileType = pathinfo($target_file4,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
				$check = getimagesize($att4["tmp_name"]);
				if($check !== false) {
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
			// Check if file already exists
			if (file_exists($target_file4)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($att4["size"] > 1000000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($att4["tmp_name"], $target_file4)) {
				} else {
					die( "Sorry, there was an error uploading your file.");
				}
			}
			
			
			#upld4.////.
			
			
			
			
			
			
			
			
			
			












$md5uniqid = md5(sha1($md5_sha1.time().microtime().$cr_name).uniqid());

$sql[] = "
INSERT INTO `cart_master`( `cart_pi_name`, `cart_pi_dob_y`, `cart_pi_dob_m`, `cart_pi_dob_d`, `cart_pi_schl`, `cart_pi_cntcn`, `cart_pi_eml`, `cart_pi_exp_i_jounr`, `cart_img_cari_1_src`, `cart_img_cari_2_src`, `cart_img_cari_3_src`, `cart_img_cari_4_src`, `hash_rel`) VALUES (
'".$cr_name."',
'".$cr_dob_yr."',
'".$cr_dob_mt."',
'".$dob_d."',
'".$schl."',
'".$cntcno."',
'".$eml."',
'".$journ_exp."',
'".$target_file1."',
'".$target_file2."',
'".$target_file3."',
'".$target_file4."',
'".$md5uniqid."'
)
";




$id_munex = $_POST['id_munex'];
$mun_munex = $_POST['mun_munex'];
$ins_munex = $_POST['ins_munex'];
$posi_munex = $_POST['posi_munex'];
$awr_munex = $_POST['awr_munex'];

if(!is_numeric($id_munex)){
	die('Id Value is not valid');
}



 
 for($xx=1;  $xx <= $id_munex; $xx++){
	 if($xx==1){
		 $hit='';
	 }else{
	$hit = $xx;
	 }


if(is_a_name($_POST['mun_munex'.$hit],1) and is_a_name($_POST['ins_munex'.$hit],1) and is_a_name($_POST['posi_munex'.$hit],1) and is_a_name($_POST['awr_munex'.$hit],1)){
	
	
	
	$sql[]= "INSERT INTO `cart_munex`(`cmnx_mun`, `cmnx_ins`, `cmnx_pos`, `cmnx_awards`, `cmnx_rel_hash`) VALUES (

'".$_POST['mun_munex'.$hit]."',
'".$_POST['ins_munex'.$hit]."',
'".$_POST['posi_munex'.$hit]."',
'".$_POST['awr_munex'.$hit]."',
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
	

	}else{die('Form_Field Mising1');}
	}else{die('Form_Field Mising2');}
	}else{die('Form_Field Mising3');}
	}else{die('Form_Field Mising4');}
	}else{die('Form_Field Mising5');}
	}else{die('Form_Field Mising6');}
	}else{die('Form_Field Mising7');}
	}else{die('Form_Field Mising11');}
	}else{die('Form_Field Mising22');}
	}else{die('Form_Field Mising122');}
	}else{die('Form_Field Mising121');}
	}else{die('Form_Field Mising123');}
	}else{die('Form_Field Mising434');}
	}else{die('Form_Field Mising13234');}
	}else{die('Form_Field Misingvcsdz');}
	}else{die('Form_Field Mising3frevfrf3r');}
	}else{die('Form_Field Mising24v b');}
	}else{die('Form_Field Mising3gbt4');}


}else{die('Form_Field Mising');}
 /*

 */ 











}




}else{die('Hash_Missing');}



 ?>