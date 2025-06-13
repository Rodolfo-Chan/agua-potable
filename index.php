<?php
session_start();
if (empty($_SESSION["id"])){
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  
<head>

<script src="http://localhost/sweetalert2-11.10.5/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="http://localhost/sweetalert2-11.10.5/sweetalert2.css">

  
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>AquaDzonot.com</title>
  <!-- loader-->

  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
  
 
  <?php include('navegacion.php'); ?>
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
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
 

  <a class="btn btn-outline-danger" href="controlador/controlador_cerrar_sesion.php">Salir
      <i class="fa fa-power-off" aria-hidden="true"></i>
       </a>
  
  <ul class="navbar-nav align-items-center right-nav-link">
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

<div class="clearfix"></div>

	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->
 
  <h4 style="color:; display: inline;">Bienvenido </h4>
<h4 style="color: #00BDFF; display: inline;"><?php echo $_SESSION["nombre"]." ".$_SESSION["apellido"]; ?></h4>

<style>
  .highlight-lines {
    display: block;
    margin: 0 auto;
    filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.5));
    animation: glowAnimation 2s infinite alternate; /* Configura la animación */
  }

  @keyframes glowAnimation {
    from {
      filter: drop-shadow(0 0 20px rgba(255, 255, 255, 0.5));
    }
    to {
      filter: drop-shadow(0 0 20px rgba(255, 255, 255, 1)); /* Cambia el efecto de la luz */
    }
  }
</style>

<img src="assets/images/logon.png" alt="" width="480" height="210" class="highlight-lines">

<h2 style="margin-top: 1px; text-align: center;">COMISARIA</h2>
<h1 style="margin-top: 2px; text-align: center;">DZONOT CARRETERO 2021-2024</h1>
<hr style="border-width: 3px;">


	<div class="card mt-3">

    <div class="card-content">

        <div class="row row-group m-0">
        <div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
        <?php
        // Incluye el archivo de configuración
        include 'config.php';

        // Realiza la consulta para obtener el total de contribuyentes
        $sql = "SELECT COUNT(*) AS total_contribuyentes FROM contribuyentes";

        // Ejecuta la consulta
        $resultado = $conn->query($sql);

        // Verifica si la consulta fue exitosa
        if ($resultado) {
            // Obtén el resultado como un arreglo asociativo
            $fila = $resultado->fetch_assoc();

            // Obtén el total de contribuyentes
            $total_contribuyentes = $fila['total_contribuyentes'];

            // Calcula el porcentaje
            $porcentaje = ($total_contribuyentes / 1000) * 100;

            // Muestra el total de contribuyentes
            echo '<h5 class="text-white mb-0">' . $total_contribuyentes . '<span class="float-right"><i class="zmdi zmdi-face"></i></span></h5>';

            // Muestra la barra de progreso
            echo '<div class="progress my-3" style="height:3px;">
                    <div class="progress-bar" style="width: ' . $porcentaje . '%"></div>
                </div>';

            // Muestra la información adicional
            echo '<p class="mb-0 text-white small-font">Contribuyentes <span class="float-right">+' . $porcentaje . '% <i class="zmdi zmdi-long-arrow-up"></i></span></p>';
        } else {
            // Muestra un mensaje de error si la consulta falla
            echo "Error en la consulta: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
</div>
<div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
        <?php
        // Incluye el archivo de configuración
        include 'config.php';

        // Realiza la consulta para obtener el total de tipos de servicios
        $sqlTotalTiposServicios = "SELECT COUNT(*) AS total_tipos_servicios FROM tipos_de_servicio";

        // Ejecuta la consulta
        $resultadoTotalTiposServicios = $conn->query($sqlTotalTiposServicios);

        // Verifica si la consulta fue exitosa
        if ($resultadoTotalTiposServicios) {
            // Obtén el resultado como un arreglo asociativo
            $filaTotalTiposServicios = $resultadoTotalTiposServicios->fetch_assoc();

            // Obtén el total de tipos de servicios
            $totalTiposServicios = $filaTotalTiposServicios['total_tipos_servicios'];

            // Muestra el total de tipos de servicios
            echo '<h5 class="text-white mb-0">' . $totalTiposServicios . ' <span class="float-right"><i class="fa fa-envira"></i></span></h5>';

            // Puedes establecer un valor máximo si lo necesitas
            $valor_maximo = 100; // Establece el valor máximo según tus necesidades

            // Calcula el porcentaje
            $porcentaje = ($totalTiposServicios / $valor_maximo) * 100;

            // Muestra la barra de progreso
            echo '<div class="progress my-3" style="height:3px;">
                    <div class="progress-bar " style="width: ' . $porcentaje . '%"></div>
                </div>';

            // Muestra la información adicional
            echo '<p class="mb-0 text-white small-font">Categorias de servicio<span class="float-right">+' . number_format($porcentaje, 2) . '% <i class="zmdi zmdi-long-arrow-up"></i></span></p>';
        } else {
            // Muestra un mensaje de error si la consulta de total de tipos de servicios falla
            echo "Error en la consulta de total de tipos de servicios: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
</div>


<div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
        <?php
        // Incluye el archivo de configuración
        include 'config.php';

        // Realiza la consulta para obtener el total de domicilios activos
        $sqlDomiciliosActivos = "SELECT COUNT(*) AS total_domicilios_activos FROM domicilios WHERE estatus = 'Activo'";

        // Ejecuta la consulta
        $resultadoDomiciliosActivos = $conn->query($sqlDomiciliosActivos);

        // Verifica si la consulta fue exitosa
        if ($resultadoDomiciliosActivos) {
            // Obtén el resultado como un arreglo asociativo
            $filaDomiciliosActivos = $resultadoDomiciliosActivos->fetch_assoc();

            // Obtén el total de domicilios activos
            $totalDomiciliosActivos = $filaDomiciliosActivos['total_domicilios_activos'];

            // Realiza la consulta para obtener el total de domicilios
            $sqlTotalDomicilios = "SELECT COUNT(*) AS total_domicilios FROM domicilios";

            // Ejecuta la consulta
            $resultadoTotalDomicilios = $conn->query($sqlTotalDomicilios);

            // Verifica si la consulta fue exitosa
            if ($resultadoTotalDomicilios) {
                // Obtén el resultado como un arreglo asociativo
                $filaTotalDomicilios = $resultadoTotalDomicilios->fetch_assoc();

                // Obtén el total de domicilios
                $totalDomicilios = $filaTotalDomicilios['total_domicilios'];

                // Muestra el total de domicilios activos
                echo '<h5 class="text-white mb-0">' . $totalDomiciliosActivos . ' <span class="float-right"><i class="fa fa-eye"></i></span></h5>';

                // Calcula el porcentaje
                $porcentaje = ($totalDomiciliosActivos / $totalDomicilios) * 100;

                // Muestra la barra de progreso
                echo '<div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width: ' . $porcentaje . '%"></div>
                    </div>';

                // Muestra la información adicional
                echo '<p class="mb-0 text-white small-font">Tomas Activos <span class="float-right">+' . number_format($porcentaje, 2) . '% <i class="zmdi zmdi-long-arrow-up"></i></span></p>';
            } else {
                // Muestra un mensaje de error si la consulta de total de domicilios falla
                echo "Error en la consulta de total de domicilios: " . $conn->error;
            }
        } else {
            // Muestra un mensaje de error si la consulta de domicilios activos falla
            echo "Error en la consulta de domicilios activos: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
</div>

<div class="col-12 col-lg-6 col-xl-3 border-light">
    <div class="card-body">
        <?php
        // Incluye el archivo de configuración
        include 'config.php';

        // Realiza la consulta para obtener el total de domicilios en estado "Baja"
        $sqlDomiciliosBaja = "SELECT COUNT(*) AS total_domicilios_baja FROM domicilios WHERE estatus = 'Baja'";

        // Ejecuta la consulta
        $resultadoDomiciliosBaja = $conn->query($sqlDomiciliosBaja);

        // Verifica si la consulta fue exitosa
        if ($resultadoDomiciliosBaja) {
            // Obtén el resultado como un arreglo asociativo
            $filaDomiciliosBaja = $resultadoDomiciliosBaja->fetch_assoc();

            // Obtén el total de domicilios en estado "Baja"
            $totalDomiciliosBaja = $filaDomiciliosBaja['total_domicilios_baja'];

            // Realiza la consulta para obtener el total de domicilios
            $sqlTotalDomicilios = "SELECT COUNT(*) AS total_domicilios FROM domicilios";

            // Ejecuta la consulta
            $resultadoTotalDomicilios = $conn->query($sqlTotalDomicilios);

            // Verifica si la consulta fue exitosa
            if ($resultadoTotalDomicilios) {
                // Obtén el resultado como un arreglo asociativo
                $filaTotalDomicilios = $resultadoTotalDomicilios->fetch_assoc();

                // Obtén el total de domicilios
                $totalDomicilios = $filaTotalDomicilios['total_domicilios'];

                // Muestra el total de domicilios en estado "Baja"
                echo '<h5 class="text-white mb-0">' . $totalDomiciliosBaja . ' <span class="float-right"><i class="zmdi zmdi-alert-triangle"></i></span></h5>';

                // Calcula el porcentaje
                $porcentaje = ($totalDomiciliosBaja / $totalDomicilios) * 100;

                // Muestra la barra de progreso
                echo '<div class="progress my-3" style="height:3px;">
                        <div class="progress-bar" style="width: ' . $porcentaje . '%"></div>
                    </div>';

                // Muestra la información adicional
                echo '<p class="mb-0 text-white small-font">Tomas Bajas <span class="float-right">+' . number_format($porcentaje, 2) . '% <i class="zmdi zmdi-long-arrow-up"></i></span></p>';
            } else {
                // Muestra un mensaje de error si la consulta de total de domicilios falla
                echo "Error en la consulta de total de domicilios: " . $conn->error;
            }
        } else {
            // Muestra un mensaje de error si la consulta de domicilios en estado "Baja" falla
            echo "Error en la consulta de domicilios en estado 'Baja': " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
</div>

<div class="col-24 col-lg-12 col-xl-80 border-light">
    <div class="card-body">
        <?php
        // Incluye el archivo de configuración
        include 'config.php';

        // Realiza la consulta para obtener el total de pagos
        $sql = "SELECT SUM(monto_del_pago) AS total_pagos FROM pagos";

        // Ejecuta la consulta
        $resultado = $conn->query($sql);

        // Verifica si la consulta fue exitosa
        if ($resultado) {
            // Obtén el resultado como un arreglo asociativo
            $fila = $resultado->fetch_assoc();

            // Obtén el total de pagos
            $total_pagos = $fila['total_pagos'];

            // Muestra el total de pagos
            echo '<h5 class="text-white mb-0">' . number_format($total_pagos, 2) . ' <span class="float-right"><i class="fa fa-usd"></i></span></h5>';

            // Puedes establecer un valor máximo si lo necesitas
            $valor_maximo = 1281600; // Establece el valor máximo según tus necesidades

            // Calcula el porcentaje
            $porcentaje = ($total_pagos / $valor_maximo) * 100;

            // Ajusta el grosor y cambia el color de la barra de progreso a azul
            echo '<div class="progress my-3" style="height:10px;">
                    <div class="progress-bar bg-primary" style="width: ' . $porcentaje . '%"></div>
                </div>';

            // Muestra la información adicional
            echo '<p class="mb-0 text-white small-font">Total Pagos <span class="float-right">+' . $porcentaje . '% <i class="zmdi zmdi-long-arrow-up"></i></span></p>';
        } else {
            // Muestra un mensaje de error si la consulta falla
            echo "Error en la consulta: " . $conn->error;
        }

        // Cierra la conexión
        $conn->close();
        ?>
    </div>
</div>

           
        </div>
    </div>
 </div>  
	  

   <div class="card">
        
        <div class="card-header">Pagos al mes 
          <div class="card-action">
          <div class="dropdown">
          <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
           <i class="icon-options"></i>
          </a>
           <div class="dropdown-menu dropdown-menu-right">
           <a class="dropdown-item" href="javascript:void();">Action</a>
           <a class="dropdown-item" href="javascript:void();">Another action</a>
           <a class="dropdown-item" href="javascript:void();">Something else here</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="javascript:void();">Separated link</a>
            </div>
           </div>
          </div>
        </div>
        <div class="card-body">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <canvas id="barChart"></canvas>
        <?php
include 'config.php';

// Obtener la lista de años disponibles en la base de datos
$yearsQuery = "SELECT DISTINCT YEAR(fecha_de_emision) AS anio FROM reportes ORDER BY anio";
$yearsResult = $conn->query($yearsQuery);
$availableYears = [];

while ($yearRow = $yearsResult->fetch_assoc()) {
    $availableYears[] = $yearRow['anio'];
}

// Obtener el año seleccionado (si se ha enviado el formulario)
$selectedYear = isset($_POST['year']) ? $_POST['year'] : (count($availableYears) > 0 ? $availableYears[0] : null);

$query = "SELECT YEAR(fecha_de_emision) AS anio, MONTH(fecha_de_emision) AS mes, SUM(monto_del_pago) AS total_pago 
          FROM reportes 
          WHERE YEAR(fecha_de_emision) = $selectedYear
          GROUP BY anio, mes 
          ORDER BY anio, mes";

$result = $conn->query($query);

$labels = [];
$data = [];
$totalPago = 0; // Inicializar la suma total

while ($row = $result->fetch_assoc()) {
    // Traduce los nombres de los meses a español
    $mes = date('F', mktime(0, 0, 0, $row['mes'], 1));
    $mes_spanish = traducirMes($mes);

    $labels[] = $mes_spanish . ' ' . $row['anio'];
    $data[] = $row['total_pago'];
    $totalPago += $row['total_pago'];
}

function traducirMes($mes) {
    $meses = [
        'January' => 'Enero',
        'February' => 'Febrero',
        'March' => 'Marzo',
        'April' => 'Abril',
        'May' => 'Mayo',
        'June' => 'Junio',
        'July' => 'Julio',
        'August' => 'Agosto',
        'September' => 'Septiembre',
        'October' => 'Octubre',
        'November' => 'Noviembre',
        'December' => 'Diciembre',
    ];

    return $meses[$mes];
}
?>

<meta charset="UTF-8">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<form method="post">
    <label for="year">Seleccione un año:</label>
    <select name="year" id="year">
        <?php foreach ($availableYears as $year) : ?>
            <option value="<?php echo $year; ?>" <?php echo ($year == $selectedYear) ? 'selected' : ''; ?>><?php echo $year; ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" class="btn btn-dark" value="Filtrar">
</form>

<div>
    <h4>SUMA TOTAL GLOBAL: $<?php echo number_format($totalPago, 2); ?></h4>
</div>
<script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Total Pagado',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2.5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += ' $' + context.formattedValue;
                            return label;
                        },
                        title: function(context) {
                            var title = context[0].label;
                            return title;
                        }
                    }
                }
            }
        }
    });
</script>

        </div>       
       </div>
<!--segundo grafico -->
<div class="card">
        
        <div class="card-header">Pagos por dias,mes y año
          <div class="card-action">
          <div class="dropdown">
          <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
           <i class="icon-options"></i>
          </a>
           <div class="dropdown-menu dropdown-menu-right">
           <a class="dropdown-item" href="javascript:void();">Action</a>
           <a class="dropdown-item" href="javascript:void();">Another action</a>
           <a class="dropdown-item" href="javascript:void();">Something else here</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="javascript:void();">Separated link</a>
            </div>
           </div>
          </div>
        </div>
        <div class="card-body">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <canvas id="barChartt"></canvas>
<?php
include 'config.php';

// Establecer el idioma de la fecha en español (México)
$conn->query("SET lc_time_names = 'es_MX'");

// Obtener la lista de años disponibles en la base de datos
$yearsQuery = "SELECT DISTINCT YEAR(fecha_de_emision) AS anio FROM reportes ORDER BY anio";
$yearsResult = $conn->query($yearsQuery);
$availableYears = [];

while ($yearRow = $yearsResult->fetch_assoc()) {
    $availableYears[] = $yearRow['anio'];
}

// Obtener el año y mes actual
$currentYear = date('Y');
$currentMonth = date('n');

$selectedYear = isset($_POST['selectedYear']) ? $_POST['selectedYear'] : $currentYear;
$selectedMonth = isset($_POST['selectedMonth']) ? $_POST['selectedMonth'] : $currentMonth;

$query = "SELECT DATE_FORMAT(fecha_de_emision, '%d de %M de %Y') AS formattedDate, SUM(monto_del_pago) AS totalPago 
          FROM reportes 
          WHERE YEAR(fecha_de_emision) = $selectedYear
          AND MONTH(fecha_de_emision) = $selectedMonth
          GROUP BY formattedDate 
          ORDER BY formattedDate";

$result = $conn->query($query);

$labels = [];
$data = [];
$totalPago = 0; // Inicializar la suma total

while ($row = $result->fetch_assoc()) {
    $labels[] = utf8_encode($row['formattedDate']); // Asegurar la codificación correcta para caracteres especiales
    $data[] = $row['totalPago'];
    $totalPago += $row['totalPago'];
}

// Calcular el total global para la fecha seleccionada
$totalGlobalQuery = "SELECT SUM(monto_del_pago) AS totalGlobal 
                     FROM reportes 
                     WHERE YEAR(fecha_de_emision) = $selectedYear
                     AND MONTH(fecha_de_emision) = $selectedMonth";
$totalGlobalResult = $conn->query($totalGlobalQuery);
$totalGlobalRow = $totalGlobalResult->fetch_assoc();
$totalGlobal = $totalGlobalRow['totalGlobal'];
?>

<!-- Resto del HTML code remains unchanged -->

<form method="post">
    <label for="selectedYear">Seleccione un año:</label>
    <select name="selectedYear" id="selectedYear">
        <?php foreach ($availableYears as $year) : ?>
            <option value="<?php echo $year; ?>" <?php echo ($year == $selectedYear) ? 'selected' : ''; ?>><?php echo $year; ?></option>
        <?php endforeach; ?>
    </select>

    <label for="selectedMonth">Seleccione un mes:</label>
    <select name="selectedMonth" id="selectedMonth">
        <?php for ($i = 1; $i <= 12; $i++) : ?>
            <option value="<?php echo $i; ?>" <?php echo ($i == $selectedMonth) ? 'selected' : ''; ?>><?php echo traducirMes(date('F', mktime(0, 0, 0, $i, 1))); ?></option>
        <?php endfor; ?>
    </select>

    <input type="submit" class="btn btn-dark" value="Filtrar">
</form>

<!-- Resto del HTML code remains unchanged -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('barChartt').getContext('2d');
    var barColors = Array(<?php echo count($labels); ?>).fill('rgba(75, 192, 192, 0.2)'); // Array de colores para las barras de fechas
    barColors.push('rgba(255, 0, 0, 0.3)'); // Color para la barra "Total Global"

    var barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_merge($labels, ['Total Global'])); ?>,
            datasets: [{
                label: 'Total Pagado',
                data: <?php echo json_encode(array_merge($data, [$totalGlobal])); ?>,
                backgroundColor: barColors,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2.5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    labels: {
                        generateLabels: function(chart) {
                            var labels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                            
                            // Añadir un cuadro de color e icono para "Total Global"
                            labels.push({
                                text: 'Total Global',
                                fillStyle: 'rgba(255, 0, 0, 0.3)',
                                strokeStyle: 'rgba(255, 0, 0, 1)',
                                lineWidth: 2.5,
                                hidden: false // Puedes cambiar esto si deseas que esté oculto por defecto
                            });

                            return labels;
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            var label = context.dataset.label || '';
                            if (label) {
                                label += ': ';
                            }
                            label += ' $' + context.formattedValue;
                            return label;
                        },
                        title: function(context) {
                            var title = context[0].label;
                            return title;
                        }
                    }
                }
            }
        }
    });
</script>




        </div>       
       </div>


<!---------------------------------------->       
<?php
include 'config.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén la fecha del formulario y realiza alguna acción (puedes ajustar esto según tus necesidades)
    $fechaFiltro = $_POST['fechaFiltro'];
    echo "<h2>Listas de pagos para el $fechaFiltro</h2>";

    // Consulta para obtener los pagos en la fecha especificada
    $query = "SELECT * FROM reportes WHERE DATE(fecha_de_emision) = '$fechaFiltro'";
    $result = mysqli_query($conn, $query);
} else {
    // Si no se ha enviado el formulario, utiliza la fecha actual
    $fechaFiltro = date('Y-m-d');
}
?>
<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #018782;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #003230;
    }
  </style>

  <!-- Agrega estilos CSS si es necesario -->



  <!-- Formulario para filtrar por fecha -->
  <form method="post" action="">
    <label for="fechaFiltro">Filtrar por fecha:</label>
    <input type="date" id="fechaFiltro" name="fechaFiltro" value="<?php echo $fechaFiltro; ?>">
    <button type="submit" class="btn btn-dark">Filtrar</button>
  </form>

  <?php
// Muestra la tabla de pagos si hay resultados
if (isset($result) && mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr>';
    echo '<th>ID Reporte</th>';
    echo '<th>ID Pago</th>';
    echo '<th>ID Domicilio</th>';
    echo '<th>Fecha de Emisión</th>';
    echo '<th>Meses Pagados</th>';
    echo '<th>Monto del Pago</th>';
    echo '</tr>';

    $totalMonto = 0; // Inicializa la variable para la suma

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id_reporte'] . '</td>';
        echo '<td>' . $row['id_pago'] . '</td>';
        echo '<td>' . $row['id_domicilio'] . '</td>';
        echo '<td>' . $row['fecha_de_emision'] . '</td>';
        echo '<td>' . $row['meses_pagados'] . '</td>';
        echo '<td>' . $row['monto_del_pago'] . '</td>';
        echo '</tr>';

        // Agrega el monto actual a la suma total
        $totalMonto += $row['monto_del_pago'];
    }

    // Muestra la fila de la suma total
    echo '<tr>';
    echo '<td colspan="5">Total</td>';
    echo '<td>' . $totalMonto . '</td>';
    echo '</tr>';

    echo '</table>';
} else {
    echo '<p>No hay pagos registrados en la fecha seleccionada.</p>';
}

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>








      <!--End Dashboard Content-->
	  
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
  <!-- loader scripts -->
  <script src="assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="assets/js/index.js"></script>

  
    

 
    
  </body>

</html>
