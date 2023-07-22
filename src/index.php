<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP AJAX Image Upload</title>
     <script src="jquery.js"></script>
</head>

<body>
     <form id="image-upload-form">
          <input type="file" name="userImage[]"  multiple>
          <input type="submit" value="Upload">
     </form>

     <script type="text/javascript">
     $(document).ready(function(e) {
          $("#image-upload-form").on('submit', (function(e) {
               e.preventDefault();
               $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                         $("#targetLayer").html(data);
                    },
                    error: function(data) {
                         console.log("error");
                         console.log(data);
                    }
               });
          }));
     });
     </script>
</body>

</html>