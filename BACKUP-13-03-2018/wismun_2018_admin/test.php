<?php 

	$name = ''; $type = ''; $size = ''; $error = '';
	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}

	if ($_POST) {

    		if ($_FILES["file"]["error"] > 0) {
        			$error = $_FILES["file"]["error"];
    		} 
    		else if (($_FILES["file"]["type"] == "image/gif") || 
			($_FILES["file"]["type"] == "image/jpeg") || 
			($_FILES["file"]["type"] == "image/png") || 
			($_FILES["file"]["type"] == "image/pjpeg")) {

        			$url = 'destination.jpg';

        			$filename = compress_image($_FILES["file"]["tmp_name"], $url, 80);
        			$buffer = file_get_contents($url);

        			/* Force download dialog... */
        			header("Content-Type: application/force-download");
        			header("Content-Type: application/octet-stream");
        			header("Content-Type: application/download");

			/* Don't allow caching... */
        			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

        			/* Set data type, size and filename */
        			header("Content-Type: application/octet-stream");
        			header("Content-Transfer-Encoding: binary");
        			header("Content-Length: " . strlen($buffer));
        			header("Content-Disposition: attachment; filename=".$url);

        			/* Send our file... */
        			echo $buffer;
    		}else {
        			$error = "Uploaded image should be jpg or gif or png";
    		}
	}
?>
<html>
    	<head>
        		<title>Php code compress the image</title>
    	</head>
    	<body>

		<div class="message">
                    	<?php
                    		if($_POST){
                        		if ($error) {
                            		?>
                            		<label class="error"><?php echo $error; ?></label>
                        <?php
                            		}
                        	}
                    	?>
                	</div>
		<fieldset class="well">
            	    	<legend>Upload Image:</legend>                
			<form action="" name="myform" id="myform" method="post" enctype="multipart/form-data">
				<ul>
			            	<li>
						<label>Upload:</label>
			                                <input type="file" name="file" id="file"/>
					</li>
					<li>
						<input type="submit" name="submit" id="submit" class="submit btn-success"/>
					</li>
				</ul>
			</form>
		</fieldset>
	</body>
</html>
<?php
 /*
function resize($newWidth, $targetFile, $originalFile) {

    $info = getimagesize($originalFile);
    $mime = $info['mime'];

    switch ($mime) {
            case 'image/jpeg':
                    $image_create_func = 'imagecreatefromjpeg';
                    $image_save_func = 'imagejpeg';
                    $new_image_ext = 'jpg';
                    break;

            case 'image/png':
                    $image_create_func = 'imagecreatefrompng';
                    $image_save_func = 'imagepng';
                    $new_image_ext = 'png';
                    break;

            case 'image/gif':
                    $image_create_func = 'imagecreatefromgif';
                    $image_save_func = 'imagegif';
                    $new_image_ext = 'gif';
                    break;

            default: 
                    throw Exception('Unknown image type.');
    }

    $img = $image_create_func($originalFile);
    list($width, $height) = getimagesize($originalFile);
    $newHeight = ($height / $width) * $newWidth;
    $tmp = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($tmp, $img, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    if (file_exists($targetFile)) {
            unlink($targetFile);
    }
    $image_save_func($tmp, "$targetFile.$new_image_ext");
}



resize(120, "pr_imgs/compshady.JPG","pr_imgs/1466241999P0001shady.JPG") ;

 */ 


?>
<?php 
 /*
echo basename('IMG.JPG');
$in1 = 'IMG.min.js';
$in2 = 'IMG.jpg';


echo extension($in1);
 */ 
?>
<?php 

 /*
$textToEncrypt = 1;
$encryptionMethod = "AES-256-CBC";  // AES is used by the U.S. gov't to encrypt top secret documents.
$secretHash = "4oi5iehtbirhurwfsd";

$iv = mcrypt_create_iv(16, MCRYPT_RAND);
$encryptedMessage = openssl_encrypt($textToEncrypt, $encryptionMethod, $secretHash, 0, $iv);

//Result
echo 'hash is '.$iv.'_0'.$encryptedMessage.'<br>';
echo "Encrypted: ".$encryptedMessage." <br>Decrypted: ".openssl_decrypt('o9;Ҫ�c�Aɚ�{��=_0/hNezSeEJ7Dobum3IIlNtMA==', $encryptionMethod, $secretHash, 0, $iv);
 */ 
 
 
 /*
function array_has_dupes($array) {
   // streamline per @Felix
   return count($array) !== count(array_unique($array));
}


$pt =array(1=>1,2=>2,3=>3,
);
var_dump( array_has_dupes($pt));

 */ 
/*
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="assets/clone/additional-methods.js"></script>
<script>
//add
$(function () {
  $('#btnAdd').click(function () {
    var num     = $('.clonedInput').length, // Checks to see how many "duplicatable" input fields we currently have
    newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
    newElem = $('#add' + num).clone().attr('id', 'add' + newNum).fadeIn('slow');
    // create the new element via clone(), and manipulate it's ID using newNum value
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
    Below are examples of what forms elements you can clone, but not the only ones.
    There are 2 basic structures below: one for an H2, and one for form elements.
    To make more, you can copy the one for form elements and simply update the classes for its label and input.
    Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    
    newElem.find('.jr_id_munex').attr('id', 'jr_id_munex' + newNum).attr('value', 'jr_id_munex' + newNum).val(newNum);
	
    // examination_passed1 - text
    newElem.find('.or_ids_no').attr('id', 'or_ids_no' + newNum).attr('name', 'or_ids_no').val(newNum);
	//njk
    newElem.find('.or_pr_ppp').attr('id', 'or_pr_ppp' + newNum).attr('name', 'or_pr_ppp' + newNum).val('');
    // collage1 - text
    newElem.find('.or_pr_qty').attr('id', 'or_pr_qty' + newNum).attr('name', 'or_pr_qty' + newNum).val('');
    // board - text
    newElem.find('.pr_id').attr('id', 'pr_id' + newNum).attr('name', 'pr_id' + newNum).val('');
    // year_enter - text
 
    // Insert the new element after the last "duplicatable" input field
    $('#add' + num).after(newElem);
    $('#ID' + newNum + '_title').focus();
    // Enable the "remove" button. This only shows once you have a duplicated section.
    $('#btnDel').attr('disabled', false);
	

    myFunct(newNum);
	// Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
    if (newNum == 20)
    $('#btnAdd').attr('disabled', true).prop('value', "You've reached the limit");
    // value here updates the text in the 'add' button when the limit is reached 
	
  }
  
                    );
  $('#btnDel').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
    if (confirm("Are you sure you wish to remove this section? This cannot be undo."))
    {
      var num = $('.clonedInput').length;
      // how many "duplicatable" input fields we currently have
      $('#add' + num).slideUp('slow', function () {
        $(this).remove();
        // if only one element remains, disable the "remove" button
		  
        if (num -1 === 1)
          $('#btnDel').attr('disabled', true);
        // enable the "add" button
        $('#btnAdd').attr('disabled', false).prop('value', "Add More");
      }
                               );
    }
    return false;
    // Removes the last section you added
  }
                    );
  // Enable the "add" button
  
  $('#btnAdd').attr('disabled', false);
  // Disable the "remove" button
  $('#btnDel').attr('disabled', true);
}
 );

</script>

<form method="post" action="master_action.php">                                     
<div class="clonedInput" id="add1">
    <div class="row">
  <div class="form-group ">
  <div class="col-sm-4">
    <label>Product </label>
    <select name="pr_id" id="pr_id" class="form-control pr_id">
        	<option value="z_0/zO4attTYi9aCLmBOJ7Fb2g==_0/4">
				PS4
				</option><option value="tbPq6HK3Qu+3gBZ7a6OeqQ==_0/4">
				Tester
				</option><option value="/J1g+r26HwEY2gCpYCFcVLQ==_0/4">
				Tv Remote
				</option><option value="z0//BKoMXy6+qwcqBttWIzFbg==_0/4">
				Alienware M18x
				</option><option value="z;_0/ynuMC2L+bSTQ0s5F+EGbhw==_0/4">
				Lamp Type 2
				</option>	</select>
  </div>
</div>
    	
<div class="form-group ">
  <div class="col-sm-4">
    <label>Product Qty</label>
    <input type="number" name="or_pr_qty" class="or_pr_qty form-control" id="or_pr_qty ">
  </div>
</div>
<div class="form-group ">
	<div class="col-sm-4">
		<label>Product PPP</label>
		<input type="number" name="or_pr_ppp" class="or_pr_ppp form-control" id="or_pr_ppp">
	</div>
</div>
<input type="number" name="or_ids_no" class="or_ids_no form-control" id="or_ids_no " value="1" style="display:none">

    </div>
</div><br>

<div class="row">
    <div align="left" class=" col-sm-4 ">
        <div id="addDelButtons">
          <input type="button" class="btn btn-success" value="Add More" id="btnAdd" style="border-radius:10px">
          <input type="button" class="btn btn-danger" value="Remove" id="btnDel" style="border-radius:10px" disabled="disabled">
        </div> 
    </div>
</div> <br>
<br>
  


</form>
<script>
function myFunct(val) {
	if(val ==2){
		y = '';
	}else{
		y =(val-1);
	}
	alert(y);
    var prev = document.getElementById("pr_id"+y);
	var lat = document.getElementById("pr_id"+val);
    lat.remove(prev.selectedIndex);
}
</script>

 */ ?>