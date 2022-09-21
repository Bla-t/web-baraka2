<!DOCTYPE html>
<html>
<?php define('BASEURL', '../'); ?>

<head>
	<title>Form Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1">
	<link rel="shortcut icon" type="image/png" href="img/logdom.png" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<style type="text/css">
		section {
			padding: 1em;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-right: -50%;
			transform: translate(-50%, -50%)
		}

		.lab,
		.display-4 {
			color: cyan;
			-webkit-text-stroke-width: 0.3px;
			-webkit-text-stroke-color: white;
		}

		.btn-dark {
			background-color: #E16A00;
		}

		.col {
			align-items: center;
			text-align: center;
		}

		body {
			width: 100%;
			height: 100vh;
			background: radial-gradient(circle, #23305A, #384672, #2C204A);
			background-size: 100% 100%;
			position: relative;
		}

		a {
			border-top: 1px solid cyan;
			padding-top: 5px;
			margin: auto;
			color: azure;
			text-decoration: none;

		}

		a:hover {
			text-decoration: none;
			color: aquamarine;
		}

		.card {
			background-color: transparent;
			border-width: 0.2rem;
			border-color: #A3E4D7;
			-webkit-animation: body 1s ease-out;
		}

		@keyframes body {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}
	</style>
</head>

<body>
	<section>
		<div class="card">
			<div class="card-body">
				<?php
				if (isset($_GET['pesan'])) {
					if ($_GET['pesan'] == "ok") {
						echo ('
						<div class="alert alert-success alert-dismissible fade show text-center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Silahkan masuk.!</strong>
						</div>');
						header("location:home.php");
					} else if ($_GET['pesan'] == "gagal") {

						echo ('
						<div class="alert alert-danger alert-dismissible fade show text-center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Username atau Password</strong> tidak sesuai.!
						</div>');
					} else if ($_GET['pesan'] == "ot") {

						echo ('
						<div class="alert alert-warning alert-dismissible fade show text-center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Anda telah <strong>Log Out. . !</strong>
						</div>');
					} else if ($_GET['pesan'] == "kick") {
						echo ('
						<div class="alert alert-warning alert-dismissible fade show text-center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							Anda telah <strong>di kick..!! sesi anda telah habis.!!</strong>
						</div>');
					} elseif ($_GET['pesan'] == "cit") {
						echo ('
						<div class="alert alert-warning alert-dismissible fade show text-center">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							hayoo..!! <strong>ngechit . . yaa..!!??</strong>
						</div>');
					}
				}
				?>
				<h2 class="display-4 text-center font-weight-normal">FORM LOGIN</h2>
				<form method="POST" action="confg/log.php">
					<div class="form-group">
						<label class="lab">Username :</label>
						<input class="form-control" type="text" name="user" placeholder="Username" required>
					</div>
					<div class="form-group">
						<label class="lab">Password :</label>
						<input class="form-control" type="Password" name="pass" placeholder="Password" required>
					</div>
					<div class="row">
						<div class="col-md-6 offset-3">
							<button type="submit" class="btn btn-dark btn-block btn-sm mb-2"> Log in</button>
						</div><br>
						<span></span>
						<a href="<?= BASEURL; ?>">kembali ke halaman web</a>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>

</html>