<?php
  
    $file_path = "uploads/";
     
    $file_path = $file_path . basename( $_FILES['FILE1']['name']);
    if(move_uploaded_file($_FILES['FILE1']['tmp_name'], $file_path)) {
        echo "success";
    } else{
        echo "fail";
    }
 ?>