<?php

$age = 21;
while ($age <23) {
$age = $age + 1;}
	$friends = [
	['name' => 'Игорь', 'tel' => '063' , 'age' => '22'],
	['name' => 'Вася', 'tel' => '063' , 'age' => '22'], 
	['name' => 'Петя', 'tel' => '063' , 'age' => '22'], 
	['name' => 'Даша', 'tel' => '063' , 'age' => '24'], 
	['name' => 'Гена', 'tel' => '063' , 'age' => '23'], 
	];
echo $age;
?>
<html>
<head>
</head>
<body>
<table border=1>
<?php foreach ($friends as $key => $friendsname)  {?>
<tr>
	<th> <?php echo $key; ?> </th> </td>
	<td> <?php { foreach ($friendsname as $el) echo $el . '<td>'; }?> </td>

</tr>
<?php  } ?>
</table>

</body>

</html> 



