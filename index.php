<?php  
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="assets/img/office-material.svg" width="40" height="30" alt="">
      E-Arsip
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  
  <!-- Container -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-8 contain1">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-10 mx-auto">
                  <h1 class="text-light">E-Arsip</h1>
                 </div>
              </div>
          </div>
        </div>
        <div class="col-md-4 contain2">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12 mx-auto">
                <div class="jumbotron p-5 shadow">
                  <form action="login.php" method="POST">
                    <div class="form-group">
                      <label for="user">Username</label>
                      <input type="text" class="form-control" name="username" aria-describedby="username" id="user">
                    </div>
                    <div class="form-group">
                      <label for="pass">Password</label>
                      <input type="password" class="form-control" name="password" id="pass">
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Log In">
                  </form>
                </div>
              </div>
              </div>
            </div>
            </div>
          </div>
        </div>

	<!-- JavaScript -->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>