<?php
//include a class
require_once("imageUpload.php");

//how to use a class
$upd = new imageUpload("my_upload");
$upd->setUploadPath("img/");
$upd->setThumbPath("img/thumbnails/");
$upd->setCreateThumbnail(true);
$upd->setThumbDimension(100, 100);
$upd->setMaxFileSize(5242880); //in bytes, around 5mb
$upd->setThumbMode("crop");

$image_uploaded = $upd->uploadImg();

if($image_uploaded !== false){     
    echo("File uploaded");
    //proceed database
}else{
   if($upd->isUploadError()){
      //show errors
      $msg = $upd->getUploadMsg();
      print_r($msg);
   }else echo("Oops! unknown error");   
}
?>