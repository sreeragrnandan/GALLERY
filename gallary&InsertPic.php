<!--
* Lightbox Gallery v1.0 (https://kawshar.github.io/lightboxgallery/)
* Copyright 2017 Kawshar Ahmed
* Licensed GPLv3 https://www.gnu.org/licenses/gpl-3.0.en.html
-->
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Manage Gallery</title>
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
$del=0;
if(isset($_GET['astatus']))
{
  $id=$_GET['astatus'];
  $data="update photos set status='Active' where id=$id";
  $result=mysqli_query($conn,$data);
}
if(isset($_GET['dstatus']))
{
  $id=$_GET['dstatus'];
  $data="update photos set status='Deactive' where id=$id";
  $result=mysqli_query($conn,$data);
}
if(isset($_GET['delete']))
{
  $id=$_GET['delete'];
  $del="select * from photos where id=$id";
  $result=mysqli_query($conn,$del);
  if($dlerow=mysqli_fetch_assoc($result))
  {
    unlink($dlerow['photos']);
    unlink($dlerow['thumb']);
    $sql="delete from photos where id=$id";
    mysqli_query($conn,$sql);
  }
  else
  {
    $del=1;
  }

}
$a=$_GET['a_id'];
if(isset($_POST["submit"]))
include "upload2.php";
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
<div style="float: left;">
&emsp; 
<a href="gallary&InsertPic.php?a_id=<?php echo $a;?>&delete=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to DELETE ?')">delete</a>
<?php if($row['status']=='Active') { ?>
<a href="gallary&InsertPic.php?a_id=<?php echo $a;?>&dstatus=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to Deactivate ?')">deactive</a>
<?php } else{ ?>
<a href="gallary&InsertPic.php?a_id=<?php echo $a;?>&astatus=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to Activate ?')">activate</a>
<?php }?>
<br>    <a class="lightboxgallery-gallery-item" target="_blank" href="<?php echo $row['name'];?>" data-title=" " data-alt="Noah Hinton"> 

        <div>
            <img src="<?php echo $row['thumb'];?>" title="Rahul Anil" alt="<?php echo $row['thumb'];?>" >
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title"></span>
            </div>
          </div>
        </a>
      
</div>
          <?php 
          }
    }
  
?>


        
    </div>
  </div>
  <?php
  if($del==1)
  echo "file not found";
  $del=0;
  ?>

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
