<?php 

	$cars = [
		['Volvo', 12, 22],
		['BMW', 15, 33],
		['Saab', 2, 12],
		['Land Rover', 9, 18],
	];
		sort($cars);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 13 - Tjorven Dewulf</title>
</head>
<body>
	<table>
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Verkocht</th>
			<th>Totaal</th>
		</tr>

<?php for ($i = 0; $i < 4; $i++): ?>
		<tr>
<?php for ($y = 0; $y < 3; $y++): ?>
<?php if ($cars[$i][1] == 0): ?>
			<td><?=$cars[$i][$y]?></td>
<?php else: ?>
			<td><?=$cars[$i][$y]?></td>
<?php endif; ?>
<?php endfor; ?>
			<td>Totaalprijs</td>
		</tr>
<?php endfor; ?>

	</table> 
</body>
</html>