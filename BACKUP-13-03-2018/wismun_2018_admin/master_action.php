<?php 
include('db_auth.php');
#md5(md5(sha1(sha1(md5(md5($boxrw['mod_id']))))))
if(isset($_POST['tab_inact']) or isset($_POST['tab_act'])){
	#
	if(isset($_POST['tab_inact'])){
		if(isset($_POST['hash_inc'])){
			if(ctype_alnum($_POST['hash_inc'])){
				 $updtsql = "
    UPDATE `web_module` SET `status`= 0 WHERE md5(md5(sha1(sha1(md5(md5(mod_id)))))) = '".$_POST['hash_inc']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: mods.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#
#_______________
	#
	if(isset($_POST['tab_act'])){
		if(isset($_POST['hash_ac'])){
			if(ctype_alnum($_POST['hash_ac'])){
				 $updtsql = "
    UPDATE `web_module` SET `status`= 1 WHERE md5(md5(sha1(sha1(md5(md5(mod_id)))))) = '".$_POST['hash_ac']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: mods.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#



}
if(isset($_POST['edit_mod'])){
	if(isset($_POST['hash_ei'])){
		if(ctype_alnum(trim($_POST['hash_ei']))){
			#
			if(($_POST['edit_mod_sub'] == 1) or ($_POST['edit_mod_sub'] ==0 )){
			}else{
				die('mod_submod can only posses value 1 or 0');
			}
			
			if(is_numeric($_POST['edit_mod_pos'])){
			}else{
				die('position can only posses numeric values');
			}
			
			$updt_mod_sql = "UPDATE `web_module` SET 
			`module_long_name` = '".$_POST['edit_mod_lngnme']."' ,
			`module_short_name` = '".$_POST['edit_mod_shrtnme']."' ,
			`module_icon` = '".$_POST['edit_mod_icon']."' ,
			`module_pos` = '".$_POST['edit_mod_pos']."' ,
			`module_sub_mod_exsits` = '".$_POST['edit_mod_sub']."'
			 
			WHERE md5(md5(sha1(sha1(md5(md5(mod_id)))))) = '".trim($_POST['hash_ei'])."'";
				if($conn->query($updt_mod_sql)){
				header('Location: mods.php');
				}else{
				die($conn->error);
				}
			#
		}else{
			die('Invalid Mod Hash');
		}
	}else{
		die("Provide a checksum");
	}
}
if(isset($_POST['mod_add'])){
	
	if(($_POST['mod_sub_menu'] == 1) or ($_POST['mod_sub_menu'] ==0 )){
			}else{
				die('mod_submod can only posses value 1 or 0');
			}
			
			if(is_numeric($_POST['mod_pos'])){
			}else{
				die('position can only posses numeric values');
			}
	
	$inssql = "INSERT INTO `web_module`( `module_short_name`, `module_long_name`, `module_icon`, `module_sub_mod_exsits`, `module_pos`) VALUES (
	'".$_POST['mod_lnk_to']."',
	'".$_POST['mod_long_name']."',
	'".$_POST['mod_icon']."',
	'".$_POST['mod_sub_menu']."',
	'".$_POST['mod_pos']."'
	)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: mods.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
  
}
if(isset($_POST['page_inact']) or isset($_POST['page_act'])){
	if(isset($_POST['page_inact'])){
		if(isset($_POST['___hop']) and ctype_alnum(trim(strtolower($_POST['___hop'])))){
			$updtsql = "
    UPDATE `links_o_pages` SET `lo_valid`= 0 WHERE md5(md5(sha1(sha1(md5(md5(lo_id)))))) = '".$_POST['___hop']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: page.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
		}else{
			die('Atleast give something to check ');
		}
	}
	if(isset($_POST['page_act'])){
		if(isset($_POST['___hop']) and ctype_alnum(trim(strtolower($_POST['___hop'])))){
			$updtsql = "
    UPDATE `links_o_pages` SET `lo_valid`= 1 WHERE md5(md5(sha1(sha1(md5(md5(lo_id)))))) = '".$_POST['___hop']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: page.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
		}else{
			die('Atleast give something to check ');
		}
	}
	
}
if(isset($_POST['edit_page'])){
	if(isset($_POST['_hash']) and ctype_alnum(trim(strtolower($_POST['_hash'])))){
		
			
			$updt_pg_sql = "UPDATE `links_o_pages` SET 
			`lo_page_display_name` = '".$_POST['edit_pg_dname']."' ,
			`pg_box_txt` = '".$_POST['edit_pg_btxt']."' ,
			`lo_page_bg_img` = '".$_POST['edit_pg_img']."' 
						 
			WHERE md5(md5(sha1(sha1(md5(lo_id))))) = '".trim($_POST['_hash'])."'";
				if($conn->query($updt_pg_sql)){
				header('Location: page.php');
				}else{
				die($conn->error);
				}
	}else{
		die('Invalid hash');
	}
}
if(isset($_POST['pg_add'])){
	
	
	
	$inssql = "INSERT INTO `links_o_pages`(`lo_page_url`, `lo_page_name`, `lo_page_display_name`, `pg_box_txt`, `lo_page_bg_img`) VALUES(
	'".$_POST['pg_url_name']."',
	'".$_POST['pg_link_name']."',
	'".$_POST['pg_disp_name']."',
	'".$_POST['pg_banner']."',
	'".$_POST['pg_img_src']."'
	)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: page.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
}
if(isset($_POST['edit_user'])){
	if(isset($_POST['hash_chkr'])){
		if(ctype_alnum(trim($_POST['hash_chkr']))){
			#
		
			if(is_numeric($_POST['edit_us_mobno'])){
			}else{
				die('MobNo can only posses numeric values');
			}
			
			$updt_usr_sql = "UPDATE `adm_usrs_inf` SET 			
`adm_password`='".md5($_POST['edit_us_pw'])."',
`adm_pass_words`='".$_POST['edit_us_pw']."',
`adm_u_f_name`='".$_POST['edit_us_fname']."',
`adm_u_l_name`='".$_POST['edit_us_lname']."',
`adm_u_tabs`='".$_POST['edit_us_tabs']."',
`adm_contc_no`='".$_POST['edit_us_mobno']."',
`adm_email`='".$_POST['edit_us_email']."' 
			 
			WHERE md5(md5(sha1(sha1(md5(md5(adm_u_id)))))) = '".trim($_POST['hash_chkr'])."'";
				if($conn->query($updt_usr_sql)){
				header('Location: users.php?rel');
				}else{
				die($conn->error);
				}
			#
		}else{
			die('Invalid User Hash');
		}
	}else{
		die("Provide a checksum");
	}
}	
if(isset($_POST['add_user'])){
	
	
			if(isset($_POST['usr_uss_name'])){
				if(trim($_POST['usr_uss_name']) == '-'){
					$username = uniqid('CA_');
				}else{
					$username = $_POST['usr_uss_name'];
				}
			}else{
				die('User name Please');
			}
			
			if(isset($_POST['usr_pw'])){
				if(trim($_POST['usr_pw']) == '-'){
					$passw = uniqid('PW_');
				}else{
					$passw = $_POST['usr_pw'];
				}
			}else{
				die('pw Please');
			}
			
			if(is_numeric($_POST['usr_c_cno'])){
			}else{
				die('Mob not valid');
			}
			if(is_numeric($_POST['usr_validtill'])){
			}else{
				die('Validtill no valid');
			}
			
			
			if(isset($_POST['usr_validtill'])){
				if(trim($_POST['usr_validtill']) == '0'){
					$validt = '0';
				}else{
					$validt = time()+ ($_POST['usr_validtill']*60);
					}
			}else{
				die('VT Please');
			}
			
			
	
	$inssql = "INSERT INTO `adm_usrs_inf`(`adm_adm_no`, `adm_username`, `adm_password`, `adm_pass_words`, `adm_u_f_name`, `adm_u_l_name`, `adm_u_access`, `adm_u_tabs`, `adm_contc_no`, `adm_email`, `adm_validtill`) VALUES (
	'".$_POST['usr_admno']."',
	'".$username."',
	'".md5($passw)."',
	'".$passw."',
	'".$_POST['usr_f_name']."',
	'".$_POST['usr_l_name']."',
	'".$_POST['usr_acc']."',
	'".$_POST['usr_tabs']."',
	'".$_POST['usr_c_cno']."',
	'".$_POST['usr_email']."',
	'".$validt."'
		)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: users.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
  
}
if(isset($_POST['add_sys_user'])){
	
	
			
					$usern = uniqid('SCA_');
					$password = uniqid('SPW_');
			
				if(is_numeric($_POST['sys_usr_validtill'])){
			}else{
				die('Validtill no valid');
			}
			
			
			if(isset($_POST['sys_usr_validtill'])){
				if(trim($_POST['sys_usr_validtill']) == '0'){
					$validtill = '0';
				}else{
					$validtill = time()+ ($_POST['sys_usr_validtill']*60);
					}
			}else{
				die('VT Please');
			}
			
	
	$inssql = "INSERT INTO `adm_usrs_inf`(`adm_adm_no`, `adm_username`, `adm_password`, `adm_pass_words`, `adm_u_f_name`, `adm_u_l_name`, `adm_u_access`, `adm_u_tabs`, `adm_contc_no`, `adm_email`, `adm_validtill`) VALUES (
	'000',
	'".$usern."',
	'".md5($password)."',
	'".$password."',
	'SYSf_".rand(29235,30453485093850)."',
	'SYSl_".rand(29235,30453485093850)."',
	'".$_POST['sys_usr_acc']."',
	'".$_POST['sys_usr_tabs']."',
	'0000000000',
	'non@none.om',
	'".$validtill."'
		)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: users.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
  
}
if(isset($_POST['addrs_inact']) or isset($_POST['addrs_act'])){
	#
	if(isset($_POST['addrs_inact'])){
		if(isset($_POST['__ha_d'])){
			if(ctype_alnum($_POST['__ha_d'])){
				 $updtsql = "
    UPDATE `mun_addrsls` SET `ads_valid`= 0 WHERE md5(md5(sha1(sha1(md5(md5(ads_id)))))) = '".$_POST['__ha_d']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: addrs.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#
#_______________
	#
	if(isset($_POST['addrs_act'])){
		if(isset($_POST['__ha'])){
			if(ctype_alnum($_POST['__ha'])){
				 $updtsql = "
    UPDATE `mun_addrsls` SET `ads_valid`= 1 WHERE md5(md5(sha1(sha1(md5(md5(ads_id)))))) = '".$_POST['__ha']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: addrs.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#



}
if(isset($_POST['ads_edit'])){
	if(isset($_POST['ads_hash'])){
		if(ctype_alnum(trim($_POST['ads_hash']))){
			#
			
			$updt_addrs_sql = "UPDATE `mun_addrsls` SET 
`ads_img_src`='".$_POST['ads_edit_img']."',
`ads_author`='".$_POST['ads_edit_author']."',
`ads_desc`='".$_POST['ads_edit_code']."',
`ads_page_for`='".$_POST['ads_edit_linkedto']."'			 
			WHERE md5(md5(sha1(sha1(md5(md5(ads_id)))))) = '".trim($_POST['ads_hash'])."'";
				if($conn->query($updt_addrs_sql)){
				header('Location: addrs.php');
				}else{
				die($conn->error);
				}
			#
		}else{
			die('Invalid Addrs Hash');
		}
	}else{
		die("Provide a checksum");
	}
}
if(isset($_POST['adrs_add'])){
	$fl_name = 'ADDRS_'.uniqid().'_'.basename($_FILES["com_img_src"]["name"]);

$target_file = '../sbsmun/include/images/'.$fl_name;
$todb= 'include/images/'.$fl_name;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["adrs_add"])) {
    $check = getimagesize($_FILES["addrs_img_aut"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["addrs_img_aut"]["size"] > 1500000) {
    echo "Sorry, your file is too large.(Not More than 1.5 Mega Byte)";
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
    if (move_uploaded_file($_FILES["addrs_img_aut"]["tmp_name"], $target_file)) {
        ##
		
		
		$inssql = "INSERT INTO `mun_addrsls`(`ads_col_type`, `ads_img_src`, `ads_author`, `ads_desc`, `ads_page_for`) VALUES (
	'6',
	'".$target_file."',
	'".$_POST['addrs_long_name']."',
	'".$_POST['adrs_desc']."',
	'".$_POST['drs_linkedto']."'
	)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: addrs.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
	
		
		##
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	
  
}
if(isset($_POST['make_all_com_bg_active'])){
	$updtsql = "
    UPDATE `mun_committees` SET `com_bg_vis`= 1 WHERE 1;
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: com.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
}
if(isset($_POST['make_all_com_bg_inactive'])){
	$updtsql = "
    UPDATE `mun_committees` SET `com_bg_vis`= 0 WHERE 1;
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: com.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
}
if(isset($_POST['com_make_inac']) or isset($_POST['com_make_ac'])){
	#
	if(isset($_POST['com_make_inac'])){
		if(isset($_POST['ha_com'])){
			if(ctype_alnum($_POST['ha_com'])){
				 $updtsql = "
    UPDATE `mun_committees` SET `com_valid`= 0 WHERE md5(md5(sha1(sha1(md5(md5(com_id)))))) = '".$_POST['ha_com']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: com.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#
#_______________
	#
	if(isset($_POST['com_make_ac'])){
		if(isset($_POST['ha_com'])){
			if(ctype_alnum($_POST['ha_com'])){
				 $updtsql = "
    UPDATE `mun_committees` SET `com_valid`= 1 WHERE md5(md5(sha1(sha1(md5(md5(com_id)))))) = '".$_POST['ha_com']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: com.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#



}
if(isset($_POST['edit_com'])){
	if(isset($_POST['h_com'])){
		if(ctype_alnum(trim($_POST['h_com']))){
			#com_edit_desc
		
			if(is_numeric($_POST['com_edit_bg'])){
			}else{
				die('BG can only posses numeric values');
			}

			if(is_numeric($_POST['com_edit_is_home'])){
			}else{
				die('HOME can only posses numeric values');
			}

			
			$updt_usr_sql = "UPDATE `mun_committees` SET 
`com_long_name`='".$_POST['com_edit_long_name']."',
`com_short_name`=NULL,
`com_img_src`='".$_POST['com_edit_img']."',
`com_is_on_home`='".$_POST['com_edit_is_home']."',
`com_background_guide_src`='".$_POST['com_edit_bg_src']."',
`com_desc`='".$_POST['com_edit_desc']."',
`com_bg_vis`='".$_POST['com_edit_bg']."'			 
			WHERE md5(md5(sha1(sha1(md5(md5(com_id)))))) = '".trim($_POST['h_com'])."'";
				if($conn->query($updt_usr_sql)){
				header('Location: com.php');
				}else{
				die($conn->error);
				}
			#
		}else{
			die('Invalid com Hash');
		}
	}else{
		die("Provide a checksum");
	}
}	
if(isset($_POST['com_add'])){
$fl_name = 'COM_'.uniqid().'_'.basename($_FILES["com_img_src"]["name"]);

$target_file= '../wismun/include/images/'.$fl_name;
$todb = 'include/images/'.$fl_name;

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["com_add"])) {
    $check = getimagesize($_FILES["com_img_src"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["com_img_src"]["size"] > 1500000) {
    echo "Sorry, your file is too large.(Not More than 1.5 Mega Byte)";
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
    if (move_uploaded_file($_FILES["com_img_src"]["tmp_name"], $target_file)) {
        ##
		
		
		$inssql = "INSERT INTO `mun_committees`(`com_long_name`, `com_img_src`, `com_is_on_home`, `com_background_guide_src`, `com_desc`, `com_bg_vis`, `com_valid`) VALUES (
	'".$_POST['com_long_name']."',
	'".$todb."',
	'".$_POST['com_isonhome']."',
	'".$_POST['com_bgg_src']."',
	'".$_POST['com_desc']."',
	'".$_POST['com_bgg_vis']."',
	'".$_POST['com_is_valid']."'
	)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
	  header('Location: com.php');
    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
	
		
		##
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	
  
}
if(isset($_POST['make_all_news_active'])){
	$updtsql = "
    UPDATE `mun_newsletters` SET `nl_valid`= 1 WHERE 1;
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: news.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
}
if(isset($_POST['make_all_news_inactive'])){
	$updtsql = "
    UPDATE `mun_newsletters` SET `nl_valid`= 0 WHERE 1;
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: news.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
}
if(isset($_POST['news_make_inac']) or isset($_POST['news_make_ac'])){
	#
	if(isset($_POST['news_make_inac'])){
		if(isset($_POST['hash_news'])){
			if(ctype_alnum($_POST['hash_news'])){
				 $updtsql = "
    UPDATE `mun_newsletters` SET `nl_valid`= 0 WHERE md5(md5(sha1(sha1(md5(md5(nl_id)))))) = '".$_POST['hash_news']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: news.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#
#_______________
	#
	if(isset($_POST['news_make_ac'])){
		if(isset($_POST['hash_news'])){
			if(ctype_alnum($_POST['hash_news'])){
				 $updtsql = "
    UPDATE `mun_newsletters` SET `nl_valid`= 1 WHERE md5(md5(sha1(sha1(md5(md5(nl_id)))))) = '".$_POST['hash_news']."';
    ";
    if ($conn->query($updtsql) === TRUE) {
      header('Location: news.php');
    }
    else {
      echo "Error updating record: " . $conn->error;
    }
	
	
			}else{
				die('Invalid Hash');
			}
		}else{
			die("Please Provide Checksum");
		}
	}
	#



}
if(isset($_POST['edit_news'])){
	if(isset($_POST['__hn'])){
		if(ctype_alnum(trim($_POST['__hn']))){
			#com_edit_desc
		
			if(is_numeric($_POST['nl_edit_active'])){
				if($_POST['nl_edit_active'] == '0'){
					
				}
				
				if($_POST['nl_edit_active'] == '1'){
				##
				
				$updt_nl_sql = "UPDATE `mun_newsletters` SET 
`nl_ul_active`= 0  WHERE 1";
				if($conn->query($updt_nl_sql)){
				header('Location: news.php');
				}else{
				die($conn->error);
				}
				##	
				}
				
				
			}else{
				die('Active can only posses numeric values');
			}


			
			$updt_nl_sql = "UPDATE `mun_newsletters` SET 
`nl_ul_active`='".$_POST['nl_edit_active']."',
`nl_short_name`='".$_POST['nl_edit_name']."',
`nl_desc`='".$_POST['nl_edit_desc']."'
			WHERE md5(md5(sha1(sha1(md5(md5(nl_id)))))) = '".trim($_POST['__hn'])."'";
				if($conn->query($updt_nl_sql)){
				header('Location: news.php');
				}else{
				die($conn->error);
				}
			#
		}else{
			die('Invalid Hash');
		}
	}else{
		die("Provide a checksum");
	}
}	
if(isset($_POST['upld_rnd_fle'])){
	if(isset($_FILES['anyfl'])){
		##
		$fl_name = 'RAND_'.uniqid().'_'.basename($_FILES["anyfl"]["name"]);
$target_file = '../wismun/uploads/'.md5($fl_name).'.'.pathinfo($fl_name, PATHINFO_EXTENSION);
$todb= 'uploads/'.md5($fl_name).'.'.pathinfo($fl_name, PATHINFO_EXTENSION);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["upld_rnd_fle"])) {
    $check = is_file($_FILES["anyfl"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["anyfl"]["tmp_name"], $target_file)) {
        ##
		
		
		$inssql = "INSERT INTO `img_rand_upld`( `rup_img_src`, `rup_dnt`) VALUES (
	'".$todb."|".$target_file."',
	'".time()."'	)";
	
	
	if ($conn->query($inssql) === TRUE) {
      
      #
echo $todb;    }
    else {
      die( "Error: " . $inssql . "<br>" . $conn->error);
    }
	
		
		##
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	
		##
	}
}

if(isset($_POST['upld_gall']) and isset($_POST['day'])){
	$rp = count($_FILES['trip']['name']);
	$target_dir = "../wismun/gallery/";
	$target_dir_db = "gallery/";
$uploadOk = 1;


	for($rr =0;$rr< $rp;$rr++){
	##
	$mat = uniqid().'_'.md5(sha1(md5(sha1(time().microtime())))).'.'.pathinfo(basename($_FILES["trip"]["name"][$rr]),PATHINFO_EXTENSION);
	$target_file = $target_dir .$mat;
	$target_filedb =$target_dir_db.$mat;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["day"])) {
    $check = getimagesize($_FILES["trip"]["tmp_name"][$rr]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["trip"]["size"][$rr] > 2000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["trip"]["tmp_name"][$rr], $target_file)) {
      $ingal= "INSERT INTO mun_gallery (mun_day, imgsrc)
 VALUES ('".$_POST['day']."', '".$target_filedb."')";

if ($conn->query($ingal) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $ingal . "<br>" . $conn->error;
}

		
		
    } else {
        die( "Sorry, there was an error uploading your file.");
    }
}
##	
	
	}
}

?>
