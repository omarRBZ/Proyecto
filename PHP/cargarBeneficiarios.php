cargar beneficiarios
<?
$texto=$_POST['texto'];
$link = mysql_connect('localhost','root','') or die ('no se pudo conectar:'.mysql_error());
mysql_select_db('despensas',$link) or die ('no se pudo conectar');
$query=("SELECT id_beneficiario,nombre FROM beneficia WHERE id_beneficiario== id_cobeneficiario ");
$result = mysql_query($query) or die ("ocurrio un error en la consulta ");
mysql_close();
echo '<option value="0">Cabina</option>';
while (($fila=mysql_fetch_array($result)) !=NULL) {

  echo '<option value="'.$fila["id_cabina"].'">'.$fila["nombre"].'</option>';

}
mysql_free_result($result);
mysql_close($link);

?>
