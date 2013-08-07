<html>
<head>
<style type="text/css">
</style>
<title>shared.</title>
</head>
<body>

<?php include('inc/header.php'); ?>

<p style="font-size:40px;">Upload onto shared.</p>
<p>OK, Let's get started:</p>

<p>Upload a file:</p>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload_file.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="15728640" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" /><br/>
    <input type="submit" value="Upload File" />
</form>
<p style="font-size:14pt;color:grey;"><i>File Size Limit: 15mb</i></p>

<hr/>
<p>Search for a file:</p>

<?php
//Search form here
?>
<form name="search-form" id="search-form" method="post" action="search.php" enctype="multipart/form-data" style="height: 103px"> 

<input name="search" size="60" type="search" id="search" value="Filename in here - e.g. MyFile1 or MyFile1.jpg"/> 

<input tabindex="2" accesskey="l" type="submit" name="cmdsearch" value="Search" /> 
</form>




























<?php include('inc/footer.php'); ?>
