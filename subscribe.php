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
    <link href="style/indexcss1.css" rel="stylesheet">
    <link href="style/header.css" rel="stylesheet">
    <link href="style/subscribecss.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    <link href="style/subscribeform.css" rel="stylesheet">
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
    margin: -1px;
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
    font-size: 15px;
    font-weight: 600;
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
  <!--<img src="images/IMG-20230518-WA0001.jpg" alt="" width=50px; height=50px;>-->
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

     <a class="be" style="background-color:#003566;"  href="category_page.php?name=<?php echo $category_name;?>"><?php echo $category_name;?></a>

      
      <?php }?>
            </li>
    
       </ul>
        </nav>



      
     
    </div>

</div>



<h2 style=""><center>Latest News  <img src="images/gif/new2.gif" style="width: 70px;padding-top:10px;padding-bottom:5px"></center></h2>
<br>
<!--<div class="wrapper">
  <?php
  
  include('db/config.php');
  
  $query2=mysqli_query($con,"select * from news_tbl order by id desc limit 0,3");
  while ($row=mysqli_fetch_array($query2)) {
    $category=$row['category'];
    $date=$row['date'];
    $title=$row['title'];
    $des=$row['des'];
    $thumb=$row['thumbnail'];
  
  
  ?>
      <div class="card">
        <div class="card-banner">
          <p class="category-tag popular">Latest</p>
          <img class="banner-img" src="images/thumbnail/<?php echo $row['thumbnail']; ?>" alt=''>
        </div>
        <div class="card-body">
          <p class="blog-hashtag"></p>
          <h2 class="blog-title"><a class="t" style="color:#14213d;text-decoration:none;" href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $title;?></a></h2>
          <p class="blog-description"></p>
  
         
        </div>
      
  
      
      </div>
      <?php }?>
    </div>-->
<div class="break"></div>

<div class='container'>
<?php
  
  include('db/config.php');
  
  $query2=mysqli_query($con,"select * from news_tbl order by id desc limit 0,3");
  while ($row=mysqli_fetch_array($query2)) {
    $category=$row['category'];
    $date=$row['date'];
    $title=$row['title'];
    $des=$row['des'];
    $thumb=$row['thumbnail'];
  
  
  ?>
  

  <main>
    <div class='normal'>
      <p class='demo-title'></p>
      <div class='module'>
        <div class='thumbnail'>
          <img src="images/thumbnail/<?php echo $row['thumbnail']; ?>">
          <div class='date'>
            <div><?php echo $row['date'];?></div>
            
          </div>
        </div>
        <div class='content'>
          <div class="category"></div>
          <h1 class='title'><a style="text-decoration: none;
  font-weight: 600;
  color: #000;
  font-weight: 500;" href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h1>
          
          <div class="description"><?php echo substr($row['des'],0,480);?></div>
        
          
        </div>
        
      </div>
      
    </div>
    <?php }?>
 
      </div>
      
    </div>



  </main>
  
</div>



      <?php
        include('db/config.php');
      ?>
      
      <form action="subscribe.php" method="post">
        <div class="form-group" style="margin-top:10px;margin:30px;">
          <label for="exampleInputEmail1">Email address</label><br><br>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address ...." name="email" required><br><br>
          <small id="emailHelp" class="form-text text-muted">Subscribe to our channel for latest news at first to you.</small><br><br>
        
      
        
        <button type="submit" class="btn" name="subscribe_btn" style="margin-top:-20px;">Subscribe</button>
      </form>

     
    </div>

    
  </div>

</main>

<?php
  include('include/index_footer.php');
?>
<?php

  if (isset($_POST['subscribe_btn'])) {
    echo $email=$_POST['email'];

    $check_sub=mysqli_query($con,"select * from subscribe_tbl where email='$email'");
    if (mysqli_num_rows($check_sub)>0) {
      echo "<script>alert('Already subscribed. Try another email.');</script>";
    }
    else
    {
      $query=mysqli_query($con,"insert into subscribe_tbl(email) values('$email')");

      if ($query) {
        echo "<script>alert('Thank you for subscribing.');</script>";
        echo "<script>location.href='index.php';</script>";
      }
      else
      {
        echo "<script>alert('fetching error.');</script>";
      }
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
    <a href='subscribe.php' class="st" title="subs"></a>
    </body>
    </html>