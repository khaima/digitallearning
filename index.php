<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<div class="container">
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
<?php
require 'login.php';
?>
    <?php }else{ ?>
    <h2>Login to Your Account</h2>
    <h6><a href="admin_login.php"><i>Admin</i></a></h6>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" type="text/css" href="css.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading"
            <div class="row">
            <div style="text-align:center;width:400px;padding:1em 0;"><iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=en&timezone=Africa%2FNairobi" width="100%" height="150" frameborder="0" seamless></iframe></div>
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="registration.php">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
          <div class="regisFrm">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="userAccount.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                     <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email eg. user@domain.com" maxlength="40"  />
                     </div>
                 </div>
             
                  <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" required/>
                    </div>
                  </div>


                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="loginSubmit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  
                </form>              
              </div>

            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
<!--

    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="registration.php">Register</a></p>
    </div>-->
    <?php } ?>
</div>