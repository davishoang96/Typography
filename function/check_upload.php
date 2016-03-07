<?php
if(isset($_POST['submit'])){
    if($_FILES['file']['name'] != NULL){

        if($_FILES['file']['type'] == "application/zip"
        || $_FILES['file']['type'] == "application/x-rar-compressed"){

            if($_FILES['file']['size'] > 10485760){
              ?>
              <script type="text/javascript">
                alert('File size is larger than 10MB');
                window.location.href = "../upload.php";
              </script>
              <?php
            }else{

                $path = "../uploaded/";
                $tmp_name = $_FILES['file']['tmp_name'];
                $name = $_FILES['file']['name'];
                $type = $_FILES['file']['type'];
                $size = $_FILES['file']['size'];
                // Upload file
                move_uploaded_file($tmp_name,$path.$name);

                ?>
                  <script type="text/javascript">
                    alert("File Uploaded! Thank you");
                    window.location.href = "../upload.php";
                  </script>
                <?php

           }
        }else{

           ?>
           <script type="text/javascript">
             alert('Invalid file type');
             window.location.href = "../upload.php";
           </script>
           <?php
        }
   }else{
     ?>
     <script type="text/javascript">
       alert('Please choose your file');
       window.location.href = "../upload.php";
     </script>
     <?php
   }
}
?>
