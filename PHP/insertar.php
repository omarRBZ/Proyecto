<?
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$nacionalidad=$_POST=['nacionalidad'];
$entidad_de_nacimiento=$_POST['entidadDeNacimiento'];
$genero=$_POST['genero'];
$gradoDeEstudios=$_POST['gradoDeEstudios'];
$IstitucionDiagnostico=$_POST['IstitucionDiagnostico'];
$datos=$_POST['datos'];
$folio=$_POST['folio'];


$link = mysql_connect('localhost','root','') or die ('no se pudo conectar:'.mysql_error());
mysql_select_db('despensa',$link) or die ('no se pudo conectar');
$query=($link, "INSERT INTO benefeicario VALUES($nombre, $apellidoPaterno, $apellidoMaterno,$donador,$direccion,$fecha,$tipo_sanguineo,$telefono,$email,$recomendacion  ) or die('no se insertaron los datos correctamente');
?>
