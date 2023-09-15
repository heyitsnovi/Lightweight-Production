<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/default.css') ?>" />
	<title> <?= $title ?></title>
</head>
	<body>
		<div class="msg404">
			<h1>Error 404</h1>
		</div>
		<p class="small">Page Not Found</p>
		<p class="psubtitle">
			<a href="<?= base_url() ?>" class="link-home">Go Home</a>
		</p>
 
		<p class="text-bottom">Memory Usage : <?php  echo $data['memory_usage']; ?> | PHP Version : <?php echo phpversion(); ?></p>
 	
	</body>
</html>