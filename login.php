<!DOCTYPE html>
<html>
<head>
  <title>HighSchool Content</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="css.css">
  <style>
  body {
     background-color:#eff5f0; 
      position: relative; 
  }
  .affix {
      top:0;
      width: 100%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative
     top: 50px;
  }
  h1{text-align:center; font-weight:bold;}
  nav{padding-left:  150px; font-weight: bold; color: white;}

   .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }

  #myheader {
    text-align: center;
    align-content: center;
    width: auto; padding: 5px;
    height: 100px;
    color: white;
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 10s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    50% {box-shadow: 10px 20px 30px green;}
}

/* Standard syntax */
@keyframes mymove {
    50% {box-shadow: 25px 20px 30px green;}
}

  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Digital learning</a>
        </div>

         <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-user"></span>&nbsp; User: <?php echo $userData['username']; ?> &nbsp; <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="userAccount.php?logoutSubmit=1" class="logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
               </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<div class="container-fluid" style=" background-color: #00bcd4;color:#fff;height:100px;">
  <div class="Col-sm-3"><a href="index.html"><span class="glyphicon glyphicon-home" style="text-align: center; font-size: 2em; padding-top: 12px; color: white;"></span></a></div>
  <div class="Col-sm-9"><div id="myheader">
                           <h1 >High School</h1>
                         </div>
  </div>
    
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="100">
  <div class="row">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Form one <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="maths1.html">Mathematics</a></li>
              <li><a href="English1.html">English</a></li>              
              <li><a href="Kiswahili1.html">Kiswahili</a></li>
              <li><a href="Physics1.html">Physics</a></li>
              <li><a href="Chemistry1.html">Chemistry</a></li>
              <li><a href="Biology1.html">Biology</a></li>
              <li><a href="geo.html">Geography</a></li>
              <li><a href="history1.html">History</a></li>
              <li><a href="Business1.html">Bussiness</a></li>              
              <li><a href="Agriculture1.html">Agriculture</a></li>
              <li><a href="Computer1.html">Computer</a></li>
              <li><a href="CRE1.html">CRE</a></li>
              <li><a href="IRE1.html">IRE</a></li>
            </ul>
          </li>
          
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Form Two <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section21">Mathematics</a></li>
              <li><a href="#section22">English</a></li>              
              <li><a href="#section23">Kiswahili</a></li>
              <li><a href="#section24">Physics</a></li>
              <li><a href="#section25">Chemistry</a></li>              
              <li><a href="#section26">Biology</a></li>
              <li><a href="#section27">Geography</a></li>
              <li><a href="history2.html">History</a></li>
              <li><a href="#section28">Bussiness</a></li>              
              <li><a href="#section29">Agriculture</a></li>
              <li><a href="#section210">Computer</a></li>
              <li><a href="#section211">CRE</a></li>
              <li><a href="#section212">IRE</a></li>
            </ul>
          </li>
          
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Form Three <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section31">Mathematics</a></li>
              <li><a href="#section32">English</a></li>              
              <li><a href="#section33">Kiswahili</a></li>
              <li><a href="#section34">Physics</a></li>
              <li><a href="#section35">Chemistry</a></li>
              <li><a href="#section36">Biology</a></li>
              <li><a href="#section37">Geography</a></li>
              <li><a href="history3.html">History</a></li>
              <li><a href="#section38">Bussiness</a></li>              
              <li><a href="#section39">Agriculture</a></li>
              <li><a href="#section310">Computer</a></li>
              <li><a href="#section311">CRE</a></li>
              <li><a href="#section312">IRE</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Form Four <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Mathematics</a></li>
              <li><a href="#section42">English</a></li>              
              <li><a href="#section43">Kiswahili</a></li>
              <li><a href="#section44">Physics</a></li>
              <li><a href="#section45">Chemistry</a></li>
              <li><a href="#section46">Biology</a></li>
              <li><a href="#section47">Geography</a></li>
              <li><a href="history4.html">History</a></li>
              <li><a href="#section48">Bussiness</a></li>              
              <li><a href="#section49">Agriculture</a></li>
              <li><a href="#section410">Computer</a></li>
              <li><a href="#section411">CRE</a></li>
              <li><a href="#section412">IRE</a></li>
            </ul>
          </li>

          <li class="dropdown"><a class="dropdown-toggle" href="generalimages.html">Images</a>
            
          </li>
        </ul>

      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container">
  <h2>Introduction</h2>
  Congratulations!!! Welcome To High School,Learn and build your knowledge Capacity as you purpose towards achieveing your dream. Build from here  <a href="#demo" class="btn btn-default" data-toggle="collapse">more...</a>
  <div id="demo" class="collapse">Aim and target high even  as you will be passing through various challenges and levels.Your Victory means something.All the Best!!!
</div>
 <br><br><br>
<h2 style="text-align: center;">Educational <q><i>Quotes</i></q></h2>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
   
   <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>


    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"Education is the passport to the future, for tomorrow belongs to those who prepare for it today.<br><br><span><i>Malcolm X</i></span></h4>
      </div>
      <div class="item">
        <h4>"An investment in knowledge pays the best interest. "<br><br><span><i>Benjamin Franklin</i></span></h4>
      </div>
      <div class="item">
        <h4>"Education is what remains after one has forgotten what one has learned in school. "<br><br><span><i>Albert Einstein</i></span></h4>
      </div>
       <div class="item">
        <h4>"The function of education is to teach one to think intensively and to think critically. Intelligence plus character - that is the goal of true education. "<br><br><span> <i>Martin Luther King, Jr.</i></span></h4>
      </div>
       <div class="item">
        <h4>"Education is the most powerful weapon which you can use to change the world."<br><br><span><i>Nelson Mandera</i></span></h4>
      </div>
      
    </div>
   </div>
  </div>

  <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
    </div>


</body>
</html>
