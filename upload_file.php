<html>
<head>
<style type="text/css">
</style>
<title>shared.</title>
</head>
<body>

<?php include('inc/header.php'); ?>


<?php


// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$b = time ();

$uploaddir = 'files/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$uploadfile = strtolower($uploadfile);

// split string into an array called , the delimiter is dot (.)
			$pieces = explode(".", $_FILES["userfile"]["name"]);
			// extract file extension, which is the last element in array
			$file_extension = $pieces[1];
			// check to see if this is a php or phtml file
			if($file_extension == "php" || $file_extension == "phtml") {
			
			die('You cannot upload that file type.<br/><br/><a href="upload.php">Back</a>');
			
			

			
			} else {
				
				
				
			


		


if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	echo '<p>Your file was uploaded. Click here to see it:</p>';

echo "<a href='$uploadfile'>$uploadfile</a>";
echo "<br/>";
echo "<br/>";
echo '<b>To download and save: Windows, right click and click Save Target As. Mac, right click and click Save Link As.</b>';


    echo "<br/><br/>Powered by shared.";
    
    }
     else {
   
   echo 'There was an error during the file upload.  Please try again.'; // It failed :(.
	
}

}


?>

<br/><br/>

<?php include('inc/footer.php'); ?>
