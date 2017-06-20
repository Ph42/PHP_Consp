// p 186
<html>
<body>
<h1>Yo!</h1>
<?php
$date = date('d.m y');
$time = date('h:i:s');
echo 'Текущая дата: '.$date." года <br>\n";
echo ("Текущее время: $time<br>\n");
echo 'Квадраты и кубы первых 5 натуральных чисел:<br>\n';
for ($i = 1; $i <= 5; $i++)
{
	echo '<li>'.$i.' в квадрате = '.($i*$i);
	echo ','.$i.' в кубе = '.($i*$i*$i).'</li>';	
}
$a = "100 п 4555";
$b = "200а400";
echo "$a + $b".'111';
echo $a.$b."222";
echo $a + $b."333";
echo "$a +";
?>
</body>
</html>
