
<?php include ("functions/include.php");?>



<?php 
foreach($_POST as $pd =>$ff){
	echo '$'.$pd.' = $_POST[\''.$pd.'\'];<br>';
	 
}


foreach($_FILES as $pd =>$ff){
	echo '$'.$pd.' = $_POST[\''.$pd.'\'];<br>';
	 
}


 ?>











<?php 
 /*
var_dump( is_an_address('A32 SECTOR132 NOIDA- /adf')
);var_dump(is_a_name('\'\'\'\' where 1 in',1)
);var_dump(is_a_name('INDIA',0)
);var_dump(is_a_contact_no('111111111')
);var_dump(is_an_email('ayanzcap@hotmilcom')
);var_dump(is_a_pincode('999999')
);var_dump(is_a_delegate_str('2')
);

$myVar = 'Ayan A h mad';

var_dump(ctype_alpha(str_replace(' ','',$myVar)));
?>
<?php 
# for mob no
$mobNo = trim('9818662200');
if(is_numeric($mobNo)){
	if(strlen($mobNo) == 10){
		var_dump(true);
	}
}else{
	var_dump(false);
}
?>

<?php 
#emial
$email = 'ayanzcap@hotmail.com';
	function validate_email($email) {
    return (preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;
}

var_dump(validate_email($email));
?>
<?php 
#address
$address = 'A-10 B/234 se ctor 17 noida Indai';
$address = str_replace(' ','',$address);
$address = str_replace('-','',$address);
$address = str_replace('/','',$address);
$address = str_replace("'",'\'',$address);
$address = str_replace('>','',$address);
$address = str_replace('<','',$address);


var_dump(ctype_alnum($address));
?>

<?php
#pincode
$pincode = '110001';
if(is_numeric($pincode)){
	if(strlen($pincode) == 6 and ($pincode > 100000 )){
		var_dump(true);
	}else{
		var_dump(false);
	}
}else{
	var_dump(false);
}

?>
<?php
#delegate strenght
$delno = '12';

if(is_numeric($delno) && ($delno < 20)){
	var_dump(true);
}else{
	var_dump(false);
}
 */ 

?>