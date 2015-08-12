<!DOCTYPE html>
<html>
<head>
<title>Submitting to yourself</title>
</head>
<body>
<?php 
	if(isset($_POST['done'])){
		?>
		<h1> I have been processed</h1>
		<p> Hello, <?php echo $_POST['first_name'];?></p>
		<?php
	} else {
		?>
		<h1>I have not been submitted yet</h1>
		<?php
	}
?>

	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
		<input type="hidden" name="done">
		<input type="text" name="first_name" placeholder="put your name here">
		<button type="submit">Go</button>
	</form>
	<pre>
		<?php print_r($_POST);?>
	</pre>
</body>
</html>