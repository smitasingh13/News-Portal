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

  $page='category';    

  include('include/header.php');
?>
<div style="margin-left: 16%; width: 100%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">Home</a></li>
      <li class="breadcrumb-item active" >Category</li>
    </ul>
  </div>
<div style="margin-left: 17%; margin-top: 1%; width:90%;">
  <div class="text-right">
    <a href="addcategory.php" class="btn btn-info"></i> Add Category</a>
  </div>
  <table class="table table-bordered table-striped mt-1">
    <tr class="text-center">
      <th>ID</td>
      <th>Category Name</th>
      <th>Description</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>    
      <?php
        include('db/config.php');
        $query=mysqli_query($con, "select * from category");
        while ($row=mysqli_fetch_array($query))
         { 
      ?>
      <tr >
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['category_name'];?></td>
      <td><?php echo substr($row['des'],0,100);?></td>
      <td class="text-center"><a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row['id'];?>"> Edit</a></td>
      <td class="text-center"><a class="btn btn-danger btn-sm" href="delete.php?did=<?php echo $row['id'];?>"> Delete</a></td>
      </tr>
    <?php }?>   
  </table>
</div>


<?php
 include("include/footer.php");
?>

<?php
  include('db/config.php');

  if (isset($_POST['add_category_btn'])) {


    $category_name=$_POST['category'];
    $des=$_POST['des'];
    
    $query=mysqli_query($con, "insert into category(category_name,des) values('$category_name','$des')");

    if ($query) {
      
      echo "<script>alert('Category added successfuly.');</script>";

    }
    else
    {
      echo "<script>alert('Somthing went wrong. Please try again.');</script>";
    }
  }
?>