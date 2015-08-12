<?php

$raw_file = 'mtgwishlist.csv';

if(isset($_POST['submitted'])){
	$new_line = "\n";
	$new_line .= $_POST['card_name'];
	$new_line .= ",";
	$new_line .= $_POST['creature_type'];
	$new_line .= ",";
	$new_line .= $_POST['mana'];
	$new_line .= ",";
	$new_line .= $_POST['power_toughness'];
	$new_line .= ",";
	$new_line .= $_POST['flavor_text'];
	$new_line .= ",";
	$new_line .= $_POST['card_text'];
	$new_line .= ",";
	$new_line .= $_POST['image'];
	$new_line .= ",";
	$new_line .= $_POST['colors'];

	file_put_contents($raw_file, $new_line, FILE_APPEND);
}

$file = file_get_contents($raw_file);
$card_rows = str_getcsv($file, "\n");
array_splice($card_rows, 0, 1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>card wish list</title>
	<style>
		td {
			border:1px solid red;
		}
	</style>
</head>
<body>
	<h1>Card Wish List</h1>
	<div>
		<form action="" method="POST">
			<input type="hidden" name="submitted">
			<label>
				Card Name
				<input type="text" name="card_name">
			</label>
			<br>
			
			<label>
				Creature type
				<input type="text" name="creature_type">
			</label>
			<br>
			<label>
				Mana
				<input type="text" name="mana">
			</label>
			<br>
			<label>
				Power/Toughness
				<input type="text" name="power_toughness">
			</label>
			<br>
			<label>
				Flavor Text
				<textarea name="flavor_text"></textarea> 
			</label>
			<br>
			<label>
				Card Text
				<textarea name="card_text"></textarea> 
			</label>
			<br>
			<label>
				Image
				<input type="text" name="image">
			</label>
			<br>
			<label>
				Card Colors
				<input type="text" name="colors">
			</label>
			<button type="submit">Save this Card!</button>
		</form>
	</div>
	<div class="list-o-card">
		<table>
			<tr>
				<td>Card Name</td>
				<td>Create Type</td>
				<td>Mana</td>
				<td>Power/Toughness</td>
				<td>Flavor text</td>
				<td>Card Text</td>
				<td>Image</td>
				<td>Colors</td>
			</tr>
			<?php
			// loop through all the rows
			foreach ($card_rows as  $row) {
				$parts = explode(',', $row);
				echo "<tr>";
				// loop thru each part
				foreach ($parts as $element) {
					echo "<td>".$element."</td>";
				}
				echo "</tr>";
			}

			?>
		</table>
	</div>
</body>
</html>