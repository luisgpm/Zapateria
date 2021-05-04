<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Zapateria Nava
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="{{ asset('/css/dash/css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black">
    <div class="logo">
        <a class="simple-text logo-normal">
          Zapateria Nava
        </a>
    </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="/">
              <i class="material-icons">person</i>
              <p>Informacion del Vendedor</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/lista_prodcutos">
              <i class="material-icons">list</i>
              <p>Productos</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/historialVentas">
              <i class="material-icons">list</i>
              <p>Historial Ventas</p>
            </a>
          </li>

          <li class="nav-item active ">
            <a class="nav-link" href="/lista_proveedores">
              <i class="material-icons">list</i>
              <p>Proveedores</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/venta">
              <i class="material-icons">money</i>
              <p>Realizar Venta</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/estanteria">
              <i class="material-icons">list</i>
              <p>Estanterias</p>
            </a>
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="/altaProducto">
              <i class="material-icons">list</i>
              <p>Alta Productos</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    @yield('contenido')

  </div>
  <!--   Core JS Files   -->
  <script type="text/js" src="/dash/core/jquery.min.js"></script>
  <script type="text/js" src="/dash/core/popper.min.js"></script>
  <script type="text/js" src="/dash/core/bootstrap-material-design.min.js"></script>
  <script type="text/js" src="/dash/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script type="text/js" src="/dash/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script type="text/js" src="/dash/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script type="text/js" src="/dash/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script type="text/js" src="/dash/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script type="text/js" src="/dash/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script type="text/js" src="/dash/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script type="text/js" src="/dash/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script type="text/js" src="/dash/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script type="text/js" src="/dash/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script type="text/js" src="/dash/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script type="text/js" src="/dash/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script type="text/js" src="/dash/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script type="text/js" src="/dash/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script type="text/js" src="/dash/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script type="text/js" src="/dash/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script type="text/js" src="/dash/material-dashboard.js?v=2.1.2" ></script>
</body>

</html>