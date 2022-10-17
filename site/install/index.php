<html>
  <head>
	<base href="../" />
    <title>Site Installation</title>
  </head>
  <body>
	<?php 
		if (file_exists(__DIR__ . '/../../config.json')) {
			echo "<script>window.location.replace('/')</script>";
		} else {
			echo "SETTING UP....";
		}
	?>
	<h1>Install!</h1>
	<p>Set up your site here:</p>
	<form action="/../site/install/install.php" method="post">
	<label for="title">Type the title of the site:</label>
	<input type="text" id="title" name="title" required="required" value="My Company :)" size="35"/>
	<br />
	Dont put html, will be used for site title and headers that include site name.
	<hr />
	<input type="submit" value="install" /></form></bodybody></html>