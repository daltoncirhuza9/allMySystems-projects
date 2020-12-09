<!DOCTYPE html>
<html lang="en">

<?php
 if (isset($_POST['submit'])){
 $Nom=$_POST['nom'];
 $postn=$_POST['postNom'];
 $uti=$_POST['utilisateur'];
 $paa=sha1($_POST['passwordi']);


 //creating mysql connection
 $connection=@mysqli_connect("localhost","root","");
 $db=@mysqli_select_db($connection,"Yougouslavie") or die (@mysqli_error($connection));
 $statement="INSERT INTO  utilisateur VALUES(0,'$Nom','$postn','$uti','$paa')";
 $result=@mysqli_query($connection,$statement) or die (mysqli_error($connection));
 $close=@mysqli_close($connection);


 header("location:login.php");

 


 }



?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user"  action="register.php"method="post">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="nom" class="form-control form-control-user" id="exampleFirstName" placeholder="Nom" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="postNom" class="form-control form-control-user" id="exampleLastName" placeholder="Post Nom" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="text" name="utilisateur" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nom d'utilisatuer" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="password" name="passwordi" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="mot de pass" required>
                    </div>
                  </div>
                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                <!-- <a href="login.php" class="btn btn-primary btn-user btn-block" disabled=""> -->
                  Register Account
                </a>
                </button>

              </form>
              <hr>
              <div class="text-center">
                <a class="small" type="submit" name="submit" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
