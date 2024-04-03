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

  $page='news';    
include('include/header.php');
?>

<div style="margin-left: 16%; width: 100%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active">News</li>
    </ul>
  </div>

  <div style="margin-left: 20%; margin-top: 2%; width:70%;">
  <div class="text-right">
    <a href="addnews.php" class="btn btn-info">Add News</a>
  </div>
  <div class="table-responsive">
  <table class="table table-bordered table-striped mt-1">
    <tr class="text-center">
      <th>ID</td>
      <th>Title</th>
      <th>Description</th>
      <th>Date</th>
      <th>Category</th>
      <th>Thumbnail</th>
      <th>Admin</th>
      <th>Edit</th>
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
           
      $query=mysqli_query($con,"select * from news_tbl limit $page1,6");
       while ($row=mysqli_fetch_array($query)) {
         ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo substr($row['title'],0,30);;?></td>
            <td><?php echo substr($row['des'],0,100);;?></td>
            <td><?php echo date("F-jS-Y", strtotime($row['date']));?></td>
            <td><?php echo $row['category'];?></td>
            <td><img src="images/thumbnail/<?php echo $row['thumbnail'];?>" class="img img-thumbnail" alt="news image" style="width: 150px;height: 100px;"></td>
            <td><?php echo $row['admin'];?></td>   
            
            <td><a href="news_update.php?edit=<?php echo $row['id'];?>" class="btn btn-info  btn-sm">Edit</a></td>  
            <td><a href="news_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger btn-sm">Delete</a></td>     
        </tr>          
      <?php }?>
   
  
 
          
              
              <?php

       $sql=mysqli_query($con,"select * from news_tbl");
       $count=mysqli_num_rows($sql);
       $a=$count/3;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
       </table>
       <ul class="pagination">  
       
         <li class="page-item"><a class="page-link" href="news.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
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



