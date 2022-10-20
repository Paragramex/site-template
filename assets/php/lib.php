<?php
function getname() {
	if (isset($_SESSION['user'])) {
		$user = $_SESSION['user'];
	} else {
		$user = "guest";
	}
}

function verifyAdmin() {
	$config = json_decode(file_get_contents(__DIR__ . '/../config.json'));
	return in_array(getname(), $config->admins);
}
?>