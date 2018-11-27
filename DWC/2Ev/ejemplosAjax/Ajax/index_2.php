 <?php 
 
 
$dir = "./"; 
$directorio=opendir($dir); 
echo "<span class='texto_menu_Titulo'>Aplicaciones y Utilerias</span>"; 
echo "<br><br>"; 
while ($archivo = readdir($directorio)){ 
 if($archivo=='.' or $archivo=='..'){ 
 echo ""; 
 }else { 
 $enlace = $dir.$archivo; 
 
 echo "<ul type='square'><li>"; 
 echo "<a href=$enlace class='menu'>$archivo<br></a>"; 
 
 echo "</li></ul>"; 
 
 } 
 } 
closedir($directorio); 
?> 