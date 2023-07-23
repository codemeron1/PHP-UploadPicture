<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP AJAX Image Upload</title>
</head>

<body>
     <fieldset>
          <legend>USING FORM SUBMIT EVENT</legend>
          <form id="frmUploadPictures1">
               <input type="file" name="userImage[]" multiple>
               <input type="submit" value="Upload">
          </form>
     </fieldset>
     <fieldset>
          <legend>USING BUTTON CLICK EVENT</legend>
          <form id="frmUploadPictures2">
               <input type="file" name="userImage[]" multiple>
               <input type="button" id="btnUpload" value="Upload">
          </form>
     </fieldset>


     <!-- <script type="text/javascript">
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
                              alert("success: ", data);
                         },
                         error: function(data) {
                              console.log("error: ", data);
                         }
                    });
               }));
          });
     </script> -->
     <script src="jquery.js"></script>
     <script src="script.js"></script>
</body>

</html>