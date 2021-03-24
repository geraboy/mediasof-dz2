<?php
	$arr = [		
		'серый' => 1,
		'бурый' => 2,
		'малиновый' => 3,
		'лаймовый' => 4,
		'карий' => 5,
		'хаки' => 6,
		'алый' => 7,
		'антрацитовый' => 8,
		'мятный' => 9,
		'аметистовый' => 10,
		] ; // от 10 элементов
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DZ2</title>
</head>
<body>
	<div>
		<?php foreach ($arr as $k => $n) { ?>
			<div> <?php echo " {$k} = {$n} " ?> </div>
		<?php } ?>
	</div>
</body>
</html>