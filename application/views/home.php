<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<p>My view has been loaded.</p>
	
	
	
	<?php foreach($rows as $r): ?>
	<h1><?php echo $r->title; ?></h1>
	<small><?php echo $r->author; ?></small>
	<div><?php echo $r->contents; ?></div>
	<?php endforeach; ?>
	</body>
</html>
