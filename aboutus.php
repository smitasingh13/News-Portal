<?php error_reporting(0); 
?>
<!doctype html>
<html lang="en">

<head>
    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ddd;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
    margin:10px;
  width: 100%;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;
}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
    margin:10px;
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: #4070f4;
  color: #fff;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}
    </style>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="style/header.css" rel="stylesheet">
    <link href="style/content.css" rel="stylesheet">
    <link href="style/footer.css" rel="stylesheet">
    </head>

<body>
<div class="topnav">

  <!--<img src="images/IMG-20230518-WA0001.jpg" alt="" width=50px; height=50px;>-->
  <div class="search-container">
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

<div class="break"></div>
<section class="about-us">
    <div class="about">
    
      <div class="text">
        <h2>About Us</h2>
     
          <p>NewsSphere has been developed to override the problems prevailing in the manual method of practice. Additionally, this news portal system has been designed based on the specific needs of the organization in order to be able to perform operations in a smooth and effective manner. In order to avoid errors when entering the data into the system, as much of the application as possible has been reduced. The PHP source code of this website does not require any formal knowledge on the part of the user to use it. As a result, this proves that this is a user-friendly application. By using a News Portal, you can create a management system that is error-free, secure, reliable, and fast.Every organization, whether big or small, has challenges to overcome and manage the information of News Categories, Comments, and Subscribers.It has an administration panel and also allows the user to search, filter, and browse through the articles to find the information that they are looking for. It provides an administration panel from which the administrator can manage the portal,and set up new categories and articles to be displayed on the news portal.NewsSphere is a content-driven website, which consists of articles and images that provide the latest information gathered from different sources in the form of articles and images.NewsSphere is a website that aggregates news from a variety of sources and displays them on the homepage of the website.</p>
        <div class="data">
        
        </div>
      </div>
    </div>
  </section>
  <div class="break"></div>
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

   