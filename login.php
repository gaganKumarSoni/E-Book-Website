<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
  </style>
</head>
<body>

<div class="container" style="margin-top: 50px ;">
    <div class="col-md-6 col-lg-6 col-sm-6 col-md-offset-3 col-lg-offset4 col-sm-offset-2">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            
            
            
          <form method="POST" action="index.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="user" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="pass" placeholder="Enter password">
            </div>
            <div class="form-group">
              <!--<label for="email"><span class="glyphicon glyphicon-email"></span> E-mail</label>-->
              <input type="hidden" class="form-control" name="email" placeholder="Enter E-mail">
            </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
            
            
        </div>
        <div class="modal-footer">
          <p>New User? <a href="signup.php">Sign Up</a></p>
        </div>
      </div>
      
    </div>
</div>
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>
