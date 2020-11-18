<?php
include "config.php";
if(isset($_POST['btnSubmit']))
{
	if ( isset($_FILES["upload_image"]) && $_FILES["upload_image"]['name'] !=='') {

            //if there was an error uploading the file
        if ($_FILES["upload_image"]["error"] > 0) {
            $output= "Return Code: " . $_FILES["upload_image"]["error"] . "<br />";

        }
        else {

                 //if file already exists
           /*  if (file_exists("../upload/" . $_FILES["upload_image"]["name"])) {
            $output = $_FILES["upload_image"]["name"] . " already exists. ";
             }
             else {*/
			 $check = getimagesize($_FILES["upload_image"]["tmp_name"]);
                   if($check !==false)
				   {
            $pro_image = $_FILES["upload_image"]["name"];
            move_uploaded_file($_FILES["upload_image"]["tmp_name"], "upload/$pro_image");
			// $res=$obj->update_profile_pic($pro_image,$_SESSION['email']);
			echo "<b>Image Uploaded Successfully</b>";
			 //echo "<script>window.location='upload_image.php'</script>";
				   }
				   else {
					   $output= "<b>Selected file is not an image</b> <br />"; 
				   }	
        }
		
     } else {
             $output= "No file selected <br />";
     }	 	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Image upload in php
</title>
<script src="./scripts/jquery-3.4.1.min.js"></script>
 <link href="./style/bulma-0.7.4/css/bulma.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
<div class="column is-8 is-offset-2">
<div class="box">
<h1 class="title has-text-centered">Upload Image Using PHP</h1>
<form method="post" enctype="multipart/form-data">
<img src="" id="image_upload_preview"/>
<input type="file" name="upload_image" id="upload_image" accept=".png" />
<input type="submit" name="btnSubmit" id="btnSubmit" class="button is-info" value="Submit" />
</form>
</div>
</div>
</div>
<script>
$(document).ready(function(){
	$("#upload_image").change(function(){
		readURL(this);
	});
});
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image_upload_preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</body>
</html>
