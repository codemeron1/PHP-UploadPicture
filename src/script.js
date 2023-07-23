document.querySelector("#frmUploadPictures1").addEventListener('submit', form_submit);
document.querySelector("#btnUpload").addEventListener('click', button_click);



function form_submit(e) {
  e.preventDefault();
  $.ajax({
    url: "upload.php",
    type: "POST",
    data: new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    success: function (data) {
      alert("success: ", data);
    },
    error: function (data) {
      console.log("error: ", data);
    }
  });
}

function button_click(e) {
  e.preventDefault();
  let form = document.querySelector("#frmUploadPictures2");
  $.ajax({
    url: "upload.php",
    type: "POST",
    data: new FormData(form),
    contentType: false,
    cache: false,
    processData: false,
    success: function (data) {
      alert("success: ", data);
    },
    error: function (data) {
      console.log("error: ", data);
    }
  });
}