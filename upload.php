<?php
if(isset($_POST['submit']))
{
$file=$_FILES['file'];
print_r($file)
$fileName=$_FILES['file']['name'];
$fileName=$_FILES['file']['name'];
$fileName=$_FILES['file']['name'];
$fileName=$_FILES['file']['name'];
$fileExt=explode('.', $fileName);
$fileActualExt=strtolower(end($fileExt));
$allowed=array('jpg','jpeg','png','pdf');
}