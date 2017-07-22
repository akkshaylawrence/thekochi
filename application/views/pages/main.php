<html>
<html>

<head>
	<title>The Kochi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= $css ?>/app.css">
	<script>
		var path = "<?=$path?>";
		var base = "<?=base_url()?>"

	</script>
</head>
<nav class="transparent z-depth-0">
	<div class="nav-wrapper container">
		<a id="logo-container" href="<?= base_url() ?>">
			<img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=site_url(" mainctrl/logout ")?>">LOGOUT</a></li>
		</ul>
	</div>
</nav>

<body class="cyan">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card z-depth-2">
					<div class="card-content center">
						<h3>Akkshay</h3>
					</div>
					<div id="inform" class="card-content grey lighten-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="<?= $js ?>/jquery-ui.min.js"></script>
<script src="<?= $js ?>/register.js"></script>
<script src="<?= $js ?>/data.js"></script>

</html>
