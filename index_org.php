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

<button type='button' role='button' aria-haspopup='true' class='btn btn-warning dropdown-toggle' data-toggle='dropdown' style='color: white;'>
                                    <span class='glyphicon glyphicon-user'></span> &nbsp;&nbsp; {$db_user}&nbsp; <span class='caret'></span>
                                </button>
                                

-->
                    </button>
                    <a class="navbar-brand col-sm-10" href="#"><img src="leavelogo.png" alt="Logo"></a>
                    <!--<a  class="navbar-brand" href="#">E-Books</a>-->  
                </div>
                <div class="navbar-collapse collapse navbar-right" >
                  <ul class="nav navbar-nav">
                    
                    <?php
                      if(isset($_POST['submit'])){
                        $con=mysqli_connect('localhost','root','','login');
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
                                echo "<li class='dropdown' style='cursor: pointer;'>
                                <a class='dropdown-toggle' data-toggle='dropdown' style='color: white;'><span class='glyphicon glyphicon-user'></span> &nbsp;&nbsp; {$db_user}&nbsp; <span class='caret'></span></a>
                                <ul class='dropdown-menu'>
                                    <li><a> <i class='glyphicon glyphicon-user'></i> &nbsp;<small>{$db_user}</small> </a> </li>
                                    <li><a><i class='glyphicon glyphicon-envelope'></i>&nbsp; &nbsp;<small>{$row['email']}</small> </a></li>
                                    <li><a href='index.php'><i class='glyphicon glyphicon-log-out'></i>&nbsp;&nbsp;<small>Log-Out</small></a></li>
                                </ul>
                                </li>";
                            }
                            else{
                                echo "<h1 style='color: red;'>Invalid Creditionals</h1>";
                            }
                        }else{
                            echo '<li><a style="color: white;" href="#header">Home</a></li>
                            <li><a style="color: white;" href="#services">sample books</a></li>
                            <li><a style="color: white;" href="#terms">terms to use</a></li>
                            <li><a style="color: white;" href="#gpbook">Google Play Books</a></li>
                            <li><a style="color: white;" href="#developer">Developer</a></li>
                            <li><a style="color: white;" href="#contact">Contact</a></li>
                            <li><a href="login.php" style="color: white;">Login</a></li>';
                            $message = "Invalid Username And Password";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                      }
                      else{
                    
                        echo '<li><a style="color: white;" href="#header">Home</a></li>
                        <li><a style="color: white;" href="#services">sample books</a></li>
                        <li><a style="color: white;" href="#terms">terms to use</a></li>
                        <li><a style="color: white;" href="#gpbook">Google Play Books</a></li>
                        <li><a style="color: white;" href="#developer">Developer</a></li>
                        <li><a style="color: white;" href="#contact">Contact</a></li>
                        <li><a href="login.php" style="color: white;">Login</a></li>';
                
                      }
                    ?>
                    
                      
                    <!--<li><a style="color: white;" href="#header">Home</a></li>
                    <li><a style="color: white;" href="#services">sample books</a></li>
                    <li><a style="color: white;" href="#terms">terms to use</a></li>
                    <li><a style="color: white;" href="#gpbook">Google Play Books</a></li>
                    <li><a style="color: white;" href="#contact">Contact</a></li>
                    <li><a href="login.html" style="color: white;">Login</a></li>-->
                  </ul>
              </div>

             </div>     
         </div> 
     
    <?php
        if(isset($_POST['submit'])){
               
            $con=mysqli_connect('localhost','root','','login');
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
                                         <center><h1>&nbsp;E-BOOKS<span><sup>&reg;</sup></span></h1><h3>Read books Anytime Anywhere!</h3><img class="img-responsive" src="ebooklogo.png" alt="Website Logo"></center>
                                    </div>
                                    <div class="flex-container">
                                        <div class="btn-grp">
                                            <button id="aa" class="flex1 btn-success btn btn-lg btn-primary" href="#terms">Explore Books</button>
                                            <button id="bb" class="flex2 btn-danger btn btn-lg btn-primary">Upoad Books</button>
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
                                         <center><h1>&nbsp;E-BOOKS<span><sup>&reg;</sup></span></h1><h3>Read books Anytime Anywhere!</h3><img class="img-responsive" src="ebooklogo.png" alt="Website Logo"></center>
                                    </div>
                                    <div class="flex-container">
                                        <div class="btn-grp">
                                            <a id="aa" class="flex1 btn-success btn btn-lg btn-primary" href="#terms">Explore Books</a>
                                            <button id="bb" class="flex2 btn-danger btn btn-lg btn-primary">Upoad Books</button>
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
     if(isset($_POST['submit'])){
         echo'
         <div id="services" class="services">
            <div class="container">
                <div class="well">
                    <h2>All E-Books:</h2>
                    <div class="row">
                        Jai Siya RAM
                        
                            <div class="col-md-12">
                                <div class="wrapper" style="">
                                <a href="#col" data-toggle="collapse"><span class="group">     
                                    <h4><i class="fa fa-users"></i>Engineering Books <span class="caret more-less"></span></h4>
                                </span></a>
                                </div>
                                <div class="well collapse" id="col" style="background-color: white">
                                    <center><h3>------Computer Science Books------</h3></center>
                                    <div class="row" style="padding:10px;">
                                        <div class="well col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="waste/cn.pdf" target="_blank"><img class="img-rounded" src="comp.jpg" alt="Image"></a>
                                            <h4>Computer Networks</h4> <h5><b>Author :</b></h5><p><em> Larry L. Peterson</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="waste/pdd.pdf" target="_blank"><img class="img-rounded" src="pdd.jpg" alt="Image"></a>
                                            <h4>Product Design &amp; Development</h4> <h5><b>Author :</b></h5><p><em>David R. Myers1 and Paul J. McWhorter</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="ooad.pdf" target="_blank"><img class="img-rounded" src="ooad.jpg" alt="Image"></a>
                                            <h4>Object Oriented Analysis &amp; Design</h4> <h5><b>Author :</b></h5><p><em>Grady Booch, A.Maksimchuk and Michael W. Engle</em></p>                
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <div class="well col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="waste/CompOverview.pdf" target="_blank"><img class="img-rounded" src="waste/CompOverview.jpg" alt="Image"></a>
                                            <h4>Computer Science-Overview</h4><h5><b>Author :</b></h5><p><em>J. Glenn Brookshear and Addison Wesley</em></p>
                                        </div>

                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="waste/toc.pdf" target="_blank"><img class="img-rounded" src="waste/toc.jpg" alt="Image"></a>
                                            <h4>Computer Science-Overview</h4><h5><b>Author :</b></h5><p><em>J. Glenn Brookshear and Addison Wesley</em></p>
                                        </div>
                                        <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                            <a href="waste/ant.pdf" target="_blank"><img class="img-rounded" src="waste/ant.jpg" alt="Image"></a>
                                            <h4>Introduction to Number Theory and Algebra</h4><h5><b>Author :</b></h5><p><em>Victor Shoup ANT-Cambridge University Press </em></p>
                                        </div>
                                    </div>
                                    <div class="wrapper container-fluid" style="background-color: rgba(23,76,98,0.8);padding: 20px -20px -20px 20px;">
                                        <center><strong><h3 style="color: cyan;padding-top: 50px;">------Electrical & Electronics Books------</h3></strong></center>
                                        <div class="row" style="padding:10px;">
                                            <div class="well col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/eceimp.pdf" target="_blank"><img class="img-rounded" src="waste/eceimp.jpg" alt="Image"></a>
                                                <h4>Electrical Energy using Power Electronics Systems</h4> <h5><b>Author :</b></h5><p><em> Grzegorz Benysek - Improvement in Power Electronics Systems-Springer</em></p>
                                            </div>
                                            <div class="well col-md-offset-1 col-lg-offset-1 col-md-3 col-sm-3 col-lg-3" style="cursor: pointer;padding-top: 50px;">
                                                <a href="waste/ecemag.pdf" target="_blank"><img class="img-rounded" src="waste/ecemag.jpg" alt="Image"></a>
                                                <h4>Electromagnetics wireless, RF, EM</h4> <h5><b>Author :</b></h5><p><em>Ron Schmitt - Electromagnetics explained</em></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                    
                </div>
                
                #Google playbooks
                <div class="well">
                
                </div>
            </div>
         </div>
         ';
     }
     else{
         echo '
            <div id="services" class="services">
            <div class="container">
                <h2>Some Sample Books:</h2>
                <p>You can access book by Login with your <b>GMAIL ID</b>.</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/cn.pdf" target="_blank"><img class="img-rounded" src="comp.jpg" alt="Image"></a>
                        <h4>Computer Networks</h4> <h5><b>Author :</b></h5><p><em> Larry L. Peterson</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/Ben10.pdf" target="_blank"><img class="img-rounded" src="benten.jpg" alt="Image"></a>
                        <h4>BEN 10 Alien Force</h4> <h5><b>Author :</b></h5><p><em>Jason Henderson</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/pdd.pdf" target="_blank"><img class="img-rounded" src="pdd.jpg" alt="Image"></a>
                        <h4>Product Design &amp; Development</h4> <h5><b>Author :</b></h5><p><em>David R. Myers1 and Paul J. McWhorter</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="ooad.pdf" target="_blank"><img class="img-rounded" src="ooad.jpg" alt="Image"></a>
                        <h4>Object Oriented Analysis &amp; Design</h4> <h5><b>Author :</b></h5><p><em>Grady Booch, A.Maksimchuk and Michael W. Engle</em></p>
                    </div>
                </div>
            </div>
        </div>
         ';
     }
?>
        <!--<div id="services" class="services">
            <div class="container">
                <h2>Some Sample Books:</h2>
                <p>You can access book by Login with your <b>GMAIL ID</b>.</p>
                <div class="row">
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/Computer Networks_ A Systems Approach.pdf" target="_blank"><img class="img-rounded" src="comp.jpg" alt="Image"></a>
                        <h4>Computer Networks</h4> <h5><b>Author :</b></h5><p><em> Larry L. Peterson</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="waste/Ben10.pdf" target="_blank"><img class="img-rounded" src="benten.jpg" alt="Image"></a>
                        <h4>BEN 10 Alien Force</h4> <h5><b>Author :</b></h5><p><em>Jason Henderson</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="../Product%20Design%20and%20Development.pdf" target="_blank"><img class="img-rounded" src="pdd.jpg" alt="Image"></a>
                        <h4>Product Design &amp; Development</h4> <h5><b>Author :</b></h5><p><em>David R. Myers1 and Paul J. McWhorter</em></p>
                    </div>
                    
                    <div class="col-lg-3 col-md-3" style="cursor: pointer;padding-top: 20px;">
                        
                        <a href="../Object-oriented%20analysis%20and%20design%20with%20application.pdf" target="_blank"><img class="img-rounded" src="ooad.jpg" alt="Image"></a>
                        <h4>Object Oriented Analysis &amp; Design</h4> <h5><b>Author :</b></h5><p><em>Grady Booch, A.Maksimchuk and Michael W. Engle</em></p>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Sales Section -->
        <div id="terms" class="terms">
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
                        <li>You can request for any type of e-book&nbsp; &nbsp;( Mostly Foreign Author , novel , Magzine )&nbsp;&nbsp; in comment section below but you have to pay Rs.50 to access.</li>
                        <li>Developer will see for your ebook in comment section , if it's available then a message will passout to your e-mail id which you used to sign-in.</li>
                        <li>After the payment process is over , one link is provided to your e-mail id (which you used to login).</li>
                        <li>Via that Link you can Download that book.</li>
                    </ul>
                    <bold>NOTE :</bold><p>You can send your request either by E-mailing to Developer mail or you can write it in comment section.</p>
                </div>
            </div>
        </div>
        
        <!-- Pricing > Google play books  -->
        <div class="gpbook" id="gpbook">
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
        </div>
     <!-- Team Developer -->
     <div class="developer" id="developer">
        <div class="container">
            <h2 class="text-center">--Meet Our Developer--</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-md-offset-3 col-lg-offset-3 col-sm-offset-3">
                    <div class="our-team-main">
                        <div class="team-front" style="align-content: center;">
                            <img class="img-fluid" src="waste/developer.png" alt="Developer">
                            <h3>Gagan Kumar Soni</h3>
                            <p>Web Designer</p><span class="glyphicon glyphicon-circle-arrow-down"></span>
                        </div>
                        <div class="team-back">
                            <span><center>This Website developed by keeping HTML , CSS , JAVASCRIPT , BOOTSTRAP and PHP.<br> Kindly <b>Send your feedback</b> to developer id.<br><br><br><strong><i class="glyphicon glyphicon-envelope"></i>&nbsp;&nbsp;E-mail id:</strong><small>gandcooperative0054@gmail.com</small><br><br><br><br><br></center></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
     <!-- Contact Form -->
     <div class="contact" id="contact">
         <div class="container">
             <div class="row">
                 <h2>Post Question or Request Book:</h2>
                 <p>In case you want any other book then fill that form with your valid email-id where we will give you the link to download that particular book.<br>But this process can take sometime.</p>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="input-group input-group-lg">
                         <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-user"></i></span>
                         <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="Full Name">
                     </div>
                     <div class="input-group input-group-lg">
                         <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-envelope"></i></span>
                         <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="E-Mail Address">
                     </div>
                     <div class="input-group input-group-lg">
                         <span class="input-group-addon" id="sizing-addon1"><i class="fas fa-phone"></i></span>
                         <input type="tel" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="Phone Number">
                     </div>
                
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="input-group">
                        <textarea cols="80" rows="6" class="form-control" placeholder="Write Question or request for any Book"></textarea>
                    </div>
                    <button class="btn btn-lg">Submit Your Message</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- Footer -->
     <div class="footer" id="footer">
         <div class="container">
             <div class="row">
                 
                 <div class="col-lg-4 col-md-4 col-sm-4">
                     <h3>Contact Us:</h3>
                     <p></p>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-4">
                 </div>
                 
             </div>
         </div>
     </div>
     
     
     
     
     
     
     
     
    </body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
</html>