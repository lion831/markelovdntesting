<?php
require_once 'config.php';
require_once 'functions.php';

if( isset($_POST['new_val']) ){
	if( update_option() ){
		exit("Настройка сохранена");
	}else{
		exit("Ошибка сохранения");
	}
}

$options = get_options();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Редактируемый контент</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
<table class="zebra">
	<thead>
		<tr>
			<th>ID</th>
			<th>Системное название</th>
			<th>Название опции</th>
			<th>Значение</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($options as $option): ?>
	<tr>
		<td><?=$option['id']?></td>
		<td><?=$option['title']?></td>
		<td><div class="edit" data-id="<?=$option['id']?>" data-name="name" contenteditable><?=$option['name']?></div></td>
		<td><div class="edit" data-id="<?=$option['id']?>" data-name="value" contenteditable><?=$option['value']?></div></td>
	</tr>
<?php endforeach; ?>
	</tbody>
</table>

<div id="loader"><span></span></div>
<div id="mes-edit"></div>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/script.js"></script>

</body>
</html>