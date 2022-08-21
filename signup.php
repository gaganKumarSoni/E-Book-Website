<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["username"])){
            echo "<script type='text/javascript'>alert('Username Required');
            </script>";   
        }
        else{
            #$GLOBALS['u_user']=test_input($_POST["username"]);
            if(!preg_match("/^[a-zA-Z]*$/",$_POST["username"])){
                echo "<script type='text/javascript'>alert('Invalid Username correct it');</script>";   
            }
            else{
                $u_user=$_POST["username"];            
                if(empty($_POST['email'])){
                    echo "<script type='text/javascript'>alert('Invalid Email-Id correct it');</script>";      
                }
                else{
                    #$u_mail = test_input($_POST["email"]);
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    echo "<script type='text/javascript'>alert('Invalid email correct it');</script>"; 
                    }
                    else{
                        if(isset($_POST['submit'])){
                            $con=mysqli_connect('sql109.epizy.com','epiz_24080689','hmfIlDCN','epiz_24080689_login');
                            if(!$con){
                                die('Connection Error'.mysqli_error);
                            }

                            #$u_user=$_POST['username'];
                            $u_mail=$_POST['email'];
                            $u_pass=$_POST['password'];

                            $query = "INSERT INTO users(username, email, password) VALUES('$u_user','$u_mail','$u_pass') ";
                            $result = mysqli_query($con,$query);
                            if(!$result){
                                echo "<script type='text/javascript'>alert('Registered Successfully! \n You can Now Login');
                                window.location='index.php';
                                </script> ";
                            }
                            /*else{
                                echo "<script type='text/javascript'>alert('You Registered Successfully!');</script>";
                                header('Location: index.php');
                                echo "<script type='text/javascript'>alert('You Registered Successfully!<br>You can Login Now');</script>";
                            }*/
                            else {
                                echo "<script type='text/javascript'>alert('Registered Successfully! \n You can Now Login');
                                window.location='index.php';
                                </script>";
                                header("Location: login.php");
                            }
                        }
                        
                    }
                }
            }
        }


    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User Sign-Up</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web\css\all.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.9.0-web\css\fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
<div class="container" >
    <div class="col-md-6 col-lg-6 col-sm-6 col-md-offset-3 col-lg-offset4 col-sm-offset-2" style="padding: 5px 2px;">

        <!--Header-->
        <div class="form-header blue-gradient" style="padding: 5px 5px;">
            <center><h3><i class="fa fa-user"></i> Register:</h3></center>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!--Body-->
            <div class="md-form">
                <i class="fa fa-user prefix"></i>
                <input type="text" name="username" class="form-control" style="background-color: khaki;" Required>
                <label>Your name*</label>
            </div>
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" name="email" class="form-control" style="background-color: khaki;" Required>
                <label>Your email*</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix"></i>
                <input type="password" name="password" class="form-control" style="background-color: khaki;" Required>
                <label >Your password*</label>
            </div>

            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success btn-block">Sign up</button>
            </div>
            
        </form>    
    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</html>