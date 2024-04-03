<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Admin Dashboard</title>

  
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>


   
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  
    <link href="style/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"> <span data-feather="users"></span>&nbsp;<?php echo $_SESSION['email'];?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Log out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link <?php if ($page=='home') {
              echo 'active';
            }?> " href="home.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page=='category') {
              echo 'active';
            }?> " href="category.php">
              <span data-feather="list"></span>
              Category
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page=='news') {
              echo 'active';
            }?> " href="news.php?page=1">
              <span data-feather="file-text"></span>
              News
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page=='comments') {
              echo 'active';
            }?> " href="comments.php?page=1">
              <span data-feather="file-text"></span>
              Comments
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if ($page=='subscribe') {
              echo 'active';
            }?> " href="subs.php?page=1">
              <span data-feather="file-text"></span>
              Subscribers
            </a>
          </li>
        </ul>

       
      </div>
    </nav>
