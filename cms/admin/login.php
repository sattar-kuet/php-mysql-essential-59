<?php $_COOKIE['title'] = 'login'; ?>
<?php session_start();
   if(isset($_SESSION['user']['id'])){
    header('Location:dashboard.php');
   }
?>
<?php include('../include/header.php');?>
<?php include('../helper/function.php');?>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php //include('partial/sidebar.php'); ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top nav bar -->
            <div class="container">
              <h2>Admin Login</h2>
              <?php show_flush_message(); ?>
              <form action="process/login.php" method="post">

    
              <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email">
              </div>

              <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
              </div>
              <div class="alert alert-info"> 
                <?php load_captcha(); ?>
              </div>
              <div class="form-group">
                <label for="password">Captcha:</label>
                <input type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
              </div>

              <button type="submit" class="btn btn-default">Login</button>
          </form>
      </div>

  </div>
</div>





<?php include('../include/footer.php');?>
