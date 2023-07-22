<?php
     if ($_FILES['userImage']) {
          //
          print_r($_FILES['userImage']);
          foreach ($_FILES['userImage']['name'] as $image) {
               echo "$image \n";
          }

          // if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
          //      $sourcePath = $_FILES['userImage']['tmp_name'];
          //      $targetPath = "images/" . $_FILES['userImage']['name'];
          //      move_uploaded_file($sourcePath, $targetPath);
          //      // echo $sourcePath;
          // }
     }
?>