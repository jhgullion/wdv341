<?php
$target_dir = "pdfs/";
$target_file = $target_dir . basename($_FILES["newPdf"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "pdf" ) {
  echo "Sorry, only PDF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["newPdf"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["newPdf"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>