
  <?php  
    $root_dir = $_SERVER['DOCUMENT_ROOT'];
  ?>

<div class='surrounding-padding-col container' style="display: flex;">
 <div class="row large-up-4 small-up-2 gallery">
 
  <?php 
  // Image extensions
  $image_extensions = array("png","jpg","jpeg","gif");

  // Target directory
  $dir = $root_dir . '/images/spieler/eric/';
  if (is_dir($dir)){

    //echo "$dir";
 
   if ($dh = opendir($dir)){
    $count = 1;

    // Read files
    while (($file = readdir($dh)) !== false){

     if($file != '' && $file != '.' && $file != '..'){
 
      // Thumbnail image path
      //$thumbnail_path = "/images/spieler/eric/".$file;

      // Image path
      $image_path = '/images/spieler/eric/' . $file;
 
      //$thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
      $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

      // Check its not folder and it is image file
      if(!is_dir($image_path) && in_array($image_ext,$image_extensions)){
   ?>

       <!-- Image -->
       <div class="featured-image-block column">
         <a href="<?php echo $image_path; ?>">
          <img src="<?php echo $image_path; ?>" alt="" title=""/>
         </a>
       </div>
       <!-- --- -->
       <?php

       // Break
       if( $count%4 == 0){
       ?>
         <!--<div class="clear"></div>-->
       <?php 
       }
       $count++;
      }
     }
 
    }
    closedir($dh);
   }
  } 
 ?>
 </div>
</div>