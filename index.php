<?php  
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Homepage</title>
  <link rel="icon" href="assets/img/office-material.svg">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="assets/img/office-material.svg" width="40" height="30" alt="">
      E-Sides
    </a>
  </nav>
  
  <!-- Container -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 contain1">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-10 mx-auto">
                  <h1 class="text-light" style="font-size: 80px;">E-Sides</h1>
                 </div>
              </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 contain2">
          <div class="container h-100">
            <div class="row align-items-center h-100">
              <div class="col-md-12 mx-auto">
                <div class="jumbotron p-md-4 shadow">
                  <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="login-tab" data-toggle="pill" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="sign-up-tab" data-toggle="pill" href="#sign-up" role="tab" aria-controls="sign-up" aria-selected="false">Sign-Up</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                      <div class="card">
                        <div class="card-body">
                          <form action="login.php" method="POST">
                            <div class="form-group">
                              <label for="user">Username / NIP</label>
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
                    <div class="tab-pane fade" id="sign-up" role="tabpanel" aria-labelledby="sign-up-tab">
                      <div class="card">
                        <div class="card-body">
                          <form method="POST" action="data_add_action_p.php">
                            <div class="form-group">
                              <label for="NIP">NIP</label>
                              <input type="text" class="form-control" id="NIP" name="nip">
                            </div>
                            <div class="form-group">
                              <label for="Nama">Nama</label>
                              <input type="text" class="form-control" id="Nama" name="nama">
                            </div>
                            <div class="form-group">
                              <label for="Pass">Pass</label>
                              <input type="password" class="form-control" id="Pass" name="password1">
                            </div>
                            <div class="form-group">
                              <label for="Alamat">Alamat</label>
                              <input type="text" class="form-control" id="Alamat" name="alamat">
                            </div>
                            <div class="form-group">
                              <label for="Jabatan">Jabatan</label>
                              <select class="form-control" name="jabatan" id="Jabatan">
                                <option>Kepala Desa</option>
                                <option>Sekretaris Desa</option>
                                <option>KAUR PEM</option>
                                <option>KAUR PEMBANGUNAN</option>
                                <option>KAUR KESRA</option>
                                <option>KAUR KEU</option>
                                <option>KAUR UMUM</option>
                              </select>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-12">
                                <div class="float-right">
                                  <input type="submit" value="Daftar" class="btn btn-primary">
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
            </div>
          </div>
        </div>

	<!-- JavaScript -->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>