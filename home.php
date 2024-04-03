<?php
  session_start();
  error_reporting(0);

  if($_SESSION['email'] == "")
  {
    echo("<script>location.href='admin_login.php';</script>");
  }
  else
  {
      //no session
  }

  $page='home';    

  include('include/header.php');
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
      </div>
    </main>
  </div>
</div>
<?php
  include('include/footer.php');
?>
