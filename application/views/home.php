<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<p>My view has been loaded.</p>
	
	
	
	<?php foreach($records as $row): ?>
    	<h1><?php echo $row->title; ?></h1>
	<?php endforeach; ?>
	</body>
</html>
