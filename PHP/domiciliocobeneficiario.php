<?
$calle=$_POST['calle'];
$numeroExterior=$_POST['numeroExterior'];
$numeroIinterior=$_POST['numeroIinterior'];
$calles=$_POSTcalles['calles'];
$localidad=$_POST['localidad'];
$colonia=$_POST['colonia'];
$municipio=$_POST['municipio'];
$entidadFederativa=$_POST['entidadFederativa'];
$tipoLocalidad=$_POST['tipoLocalidad'];
$numeroDePersonas=$_POST['numeroDePersonas'];
$codigoPostal=$_POST['codigoPostal'];
$telefonoFijo=$_POST['telefonoFijo'];
$telefonoCelular=$_POST['telefonoCelular'];

$link = mysql_connect('localhost','root','') or die ('no se pudo conectar:'.mysql_error());
mysql_select_db('despensa',$link) or die ('no se pudo conectar');
$query=($link, "INSERT INTO direccion VALUES($calle,$numeroExterior,$numeroIinterior,$calles,$localidad,$colonia,$municipio,$entidadFederativa,
$tipoLocalidad,$numeroDePersonas, $codigoPostal, $telefonoFijo,$telefonoCelular) or die('no se insertaron los datos correctamente');

?>
