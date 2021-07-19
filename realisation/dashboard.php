<?php
include("includes/config.php");

//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
	header("Location: register.php");
}


?>


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body class="hold-transition sidebar-mini">

<!-- ./wrapper -->

<!-- ./add  -->
<div id="app"></div>

<script src='https://unpkg.com/react/umd/react.development.js'></script>
<script src='https://unpkg.com/react-dom/umd/react-dom.development.js'></script>
<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/babel" src="js/component/product.component.js"></script>
  <script type="text/babel" src="js/component/crudProduct.component.js"></script>
  <script type="text/babel" src="js/component/sidebar.component.js"></script>
  <script type="text/babel" src="js/component/menu.component.js"></script>
  <script type="text/babel" src="js/component/app.component.js"></script>
  <script type="text/babel" src="js/component/script.js"></script>
</body>
</html>