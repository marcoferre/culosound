<?php
$dir = "../media/audio";
$files = array_diff(scandir($dir), array('..', '.'));
$cont = "";
foreach ($files as $f){
    $cont.=$f."\n";
}

echo $cont;

$myfile = fopen("votes.txt", "w") or die("Unable to open file!");
fwrite($myfile, $cont);
fclose($myfile);

?>