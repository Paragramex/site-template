<html lang="en">
  <head>
	<base href="../" />
    <title>Installation</title>
  </head>
  <body>
	<?php 
		if (!isset($_POST['title'])) die("Start from installation page first");
		if (file_exists('../config.json')) {
			header('Location: ..');
		}
		$title = $_POST['title'];
		class Installation {
			public $sitetitle = "default";
		}
		$install = new Installation;
		$install->sitetitle = $title;
		$install->admins = array('admin');
		$json = json_encode($install);
		$handle = fopen(__DIR__ . "/../../config.json", 'w+');
		$status = fwrite($handle, $json);
		fclose($handle);
		if ($status) {
			echo "Installed! <a href='/'>GO HOME</a>";
		}
	?>
	</div>