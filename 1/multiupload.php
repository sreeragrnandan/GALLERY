<!-- refering https://www.formget.com/upload-multiple-images-using-php-and-jquery/ -->
<!DOCTYPE html>
<html>
<head>
<title>Upload Multiple Images Using jquery and PHP</title>
<!-------Including jQuery from Google ------>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script2.js"></script>
<!------- Including CSS File ------>
<link rel="stylesheet" type="text/css" href="style4.css">
<body>
<div id="maindiv">
<div id="formdiv">
<h2>Multiple Image Upload Form</h2>
<form enctype="multipart/form-data" action="" method="post">
<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>

<div id="filediv"><input name="file[]" type="file" id="file"/></div>
<input type="button" id="add_more" class="upload" value="Add More Files"/>
</form>
<!------- Including PHP Script here ------>
<?php include "upload2.php"; ?>
</div>
</div>
</body>
</html>