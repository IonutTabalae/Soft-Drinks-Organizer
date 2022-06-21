<?php
include_once '../database_con.php';
session_start();
if(isset($_POST['upload']) && isset($_SESSION['userId']))
{
    $file = rand(1000,100000)."-".$_FILES['profile-pic']['name'];
    $file_loc = $_FILES['profile-pic']['tmp_name'];
    $file_size = $_FILES['profile-pic']['size'];
    $file_type = $_FILES['profile-pic']['type'];
    $folder="../images/profilePics/";
    /* new file size in KB */
    $new_size = $file_size/1024;
    /* new file size in KB */

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file=str_replace(' ','-',$new_file_name);
    $image_full_name = $final_file;
    if(move_uploaded_file($file_loc,$folder.$final_file)) {
       $sql="UPDATE users SET image='".$image_full_name."' WHERE id=".$_SESSION['userId'];

       mysqli_query($conn,$sql);
       header("location:../profile.php");
       $_SESSION['image']=$image_full_name;
    }
    else {
      header("location:../profile.php?error=tryAgain");
    }
	}
?>
