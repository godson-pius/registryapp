<?php
require_once("config.php");
extract($_POST);
$em2= $_COOKIE["id"];

$target_dir = "images/uploads/";
    $target_file = $target_dir.basename($_FILES["profile"]["name"]);
    $uploadOk=1;
    $imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (isset($_POST['submit'])){
    
    //check if image is an image or not
$check = getimagesize($_FILES["profile"]["tmp_name"]);
if($check !== false){
    
    
if($imageFileType!= "jpg" && $imageFileType!= "png" && $imageFileType!= "jpeg" && $imageFileType!= "gif"){
    echo "this image is not allowed";
    $uploadOk = 0;
}
else{
if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)){
    $sql2="UPDATE students SET Profile_pic='$target_file' where Id_no ='$em2'"; 
    $result2 = mysqli_query($link, $sql2);
     $row = mysqli_fetch_array($result2, MYSQLI_ASSOC);

}
}
}
else{
    header("location: dashboard.php?suc=File is not an image please! try again#profile");
    $uploadOk=0;
}



    $sql="UPDATE students SET First_name='$fnames', Last_name='$lnames', Email_address='$emails' where Id_no ='$em2'";

    $result = mysqli_query($link, $sql);

              
                
if($result){
    
    header("location: dashboard.php?suc=Successfuly updated");
}
else{
    header("location: dashboard.php?suc=Failed Please Try Again Later#profile");
}
}
?>