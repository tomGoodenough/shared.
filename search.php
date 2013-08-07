<html>
<head>
<style type="text/css">
</style>
<title>shared.</title>
</head>
<body>

<?php include('inc/header.php'); ?>

 <p style="font-size:24pt;color:grey;|">Search Results:</p>
<?php

$search = $_POST['search'];
$search = strtolower($search);

if ($search==NULL)
{

echo "<p>Please enter a search query.</p>";
}
else{




foreach (glob("files/$search*") as $filename) {
echo "Is this your file? Click to open it: <a href='http://www.shared.co.uk/$filename'>$filename</a>";




echo "<br />";

echo "<br />";
echo '<b>To download and save: Windows, right click and click Save Target As. Mac, right click and click Save Link As.</b>';
echo "<br />";
echo "<p>Why not bookmark this page, to get the file when you need it?</p>";

echo "<br />";




}

}

?>
<a style="color:grey;"href="upload.php">Go Back</a>

<br/><br/>






















<?php include('inc/footer.php'); ?>
