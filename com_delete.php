<?php
 include("db/config.php");

 $id=$_GET['del'];

 $query=mysqli_query($con, "delete from comment where id='$id'");
 if ($query) {
 	echo "<script>alert('Comment Deleted');</script>";
 	echo("<script> location.href = 'comments.php?page=1'; </script>");
 }
 else
 {
 	echo "<script>alert('Try again');</script>";
 }
?>