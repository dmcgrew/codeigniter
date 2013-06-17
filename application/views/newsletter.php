<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="<?php base_url(); ?>/css/style.css" type="text/css" />
	</head>
	<body>
	<div id="newsletter">
		<?php echo form_open('email/send'); ?>
		
		<?php 
		$name_data = array(
			'name' => 'name',
			'id' => 'name',
			'value' => set_value('name')
		);
		?>
		
		<p><label for="name">Name: </label></p><?php echo form_input($name_data); ?></p>
		
		<p><label for="name">Email address: </label><input type="text" name="email" value="<?php echo set_value('email'); ?>"></p>
		
		<p><?php echo form_submit('submit', 'Submit It'); ?></p>
		
		<?php echo form_close(); ?>
		
		<?php echo validation_errors('<p class="error">'); ?>
	</div>
	</body>
</html>
