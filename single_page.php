<?php error_reporting(0); 
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="style/header.css" rel="stylesheet">
    <link href="style/singlepagecss.css" rel="stylesheet">
    <link href="style/comment.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    <style>
    
 .fixed-con {
    z-index: 9724790009779558!important;
    background-color: #f7f8fc;
    position: ;
    top: 0;
    left: 0;
    right: 0px;
    bottom: 0;
    overflow-y: auto;
  }
  .VIpgJd-ZVi9od-aZ2wEe-wOHMyf{
   z-index: 9724790009779!important;
   top:0;
   left:unset;
   right:-20px;
   display:none!important;
   border-radius:50%;
   /*border:2px solid gold;*/
  }
  .VIpgJd-ZVi9od-aZ2wEe-OiiCO{
    width:80px;
    height:80px;
  }
          .translate{
            height: 38px;
    float: right;
    margin: -3px;
    border: none;
    color: #fff;
          }
          div#\:0\.targetLanguage {
    background: ;
    border: none;
    color: #fff;
    margin-right: -61px;
}
    span {
    color: black;
    font-size:;
    
}
#google_translate_element select{
   background-color:black;
   color:#fff;
   
   border: none;
   border-radius:3px;
   padding:6px 8px
 }
.google_translate_element{
  background-color:black;
}
.goog-logo-link,.goog-te-gadget span{

display:none !important;

}
.goog-te-gadget .goog-te-combo {
    margin: 1px 0;
}
.goog-te-gadget{

color:transparent!important;
font-size :0;

}

</style>
<script>

  function googleTranslateElementInit() {

  new google.translate.TranslateElement({

  pageLanguage: 'en',

  autoDisplay: 'true',

  layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL

  }, 'google_translate_element');

  }

  </script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
   
<div class="topnav">
<div class="translate">
<div id="google_translate_element"></div>

</div>
  <div class="search-container" style="margin: -7px;">
  <form action="search.php" method="post">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" name="search_btn"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
<div class="clear"></div>
<div class="menubarcontainer" style="width:100%;height:100%;background-color: #001d3d;border-top: 1px;">
  <h1 style=" margin:0;height:60px;padding: 0;color: white;font-family: Arial;font-weight: normal;margin-left: 90px;padding-top: 10px;padding-bottom:10px;">NewsSphere</h1>
</div>
<div class="clear"></div>
<nav>
<ul class="menu" style="background-color:#003566;" >
            <a class="be" style="background-color:#003566;" href="index.php">Home</a>
      <?php

            include('db/config.php');

            $query1=mysqli_query($con,"select * from category");
            while ($row=mysqli_fetch_array($query1)) {
              $category_name=$row['category_name'];
          ?>

     <a class="be" style="background-color:#003566;" href="category_page.php?name=<?php echo $category_name;?>"><?php echo $category_name;?></a>

      
      <?php }?>
            </li>
    
       </ul>
            </nav>
    </div>

</div>
<div class="break"></div>
<!--<img src="images/bg1.png" class="card-img" alt="..." style="width:1404px;height:150px;">-->

<div class="break"></div>
<!--<hr style="width:80%;margin-top:10px;">-->
<?php

include('db/config.php');
 $id=$_GET['single'];

$query=mysqli_query($con,"select * from news_tbl where id='$id'");

if ($row=mysqli_fetch_array($query)) {
  

?>
<div class="page-wrapper">
<div class="ccontent clearfix">
  <div class="main-content single">
    <h1 class="post-title"><?php echo $row['title'];?></h1>
    <div class="post-content">
    <p style="padding:5px;"><?php echo $row['date'];?> | <?php echo $row['admin'];?></a></p>
    
    <p><a href="#"><img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" class="img img-thumbnail" style="width: 700px; height: 490px;"></a></p><br>
    <span class="blog-text"><?php echo $row['des'];?></span>
    </div>
    <?php }?>
    <br>
    <h3 style="margin-left:550px;">Share news:</h3>
    <br>
        <div class="row mb-3" style="margin-left:400px;">
          <div class="col-3">
            <a href="https://www.facebook.com/" ><i class="fa fa-facebook-official fa-3x" style="color:#3b5998;margin:20px;"></i></a>
        
            <a href="https://api.whatsapp.com//"><i class="fa fa-whatsapp fa-3x" style="color:#25d366;margin:20px;"></i></a>
        
            <a href="https://twitter.com/i/flow/login"><i class="fa fa-twitter fa-3x" style="color:#00aced;margin:20px;"></i></a>
          
            <a href="https://www.tumblr.com/login"><i class="fa fa-tumblr fa-3x" style="color:#32506d;margin:20px;"></i></a>

            <a href="https://www.linkedin.com/login"><i class="fa fa-linkedin fa-3x" style="color:#32506d;margin:20px;"></i></a>
          
            <a href="https://www.reddit.com/login/"><i class="fa fa-reddit fa-3x" style="color:red;margin:20px;"></i></a>
          </div>
        </div>
</div>

<div class="sidebar single">
  <div class="section popular">
    <h2 class="section-title">More News For You</h2>
    <?php

include('db/config.php');

$query2=mysqli_query($con,"select * from news_tbl order by RAND() limit 0,8");
while ($row=mysqli_fetch_array($query2)) {
  $category=$row['category'];
  $date=$row['date'];
  $title=$row['title'];
  $des=$row['des'];
  $thumb=$row['thumbnail'];


?>
    <div class="post clearfix">
    <img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" alt="">
      <a href="" class="title"><h4><a class="edit" style="color:#14213d;text-decoration:none;" href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $title;?></h4></a>
     
    </div>
    <?php }?>
  </div>
 
</div>

            </div>
            </div>
<!--<div id="fixed">
      
      <?php

        include('db/config.php');
         $id=$_GET['single'];

        $query=mysqli_query($con,"select * from news_tbl where id='$id'");

        if ($row=mysqli_fetch_array($query)) {
          

      ?>

      
        <h1 class="h1"><?php echo $row['title'];?></h1>
        <p><span class="date"> <?php echo $row['date'];?> | <?php echo $row['admin'];?></a></span></p>
        <div class="newsimg">
        <p><a href="#"><img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" class="img img-thumbnail" style="width: 700px; height: 490px;"></a></p>
        <hr>
        </div>
        <div class="newsdes">
        <p><?php echo $row['des'];?></p>
        
      
       
      </div>
         
    <?php }?>-->

 
    <h2><center><b>Leave a comment</center></b></h2>
      <hr>
      <div class="container">
    <form action="single_page.php" method="post" name="commentform" onsubmit="return validateForm();">
    <div class="row">
    <div class="col-25">

    <label for="text">Name:</label>
    </div>
    <div class="col-75">
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Enter Your Name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
    <label for="exampleInputEmail1">Email Address:</label>
    </div>
    <div class="col-75">
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail" placeholder="Enter Your Email.."><br>
    <small id="emailHelp" class="form-text text-muted">
        We'll never share your email with anyone else.
    </small>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
  
    <label for="text">Comment:</label>
    </div>
    <div class="col-75">
    <textarea id="subject" name="com" placeholder="Write something.." style="height:200px"></textarea>

    </div>
  </div>
  <br>
  <div class="row">
  
  <button type="submit" class="btn" name="add_comment_btn">Submit</button>
</form>

<script type="text/javascript">
    function validateForm(){
      var x=document.forms['commentform']['name'].value;
      if(x==""){
      alert('Name must be filled out.');
      return false;
      }
    }
</script>
    </div>
  </div>
</main>

<?php
  include('db/config.php');

  if (isset($_POST['add_comment_btn'])) {
 

    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $com=$_POST['com'];
    $query1=mysqli_query($con, "insert into comment(name,mail,comment) values('$name','$mail','$com')");
 if($query1){
        echo "<script>alert('Comment added successfully.');</script>";
        echo "<script>location.href='index.php';</script>";
    }
    else
    {
      echo "<script>alert('Sorry..Try again.!!');</script>";
      echo "<script>location.href='index.php';</script>";
    }
  
  }
?> 
<section class="footer">
      <div class="social">
      <a href="subscribe.php"><i class="fa fa-bell"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-snapchat"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
      </div>
      <ul class="list">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="aboutus.php">About</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        <li>
          <a href="#top">Back to top</a>
        </li>
      </ul>
      
    </section>
    <a href='#' class="stt" title="scroll to top"></a>
    </body>
    </html>
