<?php 
	session_start();
	if(!isset($_SESSION['user'])){
		header("location: login");	exit();
	}

	if(isset($_GET['logout'])){
		unset($_SESSION['user']);
		setcookie("user", $user, time() - 3600, "paragram.repl.co");
		header("location: login");	exit();
	}

	if (isset($_SESSION['user'])) {
		if (verifyAdmin()) { echo "<script>window.location.replace('./admin.php')</script>";}};
 ?>

<?php include(__DIR__ . "/../../assets/php/header.php"); ?>

	<div class="container mb-4">
        <h3 class="text-center display-3 mb-4">Account</h3>
        <div class="card shadow" style="width: 100%;height: auto;">
          <div class="row">
                            <div class="col-md-3 col-sm-12"></div>
                            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
															<h4>Current User: <?php echo $_SESSION["user"] ?>
																<br>
																<?php ?>
															</h4>

                            
																	
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12"></div>
                        </div>

            </div>
        </div>
    </div>

</body>
				<?php include(__DIR__ . "/../../assets/php/footer.php"); ?>
</html>