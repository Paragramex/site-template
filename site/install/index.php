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
	<input type="text" id="title" name="title" required="required" value="Site-Template" size="35">
	<br />
	Dont put html, will be used for site title and headers that include site name.
	<br>
	<label for="admins">Type the admin account (or leave as is for default admin account):</label>
	<input type="text" id="admins" name="admins" required="required" value="admin" size="30">
	<hr />
	<input type="submit" value="install"></input></form></bodybody></html>