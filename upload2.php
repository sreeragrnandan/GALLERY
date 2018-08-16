<?php
if (isset($_POST['submit'])) {

$j = 0;     // Variable for indexing uploaded image.
$target_path = "uploads/"; 
$folderPath= "uploads/";// Declaring Path for uploaded images
  /*  */ 
    

function imageResize($imageResourceId,$width,$height) {


    //height and width of thumb nale
    $targetWidth =297.5;

    $targetHeight =297.5;



    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);

    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);



    return $targetLayer;

}





for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
/* --------------------------------------------------------------- */

$fileNewName = md5(uniqid()); 
    echo count($_FILES['file']['name']);
/* --------------------------------------------------------------- */
         // Extensions which are allowed.


$ext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);

$file = $_FILES['file']['tmp_name'][$i]; 
$sourceProperties = getimagesize($file);
$imageType = $sourceProperties[2];
        //creating tumbnale and uploading photo

        switch ($imageType) {



            case IMAGETYPE_PNG:

                $imageResourceId = imagecreatefrompng($file); 

                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);

                imagepng($targetLayer,$folderPath."thumb/". $fileNewName. "_thumbnail.". $ext);

                break;



            case IMAGETYPE_GIF:

                $imageResourceId = imagecreatefromgif($file); 

                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);

                imagegif($targetLayer,$folderPath. $fileNewName. "_thumbnail.". $ext);

                break;



            case IMAGETYPE_JPEG:

                $imageResourceId = imagecreatefromjpeg($file); 

                $targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);

                imagejpeg($targetLayer,$folderPath."thumb/". $fileNewName. "_thumbnail.". $ext);
                $img=$folderPath."thumb/". $fileNewName. "_thumbnail.". $ext;
                break;

                
      


            default:

                echo "Invalid Image type.";

                exit;

                break;

        }












        $validextensions = array("jpeg", "jpg", "png","JPG");   


        $ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
        $file_extension = end($ext); // Store extensions in the variable.
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (     // Approx. 100kb files can be uploaded.
in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
// If file moved to uploads folder.?>
<?php
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}

}
?>
