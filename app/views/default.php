<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto" />
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/default.css') ?>" />
	<title> <?= $title ?></title>
</head>
	<body>
		<div class="msg">
			<h1>LightWeight</h1>
		</div>
		<p class="small">A Lightweight PHP MVC Framework</p>
		<p class="psubtitle">
			<a target="_blank" href="https://github.com/heyitsnovi/LightWeight-Production" class="link-github">View Project On Github</a>
		</p>
 
		<p class="text-bottom">Memory Usage : <?php  echo $memory_usage; ?> | PHP Version : <?php echo phpversion(); ?></p>
 	
	</body>
</html>