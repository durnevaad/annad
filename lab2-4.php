<title>Дурнева А.Д.</title>
<b>Задание №2-4</b><br>
<?php 
for ($i=0;$i<=5;$i++){
	$mas1[]=rand(1,10); $mas2[]=rand(1,10); }
	echo 'Первый массив:'; for ($i=0;$i<=5;$i++){
	echo $mas1[$i].' ';} 
	echo '<br><br>Второй массив:';
	for ($i=0;$i<=5;$i++){ echo $mas2[$i].' ';}
	echo '<p><b>Массивы равны?</b></p>';
	if ($mas1==$mas2){ echo 'Да<br>';}
	else {echo 'Нет<br>';}
?> <p><a href="navi.php">Вернуться назад</a></p>

