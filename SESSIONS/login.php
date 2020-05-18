
<!DOCTYPE html>
<html>
<head>
<title> SESION REGISTRADA </title>
   <link type="text/css" href="prueba.css" rel="stylesheet"></link>
</head>
<body>
<div id="container">
  <h1>SESION INICIADA</h1>
  <form action="cerrar.php" method="post">
  <?php
session_start();
$user=$_POST['user'];
$apellido=$_POST['apellido'];
$pass=$_POST['pass'];
echo "<center><b><h2>NOMBRE:   $user </h2></b>";
echo "<center><b><h2>APELLIDO:   $apellido </h2></b>";
?>
   <button type="submit">CERRAR SESION</button>
  </form>
</div>
</body>
</html>











