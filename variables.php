<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mi plimer ejemplo en php</title>
</head>
<body>

<?php 

$var1=2;
$var2="7";
$res=$var1*$var2;
//$var="<h1>Hola mundo</h1>";
//echo $res;
/*$edad=2;
if (($edad>=18) && ($edad<50)) {
	echo "Ud es unb adulto";
}elseif($edad>51){
	echo "Ud es persona de tercera edad";
}else{
	echo "Ud es menor de edad";
}*/
///ciclos repetitivos
for ($i=0; $i < 13; $i++) { 
	$op=5*$i;
	echo "5 * ".$i."=".$op."<br>";
}

?>

</body>
</html>