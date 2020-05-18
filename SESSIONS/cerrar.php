<!DOCTYPE html>
<html>
<head>
<title> CERAR SESION </title>
   <link type="text/css" href="prueba.css" rel="stylesheet"></link>
</head>
<body>
<div id="container">
  <h1>SESION CERRADA</h1>
  <form action="cerrar.php" method="post">
  <?php
session_start();

session_unset();

session_destroy();
 echo "<center><b><h2> LA SESION HA CERRADO</h2></b>"
?>
</div>
</body>
</html>











