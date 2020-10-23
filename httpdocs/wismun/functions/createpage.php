<?php 
if(isset($_POST['page_nm'])){
	$file = 'assets/create_page_temp.php';
$newfile = '../'.$_POST['page_nm'].'.php';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}else{echo 'Job Done !';}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<input type="text" placeholder="type new page name" name="page_nm" />.php
<input type="submit" />
</form>

</body>
</html>