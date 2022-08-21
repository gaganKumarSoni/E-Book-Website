<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jai SIya RAM</title>
    <script>
        function myFunction(x) {
          x.classList.toggle("change");
        }
      </script>
      <script type="text/javascript">
        function hide_btn(){
            document.querySelector(".set").style.display = "none";
        }
        function alert_upload(){
            alert("You can Upload Books after Log-in only");
        }
        function alert_explore(){
            alert("Please Read Our Terms & Condition to access all e-books");
        }
        function gpbook_popup(){
            alert("Sign-In to access FREE Google Play Books");
            window.location='login.php';
        }
      </script>
      <!--<script>
          $(document).ready(function () {
                $(document).click(function (event) {
                        var clickover = $(event.target);
                        var _opened = $(".navbar-collapse").hasClass("navbar-collapse in");
                        if (_opened === true && !clickover.hasClass("navbar-toggle")) {
                            $("button.navbar-toggle").click();
                        }
                    });
                });
      </script>-->
    <!--Glypicon user    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- end -->
    <!-- animate-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/animate.min.css">
      
      
      
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web\css\all.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web\css\fontawesome.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <!-- Google Font Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Google font montserrat -->
    <link href="https://fonts.googleapis.com/css?family=Monda|Montserrat&display=swap" rel="stylesheet">
    
      
  </head>
 <body>
        <div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation" style="position: fixed;">
             <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" style="background-color: azure;" id="collbtn" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <div onclick="myFunction(this)">
                          <div class="bar1"></div>
                          <div class="bar2"></div>
                          <div class="bar3"></div>
                        </div>
                        <!--<span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
<!--
<button type='button' role='button' aria-haspopup='true' class='btn btn-warning dropdown-toggle' data-toggle='dropdown' style='color: white;'>
                                    <span class='glyphicon glyphicon-user'></span> &nbsp;&nbsp; {$db_user}&nbsp; <span class='caret'></span>
                                </button>
                                

-->
                    </button>
                    <a class="navbar-brand col-sm-5 col-md-4 col-lg-4" href="#"><img src="leavelogo.png" alt="Logo"></a>
                    <!--<a  class="navbar-brand" href="#">E-Books</a>-->  
            <!--</div>
                <div class="navbar-collapse collapse navbar-right" >
                  <ul class="nav navbar-nav">-->
                    
                    <?php
                      if(isset($_POST['submit'])){
                        $con=mysqli_connect('sql109.epizy.com','epiz_24080689','hmfIlDCN','epiz_24080689_login');
                        if(!$con){
                            die('Not Connected'.mysqli_error());
                        }
                
                        // jau user dala hai
                        $db_user=$_POST['user'];
                        $db_pass=$_POST['pass'];
                       // $db_email=$_POST['email'];
                          
                        $query = "SELECT * FROM users where username='$db_user' and password='$db_pass'" ;
                        $result = mysqli_query($con,$query);
                        $row = mysqli_fetch_assoc($result);
                        if(mysqli_num_rows($result) > 0){
                            if($db_user == $row['username']){    
                                echo "
                    <a class='navbar-brand dropdown-toggle col-sm-4 col-md-5 col-lg-5' data-toggle='dropdown' style='display: inline-flex;color: white;' href='#'>Categories &nbsp;<span class='caret' ></span></a>
                    <ul class='dropdown-menu'>
                        <li><a href='#cse'>CSE</a></li>
                        <li><a href='#ece'>ECE</a></li>
                        <li><a href='#mech'>MECH</a></li>
                    </ul>
                </div>
                <div class='navbar-collapse collapse navbar-right' >
                  <ul class='nav navbar-nav'>
                
                
                
                
                                <li class='dropdown' style='display: inline-flex;cursor: pointer;'>
                                <a class='dropdown-toggle' data-toggle='dropdown' style='color: white;'><span class='glyphicon glyphicon-user'></span> &nbsp;&nbsp; {$db_user}&nbsp; <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                    <li><a> <i class='glyphicon glyphicon-user'></i> &nbsp;<small>{$db_user}</small> </a> </li>
                                    <li><a><i class='glyphicon glyphicon-envelope'></i>&nbsp; &nbsp;<small>{$row['email']}</small> </a></li>
                                    <li><a href='index.php'><i class='glyphicon glyphicon-log-out'></i>&nbsp;&nbsp;<small>Log-Out</small></a></li>
                                </ul>
                                </li>
                    </ul>
                </div>
                            ";
                            }
                            else{
                
                                echo "
                </div>
                <div class='navbar-collapse collapse navbar-right' >
                  <ul class='nav navbar-nav'>
                
                
                
                                <h1 style='color: red;'>Invalid Creditionals</h1>
                  </ul>
                </div>
                                ";
                            }
                        }else{
                            echo '
                </div>
                <div class="navbar-collapse collapse navbar-right" >
                  <ul class="nav navbar-nav">
                            <li><a style="color: white;" href="#header">Home</a></li>
                            <li><a style="color: white;" href="#services">sample books</a></li>
                            <li><a style="color: white;" href="#terms">terms to use</a></li>
                            <li><a style="color: white;" href="#gpbook" onclick="gpbook_popup()">Google Play Books</a></li>
                            <li><a style="color: white;" href="#developer">Developer</a></li>
                            <li><a style="color: white;" href="#contact">Contact</a></li>
                            <li><a href="login.php" style="color: white;">Login</a></li>
                    </ul>
                </div>';
                            $message = "Invalid Username And Password";
                            echo "<script type='text/javascript'>alert('$message');window.location='login.php'</script>";
                        }
                      }
                      else{
                    
                        echo '
                </div>
                <div class="navbar-collapse collapse navbar-right" >
                  <ul class="nav navbar-nav">
                        <li><a style="color: white;" href="#header">Home</a></li>
                        <li><a style="color: white;" href="#services">sample books</a></li>
                        <li><a style="color: white;" href="#terms">terms to use</a></li>
                        <li><a style="color: white;" href="#gpbook" onclick="gpbook_popup()">Google Play Books</a></li>
                        <li><a style="color: white;" href="#developer">Developer</a></li>
                        <li><a style="color: white;" href="#contact">Contact</a></li>
                        <li><a href="login.php" style="color: white;">Login</a></li>
                    </ul>
                </div>';
                
                      }
                    ?>
                    
                      
                    <!--<li><a style="color: white;" href="#header">Home</a></li>
                    <li><a style="color: white;" href="#services">sample books</a></li>
                    <li><a style="color: white;" href="#terms">terms to use</a></li>
                    <li><a style="color: white;" href="#gpbook">Google Play Books</a></li>
                    <li><a style="color: white;" href="#contact">Contact</a></li>
                    <li><a href="login.html" style="color: white;">Login</a></li>-->
                  <!--</ul>
              </div>-->

             </div>     
         </div> 
     
    <?php
        if(isset($_POST['submit'])){
               
            $con=mysqli_connect('sql109.epizy.com','epiz_24080689','hmfIlDCN','epiz_24080689_login');
            if(!$con){
                die('Not Connected'.mysqli_error());
            }
            $db_user=$_POST['user'];
            $db_pass=$_POST['pass'];
            $query = "SELECT * FROM users where username='$db_user' and password='$db_pass'" ;
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0){
                if($db_user == $row['username'] && $db_pass == $row['password']){
                    
                }
                else{
                    echo 'Invalid Creditionals';
                }
            }
            else{
                    echo '
                        <div id="header" class="header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">            
                                         <center><h1 class="wow bounceInLeft" data-wow-delay="1s">&nbsp;E-BOOKS<span><sup>&reg;</sup></span></h1><h3 class="wow bounceInRight" data-wow-delay="1s">Read books Anytime Anywhere!</h3><img class="img-responsive" src="ebooklogo.png" alt="Website Logo"></center>
                                    </div>
                                    <div class="flex-container">
                                        <div class="btn-grp">
                                            <button id="aa" class="flex1 btn-success btn btn-lg btn-primary" href="#services" onclick="alert_explore()">Explore Books</button>
                                            <button id="bb" class="flex2 btn-danger btn btn-lg btn-primary" onclick="alert_upload()">Upload Books</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                
            }
        }
        else{
                    echo '
                        <div id="header" class="header">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">            
                                         <center><h1 class="wow bounceInLeft" data-wow-delay="0.5s">&nbsp;E-BOOKS<span><sup>&reg;</sup></span></h1><h3 class="wow bounceInRight" data-wow-delay="0.7s">Read books Anytime Anywhere!</h3><img class="img-responsive" src="ebooklogo.png" alt="Website Logo"></center>
                                    </div>
                                    <div class="flex-container">
                                        <div class="btn-grp">
                                            <a id="aa" class="wow fadeInUp flex1 btn-success btn btn-lg btn-primary" data-wow-delay="1s" href="#services" onclick="alert_explore()">Explore Books</a>
                                            <button id="bb" class="wow fadeInUp flex2 btn-danger btn btn-lg btn-primary" data-wow-delay="1s" onclick="alert_upload()">Upload Books</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
        }
    ?>
                 <!--
        <div id="header" class="header">
             <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12">            
                             <center><h1>&nbsp;E-BOOKS<span><sup>&reg;</sup></span></h1><h3>Read books Anytime Anywhere!</h3><img class="img-responsive" src="ebooklogo.png" alt="Website Logo"></center>
                     </div>
                     <div class="flex-container">
                        <div class="btn-grp">
                            <button id="aa" class="flex1 btn-success btn btn-lg btn-primary">Explore Books</button>
                            <button id="bb" class="flex2 btn-danger btn btn-lg btn-primary">Upoad Books</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>-->
         <!--<center style="margin-top: 60px;"><img name="myimage" src="resize-i.jpg"></center>-->
    <!-- Services -->
<?php
    if(isset($_POST['submit']) && isset($_POST['user']) && isset($_POST['pass'])){
    $con=mysqli_connect('sql109.epizy.com','epiz_24080689','hmfIlDCN','epiz_24080689_login');
    if(!$con){
        die('Not Connected'.mysqli_error());
    }
    $db_user=$_POST['user'];
    $db_pass=$_POST['pass'];
    $query = "SELECT * FROM users where username='$db_user' and password='$db_pass'" ;
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($db_user == $row['username'] && $db_pass == $row['password']){
                
         echo'
         <div id="services" class="services">
            
                <div class="well" style="background-color: rgba(0,0,0,0.05);">
                    <h2>All E-Books:</h2><center>
                    <div class="row">
                        
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="wrapper" style="">
                                <a href="#col" data-toggle="collapse"><span class="group">     
                                    <h4><i class="fa fa-users"></i>Engineering Books <span class="caret more-less"></span></h4>
                                </span></a>
                                </div>
                                <div class="well" id="cse" style="background-color: white;padding-top: 40px;">
                                    <center><h3>-Computer Science Books-</h3></center>
                                    <div class="row" style="padding:10px;color: white !important;">
                                        <div class="well col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="waste/cn.pdf" target="_blank"><img class="img-rounded" src="comp.jpg" alt="Image"></a>
                                            <h4>Computer Networks</h4> <h5><b>Author :</b></h5><p><em> Larry L. Peterson</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="waste/pdd.pdf" target="_blank"><img class="img-rounded" src="pdd.jpg" alt="Image"></a>
                                            <h4>Product Design &amp; Development</h4> <h5><b>Author :</b></h5><p><em>David R. Myers1 and Paul J. McWhorter</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="ooad.pdf" target="_blank"><img class="img-rounded" src="ooad.jpg" alt="Image"></a>
                                            <h4>Object Oriented Analysis &amp; Design</h4> <h5><b>Author :</b></h5><p><em>Grady Booch, A.Maksimchuk and Michael W. Engle</em></p>                
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <div class="well col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="waste/CompOverview.pdf" target="_blank"><img class="img-rounded" src="waste/CompOverview.jpg" alt="Image"></a>
                                            <h4>Computer Science-Overview</h4><h5><b>Author :</b></h5><p><em>J. Glenn Brookshear and Addison Wesley</em></p>
                                        </div>

                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="waste/toc.pdf" target="_blank"><img class="img-rounded" src="waste/toc.jpg" alt="Image"></a>
                                            <h4>Computer Science-Overview</h4><h5><b>Author :</b></h5><p><em>J. Glenn Brookshear and Addison Wesley</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;background-color: navajowhite;">
                                            <a href="waste/ant.pdf" target="_blank"><img class="img-rounded" src="waste/ant.jpg" alt="Image"></a>
                                            <h4>Introduction to Number Theory and Algebra</h4><h5><b>Author :</b></h5><p><em>Victor Shoup ANT-Cambridge University Press </em></p>
                                        </div>
                                    </div>
                                    <div id="ece" class="wrapper" style="/*background-color: rgba(23,76,98,0.8);*/padding: 20px -20px -20px 20px;border-top: 2px solid black;">
                                        <center><strong><h3 style="padding-top: 50px;">-Electrical & Electronics Books-</h3></strong></center>
                                        <div class="row" style="padding:10px;">
                                            <div class="well col-md-3 col-sm-3 col-lg-3 wow zoomIn" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/eceimp.pdf" target="_blank"><img class="img-rounded" src="waste/eceimp.jpg" alt="Image"></a>
                                                <h4>Electrical Energy using Power Electronics Systems</h4> <h5><b>Author :</b></h5><p><em> Grzegorz Benysek - Improvement in Power Electronics Systems-Springer</em></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow zoomIn" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/ecemag.pdf" target="_blank"><img class="img-rounded" src="waste/ecemag.jpg" alt="Image"></a>
                                                <h4>Electromagnetics wireless, RF, EM</h4> <h5><b>Author :</b></h5><p><em>Ron Schmitt - Electromagnetics explained</em></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow zoomIn" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/eceimp.pdf" target="_blank"><img class="img-rounded" src="waste/eceimp.jpg" alt="Image"></a>
                                                <h4>Electrical Energy using Power Electronics Systems</h4> <h5><b>Author :</b></h5><p><em> Grzegorz Benysek - Improvement in Power Electronics Systems-Springer</em></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="mech" class="wrapper" style="/*background-color: rgba(23,96,198,0.5);*/padding: 20px -20px -20px 20px;border-top: 2px solid black;">
                                        <center><strong><h3 style="padding-top: 50px;">-Mechanical Eng. Books-</h3></strong></center>
                                        <div class="row" style="padding:10px;">
                                            <div class="well col-md-3 col-sm-3 col-lg-3 wow flipInX" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/gpbook_appcom.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="waste/gpbook_appcom.jpeg" alt="Image"></a>
                                                <h4>Applied Combustion-CRC</h4> <h5><b>Author :</b></h5><p><em> Eugene L. Keating </em></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInX" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/gpbook_bearing.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="waste/gpbook_bearing.jpg" alt="Image"></a>
                                                <h4>Bearing Design in Machinery</h4> <h5><b>Author :</b></h5><p><em> Avraham Harnoy -Tribology and Lubrication-CRC</em></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInX" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;background-color: lightgreen;">
                                                <a href="waste/gpbook_clutcher.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="waste/gpbook_clutcher.jpg" alt="Image"></a>
                                                <h4>Clutches and Brakes_ Design</h4> <h5><b>Author :</b></h5><p><em> William C. Orthwein - Volume 168-CRC</em></p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                    </div>
                    </center>
                </div>
                
                # Click on Google Books
                <div class="well" style="background-color: rgba(0,0,0,0.2);">
                    <img src="gpbook.png" alt="play books"><h2>Google Play Books</h2>
                    <div class="row center-block">
                        
                            <div class="col-md-12 col-lg-12 col-sm-12 container-fluid" style="margin-right: -25px !important;margin-left: -25px !important;">
                                <div class="wrapper" style="">
                                    <a href="#colgpbook" data-toggle="collapse"><span class="group">     
                                        <h4 style="color: blue;"><i class="fa fa-users"></i>Google Books FREE<span class="caret more-less"></span></h4>
                                    </span></a>
                                </div>
                                <div class="well " id="colgpbook" style="background-color: white">
                                    <div class="wrapper container-fluid" style="padding-top: 40px;background-color: rgba(96, 138, 118,1);">
                                    <center><h3 style="color: brown;">-&nbsp;Physical Fitness Books&nbsp;-</h3></center>
                                        <div class="row" style="padding:10px;">                                

                                            <div class="well col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="0.5s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/workout40.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_workout40.jpg" alt="Image"></a>
                                                <h4>(Mens Health Guide) Feff Csatari</h4><br><h5><small>- Your Best Body at 40+ The 4-Week Plan to Get Back in Shape and Stay Fit 
                                                Forever</small></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/eccentric.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_eccentric.jpg" alt="Image"></a>
                                                <h4>Essential of Eccentric Training</h4><br><h5><b>Author :</b></h5><p>Len Kravit , Aron T. Bubbico</p>
                                            </div>
                                            <diV class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="1s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/muscle.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_muscle.jpg" alt="Image"></a>
                                                <h4>Science and Development of Muscle Hypertrophy</h4><br><h5><b>Author :</b></h5><p><small>Brad Schoenfeld</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper container-fluid" style="background-color: rgba(0,0,0,0.6);">
                                        <center><strong><h3 style="color: cyan;padding-top: 50px;">--Cook Recipe Books--</h3></strong></center>
                                        <div class="row" style="padding:10px;">
                                            <div class="well col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="0.6s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/recipe.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_laxmi.jpg" alt="Image"></a>
                                                <h4>Laxmi Khurana - An Indian Housewife recipe book</h4><p><small> -Elliot Right Way Books </small></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/instantcookbook.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_instantcookbook.jpg" alt="Image"></a>
                                                <h4>Instant Pot Pressure Cooker Cookbook</h4><br><h5><b>Author :</b></h5><p><small>Cook, Daniel</small></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3 wow flipInY" data-wow-delay="1s" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/vegcookbook.pdf" target="_blank"><img class="img-rounded img-responsive center-block" src="gpbook_vegcookbook.jpg" alt="Image"></a>
                                                <h4>Vegetarian Cookbook for Beginners</h4><h5><b>Author :</b></h5><p><small> Brenda Fawn</small></p>
                                            </div>

                                        </div>
                                    </div>    
                                </div>  
                                
                            </div> 
                    </div> 
                </div>   
            
         </div>';
        }
    }
     }
     else{
         echo '
            <div id="services" class="services">
            <div class="container">
                <h2 class="wow fadeInTop" data-wow-delay="0.7s">Some Sample Books:</h2>
                <p class="wow fadeInDown" data-wow-delay="0.9s">You can access book by Login with your <b>GMAIL ID</b>.</p>
                <div class="row">
                    <div class="wow fadeInLeft col-lg-3 col-md-3 col-sm-3" data-wow-delay="0.8s" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/cn.pdf" target="_blank"><img class="img-rounded" src="comp.jpg" alt="Image"></a>
                        <h4>Computer Networks</h4> <h5><b>Author :</b></h5><p><em> Larry L. Peterson</em></p>
                    </div>
                    
                    <div class="wow fadeInLeft col-lg-3 col-md-3 col-sm-3" data-wow-delay="1.2s" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/Ben10.pdf" target="_blank"><img class="img-rounded" src="benten.jpg" alt="Image"></a>
                        <h4>BEN 10 Alien Force</h4> <h5><b>Author :</b></h5><p><em>Jason Henderson</em></p>
                    </div>
                    
                    <div class="wow fadeInLeft col-lg-3 col-md-3 col-sm-3" data-wow-delay="1.6s" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/pdd.pdf" target="_blank"><img class="img-rounded" src="pdd.jpg" alt="Image"></a>
                        <h4>Product Design &amp; Development</h4> <h5><b>Author :</b></h5><p><em>David R. Myers1 and Paul J. McWhorter</em></p>
                    </div>
                    
                    <div class="wow fadeInLeft col-lg-3 col-md-3 col-sm-3" data-wow-delay="2s" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/ooad.pdf" target="_blank"><img class="img-rounded" src="ooad.jpg" alt="Image"></a>
                        <h4>Object Oriented Analysis &amp; Design</h4> <h5><b>Author :</b></h5><p><em>Grady Booch, A.Maksimchuk and Michael W. Engle</em></p>
                    </div>
                </div>
            </div>
        </div>
         <div id="terms" class="terms">
            <div class="container-fluid">
                <center><h2>Terms &amp; Conditions:</h2></center>
                <div class="wow zoomIn col-lg-4 col-md-4" data-wow-delay="0.3s" id="left">
                    <img src="salesbooks.jpg" class="img-circle img-responsive center-block" alt="BooksImage">
                </div>
                <div class="wow fadeIn col-md-offset-1 col-lg-offset-1 col-lg-6 col-md-6 col-sm-6" data-wow-delay="0.8s" id="right">
                    <h3>“There is no friend as loyal as a book.” <br><small>― Ernest Hemingway</small></h3><br>
                    <h5>The <b style="cursor: pointer;color: green !important;font-size: 30px;">GandCooperative.cf</b> E-book Website .</h5>
                    <ul>
                        <li>To access the e-book login with your gmail-id .</li>
                        <li>You can request for any type of e-book&nbsp; &nbsp;( Mostly Foreign Author , novel , Magzine )&nbsp;&nbsp; in Post section below and its FREE.</li>
                        <li>Developer will see for your ebook in Post section , if its available then a message will passout to your e-mail id which you used to Log-in.</li>
                        <li>E-mail consist of an link through which you can access your requested e-book.</li>
                        <li>Via that Link you can Download that book.</li>
                    </ul>
                    <bold>NOTE :</bold><p style="color: yellow !important;">You can send your request either by E-mailing to Developer mail or you can write it in Post section.</p>
                </div>
            </div>
        </div>
        
         ';
     }
?>
        
        <!-- Sales Section -->
        <!--<div id="terms" class="terms">
            <div class="container-fluid">
                <center><h2>Terms &amp; Conditions:</h2></center>
                <div class="col-lg-4 col-md-4" id="left">
                    <img src="salesbooks.jpg" class="img-circle img-responsive center-block" alt="BooksImage">
                </div>
                <div class="col-md-offset-1 col-lg-offset-1 col-lg-6 col-md-6" id="right">
                    <h3>“There is no friend as loyal as a book.” <br><small>― Ernest Hemingway</small></h3><br>
                    <h5>The <b style="cursor: pointer;color: deepskyblue;font-size: 30px;">GandCooperative.cf</b> E-book Website .</h5>
                    <ul>
                        <li>To access the e-book login with your gmail-id .</li>
                        <li>You can request for any type of e-book&nbsp; &nbsp;( Mostly Foreign Author , novel , Magzine )&nbsp;&nbsp; in Post section below and its FREE.</li>
                        <li>Developer will see for your ebook in Post section , if it's available then a message will passout to your e-mail id which you used to Log-in.</li>
                        <li>E-mail consist of an link through which you can access your requested e-book.</li>
                        <li>Via that Link you can Download that book.</li>
                    </ul>
                    <bold>NOTE :</bold><p>You can send your request either by E-mailing to Developer mail or you can write it in Post section.</p>
                </div>
            </div>
        </div>-->
        
        <!-- Pricing > Google play books  -->
        <!--<div class="gpbook" id="gpbook">
            <div class="container-fluid">
                <div class="row">
                <img src="gpbook.png" alt="play books"><h2>Google Play Books</h2><br><p>Try some of our FREE Google Play Books Collection just only for you</p>
                <div class="col-lg-4 col-md-4 ">
                    <div class="packages" id="flex1">
                        <img class="img-rounded img-responsive center-block" src="gpbook_ipad.jpg" alt="image">
                        <h4>The iPad Handbook<br><small>-Magzine Collection</small></h4>
                        <a href="waste/ipad.pdf" target="_blank"><button class="btn btn-success btn-default">Read</button></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="packages" id="flex2">
                        <img class="img-rounded img-responsive center-block" src="gpbook_laxmi.jpg" alt="Image">
                        <h4>Laxmi Khurana - An Indian housewife's recipe book<br><small>-Elliot Right Way Books</small></h4>
                        <a href="waste/recipe.pdf" target="_blank"><button class="btn btn-success btn-default">Read</button></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="packages" id="flex3">
                        <img class="img-rounded img-responsive center-block" src="gpbook_workout40.jpg" alt="Image">
                        <h4>(Mens Health Guide) Feff Csatari <br><small>- Your Best Body at 40+ The 4-Week Plan to Get Back in Shape and Stay Fit 
                        Forever</small></h4>
                        <a href="waste/workout40.pdf" target="_blank"><button class="btn btn-success btn-default">Read</button></a>
                    </div>
                </div>
                <button type="button" class="btn btn-default collapsed set" data-toggle="collapse" data-target=".packages-collapse" aria-expanded="false" aria-controls="navbar" onclick="hide_btn()"><a>See More+</a></button>
                <div class="col-lg-4 col-md-4">
                    <div class="packages-collapse collapse packages" id="flex4" aria-expanded="false" style="height: 1px;">
                        <img class="img-rounded img-responsive center-block" src="gpbook_workout40.jpg" alt="Image">
                        <h4>(Mens Health Guide) Feff Csatari <br><small>- Your Best Body at 40+ The 4-Week Plan to Get Back in Shape and Stay Fit 
                        Forever</small></h4>
                        <a href="waste/workout40.pdf" target="_blank"><button class="btn btn-success btn-default">Read</button></a>
                    </div>
                </div>
            
                </div>    
            </div>
        </div>-->
     <!-- Team Developer -->
     <div class="developer" id="developer">
        <div class="container">
            <h2 class="text-center" style="margin-top: 70px;">--Meet Our Developer--</h2>
            <div class="row">
                <div class="wow flip col-lg-6 col-md-6 col-sm-6 col-md-offset-3 col-lg-offset-3 col-sm-offset-3" data-wow-delay="0.6s" style="margin-top: 60px;">
                    <div class="our-team-main">
                        <div class="team-front" style="align-content: center;">
                            <img class="img-fluid" src="waste/developer.png" alt="Developer">
                            <h3>Gagan Kumar Soni</h3>
                            <p>Web Developer</p><span class="glyphicon glyphicon-circle-arrow-down"></span>
                        </div>
                        <div class="team-back">
                            <span><center>This Website developed by keeping HTML , CSS , JAVASCRIPT , BOOTSTRAP , SQL and PHP.<br>Help us to improve Website.<br>So Kindly <b>Send your feedback</b> to developer id.<br><br><br><strong><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;E-mail id:</strong><small>gandcooperative0054@gmail.com</small><br><br><br><br><br></center></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
     <!-- Contact Form -->
     
     <?php
     if(isset($_POST['submit'])){
        if(isset($_GET['submit']) && isset($_GET['p_user']) && isset($_GET['p_email'])){
            $con=mysqli_connect('sql109.epizy.com','epiz_24080689','hmfIlDCN','epiz_24080689_login');
            if(!$p_con){
                die('Not Connected'.mysqli_error());
            }
            
            $p_username = $_GET['p_user'];
            $p_emailid = $_GET['p_email'];
            $p_number = $_GET['phone'];
            $p_txtarea = $_GET['txtarea'];
            
            $p_query = "INSERT INTO post(fullname , email , phoneno , request) VALUES('$p_username','$p_emailid','$p_number','$p_txtarea') ";
            
            $p_result = mysqli_query($p_con , $p_query);
            if(!$p_result){
                echo "<script type='text/javascript'>alert(Upload Cancel Server Down);</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Uploaded Successfully!  We will inform you soon on your E-Mail id.');</script>";
            }
        }
     }
     else if(isset($_GET['submit'])){
         echo "<script type=text/javascript> alert('Please Log-in before to make any request'); </script>";
     }
     else{
     }
     
     ?>
     
     
     <div class="contact" id="contact">
         <div class="container">
             <div class="row">
                 <h2 class="wow bounceInDown" data-wow-delay="0.4s">Post Question or Request Book:</h2>
                 <p class="wow bounceInUp" data-wow-delay="0.6s">In case you want any other book then fill that form with your valid email-id where we will give you the link to download that particular book.<br>But this process can take sometime.</p>
                 <form method="get" action="">
                     <div class="col-lg-6 col-md-6 col-sm-6">
                         <div class="wow fadeInUp input-group input-group-lg" data-wow-delay="1.0s">
                             <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-user"></i></span>
                             <input type="text" name="p_user" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
                         </div>
                         <div class="wow fadeInUp input-group input-group-lg" data-wow-delay="1.2s">
                             <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-envelope"></i></span>
                             <input type="text" name="p_email" class="form-control" aria-describedby="sizing-addon1" placeholder="E-Mail Address">
                         </div>
                         <div class="wow fadeInUp input-group input-group-lg" data-wow-delay="1.4s">
                             <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-phone"></i></span>
                             <input type="tel" name="phone" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number">
                         </div>

                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="wow fadeInUp input-group" data-wow-delay="1.6s">
                            <textarea name="txtarea" cols="80" rows="6" class="form-control" placeholder="Write Question or request for any Book"></textarea>
                        </div>
                        <button name="submit" type="submit" class="wow fadeInUp btn btn-lg" data-wow-delay="1.8s">Submit Your Message</button>
                     </div>
                </form>
             </div>
         </div>
     </div>
     <!-- Footer -->
     <div class="footerf" id="footerf" style="background-color: #222222;color: #cccccc;padding: 30px;">
         <div class="container">
             <div class="row">
                 
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <h4>Contact Us:</h4>
                     <p><i class="fas fa-home"></i>  13-Street Vyasarpadi Chennai</p>
                     <p><i class="fas fa-envelope"></i>  gandcooperative0054@gmail.com</p>
                     <p><i class="fas fa-phone"></i>  +91 7727 899 333</p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <h4>About Us:</h4>
                     <p>Our aim is to make studies Digitially and Effectively.</p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <h4 style="margin-bottom: 40px;">Share:</h4>
                     <p class="wow rubberBand" data-wow-delay="0.6s" ><center><a href="https://wa.me/?text=Give it a shot !  GandCooperative e-book website with free Google Play Books  http://gandcooperative.cf/ebook/"><img src="whatsapp.png" class="social" alt="Whatsapp Icon"></a><br>Click on the Image to Share it and get excited Offers.</center></p>
                 </div>
                 
             </div>
             <div class="row">
                <div class="col-lg-12">
                 <p style="padding-top: 20px;"><small>Copyright &copy; gandcooperative.cf 2019</small></p>
                </div>
                <!-- /.col-lg-12 -->
             </div>

         </div>
     </div>
     
     
     
     
     
     
     
     <script src="js/wow.min.js"></script>
     <script>
              new WOW().init();
     </script>
    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
</html>