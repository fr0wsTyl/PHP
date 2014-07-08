<?php
	$title = 'Добави разход';
	include 'content/header.php';
	$options = array(1 => 'Храна', 2 => 'Алкохол', 3=> 'Цигари', 
						4=>'Интернет', 5 =>'Ток', 6=>'Вода');
	if ($_POST) {
		$name = trim($_POST['name-of-cost'], '');
		$price = (int) trim($_POST['price'], '');
		$group = (int) $_POST['group'];
		$currentDate = date('l jS \of F Y h:i:s A');
		$error = false;
		if (mb_strlen($name) < 3) {
			echo '<h4>Името трябва да съдържа 3 символа </h4><br />';
			$error = true;
		}
		if ($price <= 0) {
			echo '<h4>Невалидна сума</h4>';
			$error = true;
		}
		if ($group < 0 || $group > 6) {
			echo '<h4>На голям хакер ли се правиш?</h4>';
			$error = true;
		}
		if (!$error) {
			$result = $currentDate.'!!'.$name.'!!'.$price.'!!'.$group."\r\n";
			file_put_contents('system.txt', $result, FILE_APPEND);
			echo '<h4>Успешно добавен разход.</h4>';
		}
	}
?>
<div id="wrapper">
	<a href="index.php">Списък</a>
	<form method="POST">
		<span>Име:</span><input type="text" name="name-of-cost"/><br />
		<span>Сума:</span><input type="text" name="price"/><br />
		<span>Вид:</span>
			<select name="group">
				<?php 
					foreach ($options as $key => $value) {
						echo "<option value='$key'>$value</option>";
					}
				?>
			</select>
		<br />
		<input type="submit" value="Добави"/>
	</form>
</div>
<?php 
	include 'content/footer.php';
?>