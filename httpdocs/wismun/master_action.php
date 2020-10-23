<?php 
if(include('db_auth.php')){
	
}else{
	die('Please Reload');
}

if(isset($_POST['h_hh']) and ctype_alnum($_POST['h_hh'])){
	$sql = "SELECT *,(select count(lk_val) from mun_gallery_likes where lk_valid =1 and `lk_id_rel_mun_gall_id` = ma.mun_id) as likes FROM `mun_gallery` ma  
where img_valid = 1 and md5(sha1(mun_id)) = '".$_POST['h_hh']."'";


$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
	$mun_id = $row['mun_id'];

		$ins = "INSERT INTO mun_gallery_likes (  lk_id_rel_mun_gall_id)
		 VALUES ('".$mun_id."')";
		
		if ($conn->query($ins) === TRUE) {
			echo ($row['likes'] + 1 ) ;
		} else {
			die('Reload');
		}
		
} else {
    echo "0 results";
}

}?>