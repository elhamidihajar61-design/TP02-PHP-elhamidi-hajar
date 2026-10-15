<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ex04</title>
</head>
<body>
    <pre>
<?php
$a=42; $b="42";
$c=15.8; 
$d=true; 
$e=false; 
$f=null;
var_dump($a,$b,$c,$d,$e,$f);
echo "Conversions:\n";
var_dump((int)$b); var_dump((int)$c); var_dump((string)$a);
echo "echo true: "; echo $d; echo "\n";
echo "echo false: '"; echo $e; echo "' (vide)\n";
var_dump($d,$e);
var_dump((bool)0,(bool)"0",(bool)"PHP",(bool)[]);
?>
</pre>
</body>
</html>