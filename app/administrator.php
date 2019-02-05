<?php
error_reporting(E_ALL);
ob_start();
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Bangkok");
//if (!isset($_SESSION['userauth_cf'])){header("location:".$_SESSION['ASSETS_URL']."auth/");}
// $userID = isset($_SESSION['memberAuth']) ? $_SESSION['memberAuth']['id'] : null;
$DOMAIN = isset($uri_past[0]) && $uri_past[0]!="" ? $uri_past[0] : "_main";
$ACTION = $DOMAIN=="_main" ? "main" : (isset($uri_past[1]) ? $uri_past[1] : "list");
$_SESSION['LANG'] = $LANG = isset($_SESSION['LANG']) ? $_SESSION['LANG'] : "Th";
$PAGE = $DOMAIN."/view/".$ACTION;
?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo $ASSETS_URL; ?>assets/image/logosut_e.gif">
	<title>
		Scholaship
	</title>

	<!-- Styles -->
	<link href="<?php echo $ASSETS_URL; ?>assets/css/lib/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/lib/themify-icons.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/lib/menubar/sidebar.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/lib/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/lib/unix.css" rel="stylesheet">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script type="text/javascript">
		var PATH = '<?php echo $ASSETS_URL; ?>';
		// var USERID = '<?php //echo $userID; ?>';
		var LANG = '<?php echo $LANG; ?>';
		var LINK = '<?php echo $LINK_URL; ?>';
		// console.log(USERID);
	</script>
	<script src="<?php echo $ASSETS_URL; ?>plugin/jquery.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>plugin/angular.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>plugin/angular-sanitize.min.js"></script>
	
	<script src="<?php echo $ASSETS_URL; ?>plugin/ng-notify-master/dist/ng-notify.min.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>app/_main/controller/myApp.js"></script>
	<script src="<?php echo $ASSETS_URL; ?>app/_main/controller/myAppController.js"></script>
	<link href="<?php echo $ASSETS_URL; ?>plugin/ng-notify-master/dist/ng-notify.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $ASSETS_URL; ?>assets/css/cusstom.css" rel="stylesheet">
</head>

<body>

<div id="loading" data-loading>
	<ul class="bokeh">
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


	<?php 
		include 'app/_main/view/_admin_menu.php'; 
		include 'app/glb_info/view/user_bar.php';
	?>
	<div class="content-wrap">
		<div class="main">
			<div class="container-fluid">

				
					<?php
						$PAGE = isset($_GET['page']) ? $_GET['page'] : $PAGE;
						$str_pathFile = "app/" . $PAGE.".php";
						$breadcrumb = isset($_GET['page']) ? explode("/", $_GET['page']) : explode("/", $PAGE);

						if (file_exists($str_pathFile)){
							include_once($str_pathFile);
						}else{
							include_once("app/_main/view/404.php");
						}
					?>
				
			</div>
		</div>
	</div>

	<div id="search">
		<button type="button" class="close">×</button>
		<form>
			<input type="search" value="" placeholder="type keyword(s) here" />
			<button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>
	
<!-- jquery vendor -->
<script src="<?php echo $ASSETS_URL; ?>assets/js/lib/jquery.min.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/js/lib/jquery.nanoscroller.min.js"></script>
<!-- nano scroller -->
<script src="<?php echo $ASSETS_URL; ?>assets/js/lib/menubar/sidebar.js"></script>
<script src="<?php echo $ASSETS_URL; ?>assets/js/lib/preloader/pace.min.js"></script>
<!-- sidebar -->
<script src="<?php echo $ASSETS_URL; ?>assets/js/lib/bootstrap.min.js"></script>
<!-- bootstrap -->


<script src="<?php echo $ASSETS_URL; ?>assets/js/scripts.js"></script>
</body>

</html>