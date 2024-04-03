<?php
 include("db/config.php");

 $id=$_GET['del'];

 $query=mysqli_query($con, "delete from subscribe_tbl where id='$id'");
 if ($query) {
 	echo "<script>alert('Subscriber Deleted');</script>";
 	echo("<script> location.href = 'subs.php?page=1'; </script>");
 }
 else
 {
 	echo "<script>alert('Try again');</script>";
 }
?>