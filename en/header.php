<?php 
	// require_once
	require_once('../config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<meta charset="UTF-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">
	<meta name="author" content="Beema">

	<title>Beema</title>

	<link href="<?php echo BASE_URL;?>publicAssets/css/modern.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
		.sidebar [data-bs-toggle=collapse]:before{
			display:none;
		}
		.wrapper:before{
			height:64px;
		}
		.header{
			margin-bottom:-10px
		}
		.sidebar-brand{
			background:transparent;
		}
		.sidebar-brand, .sidebar-brand:hover{
			background:transparent;
		}
	</style>

	
</head>