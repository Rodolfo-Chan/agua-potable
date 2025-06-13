<?php
session_start();
if (empty($_SESSION["id"])){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Servicio</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <?php include('navegacion.php'); ?>

   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    
     
    <h4>Bienvenido <?php

echo $_SESSION["nombre"]." ".$_SESSION["apellido"];

?></h4>
  </ul>




  <ul class="navbar-nav align-items-center right-nav-link">
  <a class="btn btn-outline-danger" href="controlador/controlador_cerrar_sesion.php">Salir
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
<script src="http://localhost/sweetalert2-11.10.5/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="http://localhost/sweetalert2-11.10.5/sweetalert2.css">

<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
    <br>
    <br>
    <div>
      <a class="btn btn-success" href="./nuevo_servicio.php">Nuevo servico 
        <i class="fa fa-plus"></i> 
      </a>
    </div>
    <br>
    <h2>LISTA CATEGORIA SERVICIOS</h2>
    <div class="row mt-3">
      <div class="col-lg-12">
        <div class="card">
          <main>
            <div class="table-responsive">
              <table class="table table-sm table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th class="sort asc" style="color: white; background-color: #212121;">ID</th>
                    <th class="sort asc" style="color: black; background-color: #CCCCCC;">Nombre</th>
                    <th class="sort asc" style="color: black; background-color: #CCCCCC;">Descripción</th>
                    <th class="sort asc" style="color: black; background-color: #CCCCCC;">Precio</th>
                  </tr>
                </thead>
                <?php
                // Incluir el archivo de configuración
                require 'config.php';

                // Consulta SQL para obtener la lista de servicios
                $sql = "SELECT `id_tipo_de_servicio`, `nombre`, `descripcion`, `precio` FROM `tipos_de_servicio`";
                $result = $conn->query($sql);

                // Verificar si la consulta fue exitosa
                if ($result->num_rows > 0) {
                  echo '<tbody>';
                  while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row["id_tipo_de_servicio"] . '</td>';
                    echo '<td>' . $row["nombre"] . '</td>';
                    echo '<td>' . $row["descripcion"] . '</td>';
                    echo '<td>' . $row["precio"] . '</td>';
                    echo '<td><button class="btn btn-info" onclick="openEditModal(' . $row["id_tipo_de_servicio"] . ')">Edit</button></td>';

                    echo '</tr>';
                  }
                  echo '</tbody>';
                } else {
                  echo "<tr><td colspan='4'>No se encontraron resultados</td></tr>";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
              </table>
            </div>
          </main>
         
        </div>
      </div>
    </div>
  </div>
</div>



    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      </div>
    </div>
    </div><!--End Row-->

   <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
  
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	  <!--Start footer-->
	
    
	<!--End footer-->
	
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
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

      </div>
    </div>
  </div>
</div>

<!-- Modal for Editing Services -->
<div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editServiceModalLabel">Editar Servicio</h5>
        
      </div>
      <div class="modal-body">
        <!-- Form for Editing Service -->
        <form id="editServiceForm">
          <div class="form-group">
            <label for="editServiceName">Nombre:</label>
            <input type="text" class="form-control" id="editServiceName" name="editServiceName" required>
          </div>
          <div class="form-group">
            <label for="editServiceDescription">Descripcion:</label>
            <textarea class="form-control" id="editServiceDescription" name="editServiceDescription" required></textarea>
          </div>
          <div class="form-group">
            <label for="editServicePrice">Precio:</label>
            <input type="number" class="form-control" id="editServicePrice" name="editServicePrice" required>
          </div>
          <input type="hidden" id="editServiceId" name="editServiceId">
          <button type="button" class="btn btn-primary" onclick="saveEditedService()">Guardar</button>
          <button type="button" class="btn btn-secondary" onclick="cerrarModal()">Cerrar</button>

        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function cerrarModal() {
    $('#editServiceModal').modal('hide');
  }

  function openEditModal(serviceId) {
    $.ajax({
      url: 'get_service_details.php',
      method: 'GET',
      data: { serviceId: serviceId },
      success: function(response) {
        var service = JSON.parse(response);
        $('#editServiceId').val(service.id_tipo_de_servicio);
        $('#editServiceName').val(service.nombre);
        $('#editServiceDescription').val(service.descripcion);
        $('#editServicePrice').val(service.precio);
        $('#editServiceModal').modal('show');
      }
    });
  }

  function saveEditedService() {
    Swal.fire({
      title: '¿Quieres guardar los cambios?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Guardar',
      denyButtonText: `No guardar`
    }).then((result) => {
      if (result.isConfirmed) {
        saveChangesAndShowSuccess();
      } else if (result.isDenied) {
        // No hacer nada o manejar según tu lógica
      }
    });
  }

  function saveChangesAndShowSuccess() {
    $.ajax({
      url: 'save_edited_service.php',
      method: 'POST',
      data: $('#editServiceForm').serialize(),
      success: function(response) {
        if (response === 'success') {
          Swal.fire({
            icon: 'success',
            title: 'Cambios guardados correctamente',
            showConfirmButton: false,
            timer: 1500
          }).then(() => {
            $('#editServiceModal').modal('hide');
            location.reload();
          });
        } else {
          console.log('Error saving edited service');
        }
      }
    });
  }
</script>
</body>
</html>
