<?php
$conn = mysqli_connect("localhost","root","","file");


$targetDirectory = "./";
$targetFile = $targetDirectory.basename($_FILES["fileToUpload"]["name"]);
$uploadSuccess = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$targetFile);

if ($uploadSuccess){
 echo "file uploaded successfully";
}
else
{
echo "failed";
}
$query = "INSERT INTO `tb-file` VALUES ('','$targetFile')";
mysqli_query($conn,$query)

?>