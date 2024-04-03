 <?php session_start();?>
 <?php
  include('db/config.php');

  if (isset($_POST['add_comment_btn'])) {
$comment_by=$_POST['name'];
    $email=$_POST['email'];
    $postid=$_POST['id'];
    $comment_by=$_POST['comment'];
    $query1=mysqli_query($con,"INSERT INTO com('name','email','postid','comment') values('$name','$email','$id','$comment','$email')");
    if ($query1) {
      echo "<script>alert('Comment added successfully');</script>";
    }
    else
    {
      echo "<script>alert('Sorry.. Try again.!!');</script>";
    }
  }

?>  