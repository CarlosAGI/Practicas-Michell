<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>PHP</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width; initial-scale=1.0" />
</head>

<body>
<?php 

$a = $_POST['dato1'];
$b = $_POST['dato2'];

?>
<div>
<?php
for($i=0;$i<= $a;$i++){
echo '<table border=\'1\'><caption>Tabla bonita del ',$i,'</caption';
for($j=1;$j<= $b;$j++){
echo '<tr><td>'.$i.x.$j.'</td><td>',$i*$j,'</td></tr>';
}
}

?>
<footer>
</footer>
</div>

</body>
</html>

