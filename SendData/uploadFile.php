<?php
$statusMsg ='';
//file upload  path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath =$targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST['submit']) && !empty($_FILES["file"]["name"] )){
$allowTypes = array('jpg','png','jpeg','gif','pdf');
  
    if(in_array($fileType,$allowTypes)){
      
        if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFilePath)){
         $statusMsg="The file $fileName has been upladed";          
      }else{
          $statusMsg ="Sorry, there was an error uplading your file.";
      }
    }else{
        $statusMsg="Sorry,only JPEG,JPEG,PNG,GIF & PDF files are allowed to upload.";
    }
}else{
    $statusMsg = "Please select a file to upload";
}  
echo $statusMsg;


?>