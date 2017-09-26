<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <title></title>

    <style>
        
        #glyphicon {
            color: blue;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 align="center">Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post" autocomplete="off">
        <!--
            <input type="text" name="first_name" placeholder="Enter First Name" required="">
            <input type="text" name="last_name" placeholder="Enter Last Name" required="">
            <input type="text" name="regno" placeholder="Key In Your Registration Number" required="">
            <input type="text" name="age" placeholder="Enter Age" required="">
            Gender:
              <input type="radio" name="gender"
                  <?php if (isset($gender) && $gender=="female") echo "checked";?>
                    value="female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="male") echo "checked";?>
                    value="male">Male
            <input type="text" name="residence" placeholder="Enter Residence eg. Ntugi" required="">
            <input type="text" name="username" placeholder="Enter the preferred username eg @student" required="">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="text" name="phone" placeholder="Enter Phone Number eg 0712345678" required="">
            <input type="password" name="password" placeholder="Enter Password" required="">
            <input type="password" name="confirm_password" placeholder="comfirm_password" required="">
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
        <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="index.php"><i>Already have an Account?</i>  Sign in Here...</a>
            </div>-->



                <div class="row">
                  <div class="col-sm-3">
                     <div class="form-group">
                        <div class="input-group">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                            <input type="text"  class="form-control" name="first_name" placeholder="Enter First Name" maxlength="20" required="">                
                       </div>
                     </div>

                     <div class="form-group">
                        <div class="input-group">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                            <input type="text"  class="form-control" name="last_name" placeholder="Enter Last Name" maxlength="20" required="">                
                       </div>
                     </div>

                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                       <div class="input-group">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-file"></span></span>
                             <input type="text"  class="form-control" name="regno" placeholder="Your Registration Number" maxlength="5"required="">
                        </div> 
                     </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                       <div class="input-group">
                         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="text"  class="form-control" name="age" placeholder="Enter Age" maxlength="10" required="">
                      </div>
                    </div>
                  </div>
                </div>
            
               
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
             <div class="input-group">
               <div  class="form-control"> 
                 Gender:
              <input type="radio" name="gender"
                  <?php if (isset($gender) && $gender=="female") echo "checked";?>
                    value="female">Female
                    <input type="radio" name="gender"
                    <?php if (isset($gender) && $gender=="male") echo "checked";?>
                    value="male">Male
                    </div>
                </div>
            </div>
              </div>
              <div class="col-sm-6">
                 <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class=" glyphicon glyphicon-home"></span></span>
                    <input type="text"  class="form-control" name="residence" placeholder="Enter Residence eg. Ntugi" required="">
                </div>
               </div>
              </div>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text"  class="form-control" name="username" placeholder="Enter the preferred username eg @student" maxlength="10"required="">
                </div>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email"  class="form-control" name="email" placeholder="EMAIL" required="">
                </div>
            </div>
                        
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
            <input type="text"  class="form-control" name="phone" placeholder="Enter Phone Number eg 0712345678" maxlength="12" required="">
                </div>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password"  class="form-control" name="password" placeholder="Enter Password" required="">
                </div>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password"  class="form-control" name="confirm_password" placeholder="comfirm_password" required="">
                </div>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group" align="center">
            <div class="send-button">
                <input type="submit"  class="form-control" name="signupSubmit" value="CREATE ACCOUNT">
            </div>
            </div>
            
            <div class="form-group">
             <hr />
            </div>
            
            <div class="form-group">
             <a href="index.php"><i>Already have  an Account?</i> Sign in Here...</a>
            </div>
        
        </div>
   
        </form>
    </div>
</div>

</body>
</html>
 
