<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>login</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/all.min.css"> -->
   <!-- <link rel="stylesheet" href="css/fontawesome.min.css"> -->

</head>

<div class="card-footer text-center py-3">
  <p style="position: absolute; bottom: -6; left: 20px; margin-bottom: -5; padding-bottom: 1;">Software desarrollado y mantenido por Rodolfo Chan</p>
</div>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">


<img src="assets/images/logon.png" alt="" width="220" height="130" class="highlight-lines">

		 	</div>
		  <div class="card-title text-uppercase text-center py-3">BIENVENIDO</div>
      <?php
      include "config.php";
      include "controlador/controlador_login.php";
      ?>
         <form method="post" action="">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Username</label>
			   <div class="position-relative has-icon-right">

          <input id="usuario" type="text" class="form-control input-shadow" name="usuario" placeholder="Ingrese Nombre de usuario">


				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
        <div class="form-group">
    <label for="exampleInputPassword" class="sr-only">Password</label>
    <div class="position-relative has-icon-right">
        <input type="password" id="input" class="form-control input-shadow" name="password" placeholder="Ingrese la contraseña">

        <div class="form-control-position" style="left: 0;">
        </div>

        <div class="form-control-position" style="right: 0; cursor: pointer;" onclick="togglePasswordVisibility()">
            <i class="icon-eye" id="togglePasswordIcon"></i>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("input");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>




			<div class="form-row">
			 <div class="form-group col-6">
			   <div class="icheck-material-white">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">RECUÉRDAME</label>
			  </div>
			 </div>
			</div>
      <input name="btningresar" class="btn btn-light btn-block" type="submit" value="INICIAR SESION">
			 
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
      <h6>Dzonot Carretero 2021-2024</h6>

		  </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <script src="js/fontawesome.js"></script>

</body>

<script src="http://localhost/sweetalert2-11.10.5/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="http://localhost/sweetalert2-11.10.5/sweetalert2.css">
<script>
  Swal.fire({
    html: `
      <div class="custom-swal-content">
        <img src="assets/images/logoti.png" alt="Logo de la empresa" class="swal-logo">
        <h4 style="color: #9D0D01;">AVISO</h4>

        <p>Bienvenido. Por favor, ten en cuenta que la alteración no autorizada de la información contenida en este sistema está estrictamente prohibida. Cualquier intento de modificar, acceder indebidamente o interferir con los datos almacenados constituirá una violación de nuestros términos de uso y podría estar sujeto a acciones legales.</p>
      </div>`,
    customClass: {
      popup: 'small-font', // Añade una clase CSS para personalizar el tamaño de fuente
    }
  });
</script>

<!-- ... (resto de tu código) ... -->


<!-- ... (resto de tu código) ... -->


</html>
