<?php
    include('config.php');
    $data="select * from album";
    $result=mysqli_query($conn,$data);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif+Caption" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- google fonts -->
</head>

<body>
    <div class="header">
        <div class="container">
            <h1>Christina Home Gallery</h1>
            <h2>Where you can find beautiful pictures of our work filled with godness</h2>
        </div>
    </div>
    <img src="img\f2.jpg" alt="background" class="frame1">
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel" style="position: absolute;z-index: 101;right:2.6%;top:4.3%;width: 300px;height: 200px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 imgframe" src="img\St Christina home.JPG" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgframe" src="img\S 4 SCH.JPG" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 imgframe" src="img\s1.JPG" alt="Third slide">
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------------------- -->
    <div class="container">

        <h1 style="font-family: 'Lobster', cursive;letter-spacing: .25em;">ALBUMs</h1>
        <?php
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
             
            ?>
        <div class="floatcontainer">
            <a href="insideGal.php?a_id=<?php echo $row['id']; ?>">
                <div class="card album" style="max-width: 15rem;">
                    <img class="card-img-top" src="<?php echo $row['thumb'];?>" alt="Card image cap">
                    <div class="card-body">
                    <p class="card-text">
                    <span  style="font-family: 'Pacifico', cursive;font-size: 150%;"><?php echo $row['name'];?></span>
                    <br>
                    <span  style="font-family: 'Dancing Script', cursive;font-size: 26px;"><?php echo $row['caption']; ?></span>
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
    <!-- --------------------------------------------------------------------------------------- -->
    </div>
    <div style="bottom: 0;position: absolute;">
    <a href="adminGal1.php">ADMIN</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>

</body>
</html>
