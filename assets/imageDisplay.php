<?php
  $all_files = glob("img/*.*");
  for ($i=0; $i<count($all_files); $i++)
    {
      $image_name = $all_files[$i];
      $supported_format = array('gif','jpg','jpeg','png');
      $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
      if (in_array($ext, $supported_format))
          {?>
            <img src="<?php echo $image_name;?>" alt="<?php echo $image_name;?>" width="500px"><br><br>
          <?php } else {
              continue;
          }
    }
?>