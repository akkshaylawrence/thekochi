<html>

<head>
	<title>The Kochi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= $css ?>/app.css">
	<script>var path = "<?= $path?>"</script>
</head>

<nav class="transparent z-depth-0">
	<div class="nav-wrapper container">
		<a id="logo-container" href="<?= base_url() ?>">
			<img class="brand-logo" src="<?= $images; ?>/thekochi.png" alt="theKochi">
		</a>
	</div>
</nav>

<body>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<div class="card-panel transparent z-depth-0">
					<span class="white-text">
						<h3>
							For all things Kochi.
						</h3>
						<p id="maintext" class="flow-text">
							Join thousands of people in <strong>theKochi</strong> community to get realtime updates on the happenings in and around <strong>Kochi!</strong>
						</p>
					</span>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-content">
						<h2>Join Us!</h2>
					</div>
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab"><a class="active" href="#login">Login</a></li>
							<li class="tab"><a href="#reg">Register</a></li>
						</ul>
					</div>
					<div class="card-content grey lighten-4">
						<div id="login">
							<form action="">
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input id="login-name" type="email" placeholder="Enter email" class="validate">
										<label data-error="Invalid email" for="email">Email</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input id="login-pass" type="password" placeholder="Enter password" class="validate">
										<label data-error="Invalid password" for="password">Password</label>
										<a class="login-link" href="#/">Lost your password?</a>
										<p id="message" class="bg-danger"></p>
									</div>
								</div>
								<div id="formrow" class="row">
									<a id="loginbtn" class="right waves-effect waves-green btn-flat">Login</a>
								</div>
							</form>
						</div>
						<div id="reg">
							<form action="">
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input id="emailr" type="email" placeholder="Enter email" class="validate">
										<label for="emailr">Email</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<div class="input-field col s12">
										<input id="passwordr" type="password" placeholder="Enter password" class="validate">
										<label for="passwordr">Password</label>
									</div>
								</div>
								<div id="formrow" class="row">
									<a id="regbtn" class="right waves-effect waves-green btn-flat">Register</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script src="<?= $js ?>/login.js"></script>

</html>
