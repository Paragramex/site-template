<?php require("login.class.php") ?>
<?php
session_start();

    if(isset($_COOKIE['user'])){
        session_start();
        setcookie("user", $user, time() - 3600, "paragram.repl.co");
		$_SESSION['user'] = $_COOKIE['user'];
        header("Location: account");
        exit();
    };
	if(isset($_SESSION['user'])){
		header("Location: account"); exit();
	}
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], /* $_POST['email'],*/$_POST['password']);
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
                    <h3 style="text-align: center" class="pb-4">LOGIN</h3>
		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
                    <form class="form-group" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                        <input type="text" class="form-control" placeholder="Enter username" name="username">
                        <br>
                        <input type="text" class="form-control" placeholder="Enter password" name="password">
                        
                        <div class="text-right mt-0"><a href="#" class="btn btn-default small">Forgot password</a></div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </form>
                    <div class="text-center">
                        <a href="/site/signup" class="btn-btn-default">Don't have an account? Signup Here</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>

</body>
</html>