<title>Дурнева А.Д.</title>
<b>Задание №2-5</b><br><br>
<img src="pic\func.PNG"><br>
<?php
$a = rand (-5,7);
$b = rand (-6,8);
echo "<br>Рандомные числа a = $a и b = $b <br>";
function gav ($u, $t){
	if (($u>=0)&&($t>=0)){
	$f = $u + $t;}
	if (($u<0)&&($t>=0)){
	$f = pow($u,2) + $t;}
	if (($u>=0)&&($t<0)){
	$f = $u - 2*$t;}
	if (($u<0)&&($t<0)){
	$f = (($t+3*$u)/$u*$t);}
return $f;}
$f1=(gav($a,pow($b,8)-pow($a,7)));
echo "<br>Значение первой функции = $f1<br>";	
$f2=(gav(pow($a,10) - pow($b,11),$b));
echo "<br>Значение второй функции = $f2<br>";	
$z = $f1 + $f2;
echo "<br>Значение z = $z<br>";
?> <p><a href="index.php">Главное меню</a></p>
