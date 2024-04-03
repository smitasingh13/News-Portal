<?php
  session_start();

  if($_SESSION['email'] == " ")
  {
    header('location:admin_login.php');
  }
  else
  {
      //no session

  }

  $page='comments';    
include('include/header.php');
?>

<div style="margin-left: 16%; width: 100%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active">Comments</li>
    </ul>
  </div>

  <div style="margin-left: 20%; margin-top: 2%; width:70%;">
  <div class="text-right">
   
  </div>
  <div class="table-responsive">
  <table class="table table-bordered table-striped mt-1">
    <tr class="text-center">
      <th>ID</td>
      <th>Name</th>
      <th>Email</th>
      <th>Comment</th> 

      <th>Delete</th>
    </tr>       
    <?php
        include('db/config.php');
          $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*3)-3;

           }
           
      $query=mysqli_query($con,"select * from comment");
       while ($row=mysqli_fetch_array($query)) {
         ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['mail'];?></td>
            <td><?php echo $row['comment'];?></td>
             
            
             
            <td><a href="com_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a></td>     
        </tr>          
      <?php }?>
   
  
 
          
              
              <?php

       $sql=mysqli_query($con,"select * from comment");
       $count=mysqli_num_rows($sql);
       $a=$count/3;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
       </table>
       <ul class="pagination">  
       
         <li class="page-item"><a class="page-link" href="comments.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
               
       </ul>
</nav>
  </div>
</div>


<?php
 include("include/footer.php");
?>



