<?php
include('db_auth.php');
if(isset($_POST['nme_frm'])){
if(isset($_POST['eml_frm'])){
if(isset($_POST['sbj_frm'])){
if(isset($_POST['msg_frm'])){
if(isset($_POST['m_lassh1_hsh'])){
if(isset($_POST['subm_bt'])){
	
?>
<?php
   



$p_name = $_POST['nme_frm'];
$p_email = $_POST['eml_frm'];
$msg_subj = $_POST['sbj_frm'];
$msg= $_POST['msg_frm'];
$toeml = 'anonymous.code.anonymous@gmail.com';
$hash=$_POST['m_lassh1_hsh'];

$qqu = 'select to_eml from email_config';
$qqu = $conn->query($qqu);
if($qqu->num_rows ==1){
	$qqurw = $qqu->fetch_assoc();
	$toeml = $qqurw['to_eml'];	
}




$hashsql = "SELECT * FROM mail_rec where ml_hsh = '".$hash."'";
$hashres = $conn->query($hashsql);

if ($hashres->num_rows >0) {
die('Cant send same mail more than once');
} else {



$noerrsql = "INSERT INTO `mail_rec`(`ml_hsh`,`ml_from_name`, `ml_from_email`, `ml_to_email`, `ml_subj`, `ml_content`, `ml_timestamp_sent`,`error_msg`) VALUES (
 '".$hash."',
 '".$p_name."',
 '".$p_email."',
'".$toeml."',
 '".$msg_subj."',
 '".$msg."',
 '".time()."',
 '-None-'
)";

if ($conn->query($noerrsql) === TRUE) {
    header('Location: index.php');
} else {
    die ("Error: " . $noerrsql . "<br>" . $conn->error);
}


	
	



}


}
}
}
}
}
}

?>