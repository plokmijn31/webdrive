<?php
   if(isset(_FILES['uploadedFile'])){errors= array();
      file_name =_FILES['uploadedFile']['name'];
      file_size =_FILES['uploadedFile']['size'];
      file_tmp =_FILES['uploadedFile']['tmp_name'];
      file_type =_FILES['uploadedFile']['type'];
      file_ext=strtolower(end(explode('.',_FILES['uploadedFile']['name'])));
      extensions= array("jpeg","jpg","png");

      if(in_array(file_ext,extensions)=== false){errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if(file_size>200097152) {errors[]='File size must be excately 200 MB';
      }

      if(empty(errors)==true) {
         move_uploaded_file(file_tmp,"upload/".file_name);
         echo "Success";
      }else{
         print_r(errors);
      }
   }
?>
