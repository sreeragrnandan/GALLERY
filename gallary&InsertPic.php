<!--
* Lightbox Gallery v1.0 (https://kawshar.github.io/lightboxgallery/)
* Copyright 2017 Kawshar Ahmed
* Licensed GPLv3 https://www.gnu.org/licenses/gpl-3.0.en.html
-->
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lightbox Gallery Demo</title>
  <link rel="stylesheet" href="dist/css/lightboxgallery-min.css">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script2.js"></script>
<!------- Including CSS File ------>
<link rel="stylesheet" type="text/css" href="style4.css">
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<?php

include('config.php');
$a=$_GET['a_id'];
$data="select * from album where id=$a";
$result=mysqli_query($conn,$data);
$row=mysqli_fetch_assoc($result);
$head=$row['pic'];
?>
  <div class="header" style="  background: #333 url(<?php echo $head;?>) no-repeat 50% 50%;background-size: cover;">
    <div class="container">
      <h1>Christna Home Gallery</h1>
      <h2><?php echo $row['name'];?></h2>
    </div>
  </div>

  <div class="container">
      <div class="lightboxgallery-gallery clearfix">

    <?php

$data="select * from photos where album_id=$a";
$result=mysqli_query($conn,$data);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
?>
        <a class="lightboxgallery-gallery-item" target="_blank" href="<?php echo $row['name'];?>" data-title="<?php echo $row['name'];?>" data-alt="Noah Hinton" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="<?php echo $row['thumb'];?>" title="Rahul Anil" alt="<?php echo $row['thumb'];?>" >
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Rahul Anil</span>
            </div>
          </div>
        </a>
        
          <?php 
          }
    }
  
?>


        
    </div>
  </div>

  <div class="footer">
  
  </div>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="dist/js/lightboxgallery-min.js"></script>
  <script type="text/javascript">
  jQuery(function($) {
    $(document).on('click', '.lightboxgallery-gallery-item', function(event) {
      event.preventDefault();
      $(this).lightboxgallery({
        showCounter: true,
        showTitle: true,
        showDescription: true
      });
    });
  });
  </script>

</body>
</html>
