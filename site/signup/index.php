<?php
require("register.class.php");
	if(isset($_POST['submit'])){
		$user = new RegisterUser($_POST['username'], /* $_POST['email'], */$_POST['password']);
	}
?>
		<?php include(__DIR__ . "/../../assets/php/header.php"); ?>
    <div class="container" style="margin-top: 70px !important;">
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 border mt-4 mx-2 p-4 rounded shadow">
                <div class="form">
                    <div class="text-center py-4">    
                    <i class="fas fa-user-circle fa-3x"></i></div>
                    <h3 style="text-align: center" class="pb-4">SIGNUP</h3>
									<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
                    <form class="form-group" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        <input type="text" class="form-control" placeholder="Enter username" name="username">
                        <br>
                        <input type="password" class="form-control" placeholder="Enter password" name="password">
                        <br>
                        <input type="password" class="form-control" placeholder="Confirm Password">
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">SIGNUP</button>
                    </form>
                    <div class="text-center">
                        <a href="/site/login" class="btn-btn-default">Already have an account? Login Here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
   <?php include(__DIR__ . "/../../assets/php/footer.php"); ?>
</body>
</html>