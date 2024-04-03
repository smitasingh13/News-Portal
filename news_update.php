<?php
session_start();

if ($_SESSION['email'] == "") {
  header('location:admin_login.php');
  exit(); // Add exit() to stop further execution
}

include('include/header.php');
?>

<?php
include('db/config.php');
$id = $_GET['edit'];
$query = mysqli_query($con, "SELECT * FROM news_tbl WHERE id='$id'");

while ($row = mysqli_fetch_array($query)) {
  $id = $row['id'];
  $title = $row['title'];
  $des = $row['des'];
  $date = $row['date'];
  $thumbnail = $row['thumbnail'];
  $category = $row['category'];
}
?>

<div style="margin-left: 16%; width: 100%;">
  <ul class="breadcrumb">
    <li class="breadcrumb-item "><a href="home.php">Home</a></li>
    <li class="breadcrumb-item "><a href="news.php">News</a></li>
    <li class="breadcrumb-item active">Edit News</li>
  </ul>
</div>

<div style="margin-left: 20%; margin-top: 2%; width:70%; ">

  <form action="news_update.php" method="post" name="newsform" enctype="multipart/form-data" onsubmit="return validateForm();">
    <h3>Update News</h1>
    <hr>
    <div class="form-group">
      <label for="exampleInputEmail1">Title :</label>
      <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $title; ?>">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description :</label>
      <textarea class="form-control rounded-0" name="des" rows="6" placeholder="Enter Description..."><?php echo $des; ?></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Date :</label>
      <input type="date" name="date" class="form-control" value="<?php echo $date; ?>">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Choose Thumbnail :</label>
      <input type="file" name="thumbnail" class="form-control"><br/>
      <img src="images/thumbnail/<?php echo $thumbnail ?>" class="img img-thumbnail" style="height: 200px; width:250px;">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Choose Category :</label>
      <select name="category" class="form-control">
        <?php
        include('db/config.php');

        $query1 = mysqli_query($con, "SELECT * FROM category");
        while ($row = mysqli_fetch_array($query1)) {
          $category_name = $row['category_name'];
          ?>
          <option <?php if ($category_name == $category) echo 'selected'; ?>><?php echo $category_name; ?></option>

        <?php } ?>
      </select>
    </div>
    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">

    <button type="submit" name="update_news_btn" class="btn btn-primary">Update</button>
  </form>

  <script type="text/javascript">
    function validateForm() {

      var x = document.forms['newsform']['title'].value;
      var y = document.forms['newsform']['des'].value;
      var z = document.forms['newsform']['date'].value;
      var w = document.forms['newsform']['category'].value;
      if (x == "") {
        alert('Title must be filled out.');
        return false;
      }
      if (y == "") {
        alert('Description must be filled out.');
        return false;
      }
      if (y.length < 100) {
        alert('Description should have at least 100 characters');
        return false;
      }
      if (z == "") {
        alert('Date must be filled out.');
        return false;
      }
      if (w == "") {
        alert('Category must be filled out.');
        return false;
      }
    }
  </script>
</div>

<?php
include("include/footer.php");
?>

<?php
include('db/config.php');

if (isset($_POST['update_news_btn'])) {
  $id1 = $_POST['id'];
  $title1 = $_POST['title'];
  $des1 = $_POST['des'];
  $date1 = $_POST['date'];
  $thumb1 = $_FILES['thumbnail']['name'];
  $tmp_thumb1 = $_FILES['thumbnail']['tmp_name'];
  $category1 = $_POST['category'];

  if (!empty($thumb1)) {
    move_uploaded_file($tmp_thumb1, "images/thumbnail/$thumb1");
    $query2 = mysqli_query($con, "UPDATE news_tbl SET title='$title1', des='$des1', date='$date1', category='$category1', thumbnail='$thumb1' WHERE id='$id1'");
  } else {
    $query2 = mysqli_query($con, "UPDATE news_tbl SET title='$title1', des='$des1', date='$date1', category='$category1' WHERE id='$id1'");
  }

  if ($query2) {
    echo ("<script> location.href = 'news.php?page=1'; </script>");
  } else {
    echo "<script>alert('Sorry.. Try again.!!');</script>";
  }
}
?>