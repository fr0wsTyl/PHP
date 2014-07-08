<?php
	$title = 'Система за разходи.';
	include 'content/header.php';
?>
<div id="wrapper">
	<a href="add.php">Добави нов разход</a>
	<button>Всички</button>
	<button>Филтрирай</button>
	<table>
		<tr>
			<td>Дата</td>
			<td>Име</td>
			<td>Сума</td>
			<td>Вид</td>
		</tr>
		<?php 
			if (file_exists('system.txt')) {
				$result = file('system.txt');
				foreach ($result as $value) {
					$coloums = explode('!!', $value);
					echo '<tr>
						<td>'.$coloums[0].'</td> 
						<td>'.$coloums[1].'</td> 
						<td>'.$coloums[2].'лв</td> 
						<td>'.$coloums[3].'</td> 
						</tr>';
				}
			}
		?>
	</table>
</div>
<?php 
	include 'content/footer.php';
?>