<?php
  session_start();

  if($_SESSION['email'] == "")
  {
    header('location:admin_login.php');
  }
  else
  {
      //no session
  }
   

  include('include/header.php');
?>
<?php 
  include ('db/config.php');
  $id=$_GET['edit']; //echo "<script>alert('$id');</script>";
  $query=mysqli_query($con, "select * from comment where id='$id'");

  while ($row=mysqli_fetch_array($query)) {
    $id=$row['id'];
    $name=$row['name'];
    $mail=$row['mail'];
    $comment=$row['comment'];
   
  }
?>

<div style="margin-left: 16%; width: 100%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">Home</a></li>
      <li class="breadcrumb-item " ><a href="news.php">Comments</a></li>
      <li class="breadcrumb-item active" >Edit Comments</li>
    </ul>
  </div>
  <div style="margin-left: 20%; margin-top: 2%; width:70%; ">

  <form action="com_edit.php" method="post" name="comform" enctype="multipart/form-data" onsubmit="return validateForm();" >
    <h3>Update Comments</h1><hr>
    <div class="form-group">
      <label for="exampleInputEmail1">Name:</label>
      <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email:</label>
      <input type="mail" name="mail" class="form-control" value="<?php echo $mail;?>">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Comment :</label>
      <textarea class="form-control rounded-0" name="comment" rows="6"><?php echo $comment;?></textarea> 
    </div>

  
    
    </div>
    <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>  ">

    <button type="submit" name="update_com_btn" class="btn btn-primary">Update</button>
  </form>

  <script type="text/javascript">
    function validateForm(){
     
      var x=document.forms['comform']['name'].value;
      var y=document.forms['comform']['mail'].value;
      var z=document.forms['comform']['comment'].value;
    
      if(x==""){
      alert('Name must be filled out.');
      return false;
      }
       if(y==""){
      alert('Email must be filled out.');
      return false;
      }
      
       if(z==""){
      alert('Comment must be filled out.');
      return false;
      }
     
    }
</script>
</div>


<?php
 include("include/footer.php");
?>

<?php
  include ('db/config.php');
  
  if(isset($_POST['update_com_btn'])) {
    $id1=$_POST['id'];//echo "<script>alert('$newsid');</script>";
    $name1=$_POST['name'];
    $mail1=$_POST['mail'];
    $comment1=$_POST['comment'];
    

    $query2=mysqli_query($con,"update comment set name='$name1',mail='$mail',comment='$comment1' where id='$id1'");
  
   if($query2) {
      echo("<script> location.href = 'comments.php?page=1'; </script>");
      //echo "<script>alert('..cfsdfdsfd Try again.!!');</script>";
    }
    else
    {
      echo "<script>alert('Sorry.. Try again.!!');</script>";
    }
  }
?>
