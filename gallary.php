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
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <div class="header" style="  background: #333 url(ch.jpg) no-repeat 50% 50%;background-size: cover;">
    <div class="container">
      <h1>Christna Home Gallery</h1>
      <h2>Childline</h2>
    </div>
  </div>

  <div class="container">
      <div class="lightboxgallery-gallery clearfix">

    <?php
  $all_files = glob("img/*.*");
  for ($i=0; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
      $supported_format = array('gif','jpg','jpeg','png');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_format))
          {?>
        <a class="lightboxgallery-gallery-item" target="_blank" href="<?php echo $image_name;?>" data-title="<?php echo $image_name;?>" data-alt="Noah Hinton" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="<?php echo $image_name;?>" title="Rahul Anil" alt="<?php echo $image_name;?>"  style="width: 297.5px;height: 297.5px;">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Rahul Anil</span>
            </div>
          </div>
        </a>
        
          <?php } else {
              continue;
          }
    }
?>


        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/noah-hinton.jpg" data-title="Noah Hinton" data-alt="Noah Hinton" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/noah-hinton_thumb.jpg" title="Noah Hinton" alt="Noah Hinton">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Noah Hinton</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/ness-joshua.jpg" data-title="Ness Joshua" data-alt="Ness Joshua" data-desc="A lightweight jQuery lightbox gallery plugin.">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/ness-joshua_thumb.jpg" title="Ness Joshua" alt="Ness Joshua">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Ness Joshua</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/matheus-ferrero.jpg" data-title="Matheus Ferrero" data-alt="Matheus Ferrero" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/matheus-ferrero_thumb.jpg" title="Matheus Ferrero" alt="Matheus Ferrero">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Matheus Ferrero</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/meyer-aidan.jpg" data-title="Meyer Aidan" data-alt="Meyer Aidan" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/meyer-aidan_thumb.jpg" title="Meyer Aidan" alt="Meyer Aidan">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Meyer Aidan</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/felix-russell-saw.jpg" data-title="Felix Russell Saw" data-alt="Felix Russell Saw" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/felix-russell-saw_thumb.jpg" title="Felix Russell Saw" alt="Felix Russell Saw">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Felix Russell Saw</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/joshua-ness.jpg" data-title="Joshua Ness" data-alt="Joshua Ness" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/joshua-ness_thumb.jpg" title="Joshua Ness" alt="Joshua Ness">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Joshua Ness</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/brooke-cagle.jpg" data-title="Brooke Cagle" data-alt="Brooke Cagle" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/brooke-cagle_thumb.jpg" title="Brooke Cagle" alt="Brooke Cagle">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Brooke Cagle</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/emile-seguin.jpg" data-title="Emile Seguin" data-alt="Emile Seguin" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/emile-seguin_thumb.jpg" title="Emile Seguin" alt="Emile Seguin">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Emile Seguin</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/caleb-frith.jpg" data-title="Caleb Frith" data-alt="Caleb Frith" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/caleb-frith_thumb.jpg" title="Caleb Frith" alt="Caleb Frith">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Caleb Frith</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/bewakoof-com-official.jpg" data-title="Bewakoof Com Official" data-alt="Bewakoof Com Official" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/bewakoof-com-official_thumb.jpg" title="Bewakoof Com Official" alt="Bewakoof Com Official">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Bewakoof Com Official</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/aidan-meyer.jpg" data-title="Aidan Meyer" data-alt="Aidan Meyer" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/aidan-meyer_thumb.jpg" title="Aidan Meyer" alt="Aidan Meyer">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Aidan Meyer</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/allef-vinicius.jpg" data-title="Allef Vinicius" data-alt="Allef Vinicius" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/allef-vinicius_thumb.jpg" title="Allef Vinicius" alt="Allef Vinicius">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Allef Vinicius</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/austin-mabe.jpg" data-title="Austin Mabe" data-alt="Austin Mabe" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/austin-mabe_thumb.jpg" title="Austin Mabe" alt="Austin Mabe">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Austin Mabe</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/aidan-doe.jpg" data-title="Aidan Doe" data-alt="Aidan Doe" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/aidan-doe_thumb.jpg" title="Aidan Doe" alt="Aidan Doe">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Aidan Doe</span>
            </div>
          </div>
        </a>
        <a class="lightboxgallery-gallery-item" target="_blank" href="https://kawshar.github.io/lightboxgallery/alexandru-zdrobau.jpg" data-title="Alexandru Zdrobau" data-alt="Alexandru Zdrobau" data-desc="">
          <div>
            <img src="https://kawshar.github.io/lightboxgallery/alexandru-zdrobau_thumb.jpg" title="Alexandru Zdrobau" alt="Alexandru Zdrobau">
            <div class="lightboxgallery-gallery-item-content">
              <span class="lightboxgallery-gallery-item-title">Alexandru Zdrobau</span>
            </div>
          </div>
        </a>
    </div>
  </div>

  <div class="footer">
    <div class="container">
      &copy; <a target="_blank" href="https://github.com/kawshar">Kawshar Ahmed</a> | Images from <a target="_blank" href="https://unsplash.com/">Unsplash</a>
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