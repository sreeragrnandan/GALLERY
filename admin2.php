
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>admin gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="1/script.js"></script>
<!------- Including CSS File ------>
<link rel="stylesheet" type="text/css" href="1/style.css">
</head>

<body>
    <div class="header" style="padding:10px;">
        <div class="container">
            <h1>Christina Home Gallery</h1>
            <h2>Admin page</h2>
        </div>
    </div>

    <!--------------------------------------- -->
    <div class="container">

<h1 style="font-family: 'Lobster', cursive;letter-spacing: .25em;">ALBUMs</h1>

<div class="floatcontainer">
<h2>Multiple Image Upload Form</h2>
<form enctype="multipart/form-data" action="" method="post">
First Field is Compulsory. Only JPEG,PNG,JPG type Image Uploaded. Image Size Should Be Less Than 100KB.
<div id="filediv"><input name="file[]" type="file" id="file"/></div>
<input type="button" id="add_more" class="upload" value="Add More Files"/>
<input type="submit" value="Upload File" name="submit" id="upload" class="upload"/>
</form>
<!------- Including PHP Script here ------>
<?php include "1/upload.php"; ?>

</div>
</div>




    <!--------------------------------------- -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
        

</body>

</html>