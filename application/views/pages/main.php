<html>
<html>

<head>
	<title>The Kochi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= $css ?>/app.css">
	<script>
		var path = "<?=$path?>";
		var base = "<?=site_url()?>"

	</script>
</head>
<nav class="transparent z-depth-0">
	<div class="nav-wrapper container">
		<a id="logo-container" href="<?= base_url() ?>">
			<img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="<?=site_url("mainctrl/logout")?>">LOGOUT</a></li>
		</ul>
	</div>
</nav>

<body>
	<div class="container">
		<div class="card">
			<div class="card-content">
				<h2>Please fill the form.</h2>
			</div>
			<div id="inform" class="card-content grey lighten-4">
				<div id="info">
					<form action="">
						<div id="formrow" class="row">
							<div class="input-field col s6">
								<input id="fname" type="text" placeholder="Enter your First Name">
								<label for="fname">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="lname" type="text" placeholder="Enter your Last Name">
								<label for="lname">Last Name</label>
							</div>
						</div>
						<div id="formrow" class="row">
							<div class="input-field col s6">
								<input id="phone" type="text" class="validate" placeholder="Enter your Mobile Number">
								<label data-error="Invalid Mobile Number" for="phone">Mobile Number</label>
							</div>
						</div>
						<div id="formrow" class="row">
							<a id="loginbtn" class="right waves-effect waves-green btn-flat">Submit</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="<?= $js ?>/jquery-ui.min.js"></script>
<script src="<?= $js ?>/register.js"></script>

</html>
