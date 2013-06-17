<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
		<h2>Create</h2>
		<?php echo form_open('site/create'); ?>
		<p>
			<label for="title">Title:</label>
			<input type="text" name="title" id="title" />
		</p>
		
		<p>
			<label for="content">Content:</label>
			<input type="textarea" name="content" id="content" />
		</p>
		
		<p><?php echo form_submit('Submit', 'submit'); ?></p>
		
		<?php echo form_close(); ?>
		
		<hr />
		
		<?php if(isset($records)) : foreach($records as $row): ?>
		
		<h2><?php echo $row->title; ?></h2>
		<div><?php echo $row->title; ?></div>
		
		<?php endforeach; ?>
		<?php else: ?>
		<h3>No records were returned.</h3>
		<?php endif; ?>
	</body>
</html>
