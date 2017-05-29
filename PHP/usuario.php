<?
$link = mysql_connect('localhost','root','') or die ('no se pudo conectar:'.mysql_error());
mysql_select_db('despensa',$link) or die ('no se pudo conectar');
$admin=$_POST["administrador"];
$usuario=$_POST["usuario1"];
$contrasenaAdmin=$_POST['contrasenaAdmin'];
$contrasenaUsuario=$_POST["contrasenaUsuario"];
$query=
("SELECT * FROM usuario where  usuario=$admin && contrasena = $contrasenaAdmin"|| usuario= $usuario && contrasena=$contrasenaUsuario);
$result = mysql_query($query) or die ("ocurrio un error en la consulta ");
mysqli_set_charset($link,$query);
if (!$result=mysqli_query($link,$query)) {
  echo "error al conectar";
  # code...
}
else {
  $respuesta = array();
  while ($filas=mysqli_fetch_object($result)) {
    $datos[]=$filas
    if ($datos[]==contrasena ) {
      echo '<script alerta="javascript">alert("bienvenido administrador");</script>';

    }
    else {
      if ($datos[]==contrasena2) {

      echo '<script alerta="javascript">alert("bienvenido administrador");</script>';
      }
    }

  }
}

?>
