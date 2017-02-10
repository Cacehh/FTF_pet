<html>
	<head>
	<title>Insert Data Into Database Using CodeIgniter Form</title>
	<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
	</head>

	<body>

		<div id="container">
			<?php echo form_open('Register_ctr'); ?>
			<h1>Insert Data Into Database Using CodeIgniter</h1><hr/>
			<?php if (isset($message)) { ?>

			<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
			<?php } ?>

			<?php 
				echo form_label('First Name :'); 
			?> 
			<?php 
				echo form_error('fname'); 
			?><br />
			<?php 
				echo form_input(array('id' => 'fname', 'name' => 'fname')); 
			?><br />

			<?php 
				echo form_label('Last Name :'); 
			?> 
			<?php 
				echo form_error('lname'); 
			?><br />
			<?php 
				echo form_input(array('id' => 'lname', 'name' => 'lname')); 
			?><br />

			<?php 
				echo form_label('M.I :'); 
			?> 
			<?php 
				echo form_error('minitial'); 
			?><br />
			<?php 
				echo form_input(array('id' => 'minitial', 'name' => 'minitial')); 
			?><br />

			<?php 
				echo form_label('User Name :'); 
			?> 
			<?php 
				echo form_error('dname'); 
			?><br />
			<?php 
				echo form_input(array('id' => 'dname', 'name' => 'dname')); 
			?><br />

			<?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
			<?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

			<?php echo form_label('Account Type :'); ?> <?php echo form_error('dacct'); ?><br />
			<?php echo form_input(array('id' => 'dacct', 'name' => 'dacct')); ?><br />

			<?php echo form_label('Mobile No. :'); ?> <?php echo form_error('dmobile'); ?><br />
			<?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '11 Digit Mobile No.')); ?><br />

			<?php echo form_label('Password :'); ?> <?php echo form_error('dpassword'); ?><br />
			<?php echo form_input(array('id' => 'dpassword', 'name' => 'dpassword')); ?><br />

			<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
			<?php echo form_close(); ?><br/>

			<div id="fugo">

			</div>
		</div>
	</body>
</html>