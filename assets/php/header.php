<?php session_start();
$config = json_decode(file_get_contents(__DIR__ . '/../../config.json'));
if (!file_exists(__DIR__ . '/../../config.json')){
	echo "<script>window.location.replace('/site/install')</script>";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Local libraries -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="all.css">
    <script src="assets/js/all.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script defer src="assets/js/script.js"></script> -->

    <!-- cdn for libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/../../assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="/../../assets/js/script.js" defer></script>
    <title><?php if (file_exists(__DIR__ . '/../../config.json')) {
			$name = json_decode(file_get_contents(__DIR__ . '/../../config.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?></title>
    <style>
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top shadow">
        <a class="navbar-brand" href="#"><?php if (file_exists(__DIR__ . '/../../config.json')) {
			$name = json_decode(file_get_contents(__DIR__ . '/../../config.json'));
			echo htmlspecialchars($name->sitetitle);
		} ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="/"><i class="fas fa-home fa-lg d-md-none pr-2 "></i>Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/site/about"><i class="fas fa-info-circle fa-lg d-md-none pr-2"></i> About</a>
                        </li>  
                        <li class="nav-item">
                          <a class="nav-link" href="/site/pricing"><i class="fas fa-rupee-sign fa-2x d-md-none pr-2"></i> Pricing</a>
                        </li> 
<?php if(isset($_SESSION['user']))
{ 
?> 
									<li class="nav-item">
                          <a class="nav-link" href="/site/account"><i class="fas fa-user fa-lg d-md-none pr-2"></i><?php echo ''.$_SESSION["user"].''?></a>
                        </li>
<?php } else { ?>
									
                        <li class="nav-item">
                          <a class="nav-link" href="/site/login"><i class="fas fa-user fa-lg d-md-none pr-2"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/site/signup"><i class="fas fa-edit fa-lg d-md-none pr-2"></i>Signup</a>
                        </li>
              <?php } ?>
                </ul>
          </ul>
        </div>
    </nav>
<br>
<br>
<br>
<br>