<?php
     if ($_FILES['userImage']) {
          
          $get_images_name = $_FILES['userImage']['name'];
          $images_name_to_string = implode(";", $get_images_name);
          print_r($images_name_to_string);

          // foreach ($_FILES['userImage']['name'] as $image) {
          //      echo "$image \n";
          // }

          // if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
          //      $sourcePath = $_FILES['userImage']['tmp_name'];
          //      $targetPath = "images/" . $_FILES['userImage']['name'];
          //      move_uploaded_file($sourcePath, $targetPath);
          //      // echo $sourcePath;
          // }
     }
?>