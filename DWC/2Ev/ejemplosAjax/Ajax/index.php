<h1>Listado de archivo</h1>
 
<ul>
<?php
//ruta a la carpeta, '.' es carpeta actual
$path=".";
$no_mostrar=Array("","php","json");
$dir_handle = @opendir($path) or die("No se pudo abrir $path");
while ($file = readdir($dir_handle)) {
 $pos=strrpos($file,".");
 $extension=substr($file,$pos);
 if (!in_array($extension, $no_mostrar)) {
 echo "<li><a href=\"$file\" id=\"enlace_$file\" title=\"$file\">$file</a></li>";
 }
 
}
closedir($dir_handle);
?>
</ul>