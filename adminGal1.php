<?php    
    //connecting database
    include('config.php');
    
    if(isset($_GET['a']))
    {
        $a=$_GET['a'];
        $sqli="select Folder from album where id='$a'";
        $del=mysqli_query($conn,$sqli);
        $row1=mysqli_fetch_assoc($del);
        $f=$row1['Folder'];
        /*  FUNCTION FOR DELETING AN ALBUM */
        function emptyDir($dir) {
            if (is_dir($dir)) {
                $scn = scandir($dir);
                foreach ($scn as $files) {
                    if ($files !== '.') {
                        if ($files !== '..') {
                            if (!is_dir($dir . '/' . $files)) {
                                unlink($dir . '/' . $files);
                            } else {
                                emptyDir($dir . '/' . $files);
                                rmdir($dir . '/' . $files);
                            }
                        }
                    }
                }
            }
        }
        
        $dir="album/$f";
        emptyDir($dir);
        rmdir($dir);
        /*  FUNCTION FOR DELETING AN ALBUM */

        $sql="delete from album where id='$a'";
        if(mysqli_query($conn,$sql)){
          echo "";
        }

        $sql="delete from photos where album_id='$a'";
        if(mysqli_query($conn,$sql)){
            echo "";
          }

    }
?>
<?php

    /* -----------------------Editing album--------------------------------- */
    if(isset($_POST['edit']))
{
    $a=$_POST["albumName"];
    $b=$_POST["message"];
    $id=$_POST['edit'];
$data="update album set name='$a',caption='$b' where id='$id'";
$result=mysqli_query($conn,$data);
$s=0;
if($result){
$s=1;
}
//header("Location:adminGal1.php");
}

    /* -----------------------Editing album--------------------------------- */
if(isset($_POST["submit"])) {

    /* -----------------------creating album--------------------------------- */
    $name=$_POST['albumName'];
    //making album folder
    $fname=time();
    mkdir("album/$fname"); 
    mkdir("album/$fname/thumb");

    if(!$conn)
    {
        die("connet faild".mysqli_connect_error());
    }
    $id="";
    $an=$_POST["albumName"];
    /* $b=$_POST["picture"]; */
    $cap=$_POST["message"];




//inserting images
    
    if(is_array($_FILES)) {

        $file = $_FILES['picture']['tmp_name']; 
        $sourceProperties = getimagesize($file);
        

        $fileNewName = $name;//renaming image

        $folderPath = "album/$fname/";

        $ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);

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



        move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);
        
    }
    //inserting album details to database
    $data="insert into album values('$id','$fname','$an','$cap','album/$fname/$name.$ext','$img')";
    $result=mysqli_query($conn,$data);
}



function imageResize($imageResourceId,$width,$height) {


    //height and width of thumb nale
    $targetWidth =238;

    $targetHeight =149;



    $targetLayer=imagecreatetruecolor($targetWidth,$targetHeight);

    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$targetWidth,$targetHeight, $width,$height);



    return $targetLayer;

}

    /* -----------------------creating album !--------------------------------- */
?>

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- google fonts -->
    <style>
.tooltip {
    position: relative;
    display: inline-block;
    opacity: 1;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
.tooltip .tooltiptext {
    opacity: 0;
    transition: opacity 1s;
}

.tooltip:hover .tooltiptext {
    opacity: 1;
}
</style>
</head>

<body>
    <div class="header" style="padding:10px;">
        <div class="container">
            <h1>Christina Home Gallery</h1>
            <h2>Admin page</h2>
        </div>
    </div>
    <div class="container" style="margin-top: 10px">
        <div class="row" <?php if(isset($_GET['b'])){ echo 'style="display:none"';}?>>
            <div class="col" align="center">
                <!-- buttons to create or modify the albums -->
                <button type="button" name="add" class="btn btn-success" style="background-color:  rgba(25, 211, 87, 0.5);width: 100%;height: 100px;border-radius: 20px" 
                onclick="makeNew()">ADD ALBUM</button>
            </div>
            <div class="col" align="center">
                <button type="button" name="modify" class="btn btn-success" onclick="modify()"
                 style="background-color:  rgba(70, 100, 233, 0.5);width: 100%;height: 100px;border-radius: 20px">MODYFY EXESTING</button>
            </div>
                <!-- buttons to create or modify the albums !-->
        </div>
    </div>
    <!--------------------------------------- -->
    <div class="container" id="modify" style="display: none;">

<h1 style="font-family: 'Lobster', cursive;letter-spacing: .25em;">ALBUMs</h1>
<?php

    $data="select * from album";
    $result=mysqli_query($conn,$data);
    if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
     
    ?>
<div class="floatcontainer" >
    <a href="gallary&InsertPic.php?a_id=<?php echo $row['id']; ?>">
        <div class="card album" style="max-width: 15rem;">
            <img class="card-img-top" src="<?php echo $row['thumb'];?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">
                <span  style="font-family: 'Pacifico', cursive;font-size: 150%;"><?php echo $row['name'];?></span>
                    <br>
                    <span  style="font-family: 'Dancing Script', cursive;font-size: 26px;"><?php echo $row['caption']; ?></span>
                    <br>
                    <a href="adminGal1.php?a=<?php echo $row['id']; ?>" onclick="return confirm(' Do you want to delete?')"><div class="tooltip"><i class="fas fa-minus-circle fa-2x"></i>
                    <span class="tooltiptext">DELETE ALBUM</span></div></a>
                    
                    <a href="adminGal1.php?b=<?php echo $row['id']; ?>" > <div class="tooltip"><i class="fas fa-edit fa-2x"></i>
                    <span class="tooltiptext">EDIT DETAILS</span></div></a>
                    
                    <a href="gallary&InsertPic.php?a_id=<?php echo $row['id']; ?>"><div class="tooltip"><i class="fas fa-images fa-2x"></i>
                    <span class="tooltiptext">EDIT PHOTOS</span></div></a>
                </p>
            </div>
        </div>
    </a>
</div>
        <?php
            }
            }
        ?>

</div>


    <!--------------------------------------- -->

    <!-- album making form -->
    <?php
    if(isset($_GET['b']))
    {
        $id=$_GET['b'];
    $data="select * from album where id=$id";
    $result=mysqli_query($conn,$data);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    }
    }
    ?>
    <div align="center" id="new">
        <div class="card" style="width: 25rem;margin:20px;">
            <img class="card-img-top" src="<?php if(isset($_GET['b'])){ echo $row['pic'];} else { echo 'img/album.jpg';}?> "alt="Card image cap" id="blah" >
            <div class="card-body">
            <form class="makeAlbum" action="adminGal1.php" method="post" enctype="multipart/form-data" value="<?php if(isset($_GET['b'])){ echo $row['pic'];} else { echo 'img/album.jpg';}?> ">
              <input type="text" placeholder="ALBUM NAME" name="albumName" style="width: 300px;height: 50px;" value="<?php if(isset($_GET['b'])){ echo $row['name'];} else { echo '';}?>" required>
              <br>
              <div class="container" style="margin-top:10px">
                  <div class="row"  <?php if(isset($_GET['b'])){ echo 'style="display:none"';}?>>
                      <div class="col-8" style="padding:0px">
              UPLOAD TITLE IMAGE :
              </div>
              <div class="col-4" style="padding:0px;" align="left">
              <input type="file" name="picture" style="width:50px;height:5px;" id="myFile" onchange="readURL(this);" <?php if(isset($_GET['b'])){ echo "";}else{ echo"required";} ?> >
              </div>
              </div>
              </div>
              <p class="card-text"> <B> <?php if(isset($_GET['b'])){ echo "EDIT";} else{echo "ADD";} ?> DISCRIPTION </B>
              <textarea name="message" rows="5" cols="40" style="line-height: 100%;align-items: left;">
              <?php if(isset($_GET['b'])){ echo $row['caption'];}?></textarea>
              </p>
            <?php  if(isset($_GET['b'])){  ?>
                <button type="submit" class="btn btn-primary" style="margin-left:10px" name="edit" value="<?php echo $row['id'];?>" />EDIT ALBUM</button>
            <?php  }else{ ?>
              <button type="submit" class="btn btn-primary" style="margin-left:10px" name="submit" value="Submit" />MAKE ALBUM</button>
              <?php  }?>
            </form>
            </div>
          </div>
    </div>
    <!-- album making form !-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
        <script>
            /* function to display album image */
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        /* function to display album image */
        </script>
        <script>
            /* functions for displaing the the choosen section */
             function makeNew() {
			document.getElementById('new').style.display='block';
            document.getElementById('modify').style.display='none';
        }
        function modify() {
			document.getElementById('new').style.display='none';
            document.getElementById('modify').style.display='block';
        }

            /* functions for displaing the the choosen section !*/
        </script>

</body>

</html>