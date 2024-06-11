<?php
session_start();
 
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
   header("Location: adminsistem.php");
}

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

	<title>Beranda</title>
</head>

<body>
	<!-- Heading -->
	<heading>
		<?php include 'modul/heading.php' ?>
	</heading>

	<!-- Navbar -->
	<navbar>
		<?php include 'modul/navbar.php' ?>
	</navbar>


	<!-- Konten -->
	<div class="container my-5">
		<div class="row">
			<div class="col-6 rounded bg-white mt-0 radius offset-3 ">
				<form action="loginAct.php" method="POST">
					<small>
						<div class="form-group p-4 mb-1 pb-0">
							<label for="exampleInputEmail1"><b>Username</b>
							</label>
							<input type="text" class="form-control" id="username" placeholder="masukan username anda" name="username" placeholder="Enter Username">
						</div>


						<div class="form-group p-4 py-0">
							<label for="exampleInputPassword1"><b>Password</b></label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password" >
						</div>
					</small>

					<div class=" p-4 pt-2">
						<button type="submit" class="btn btn-success btn-sm	" name="login" id="login" value="login"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
						<a href="pendaftaran.php" class="btn btn-primary btn-sm"><i class="bi bi-person-plus"></i> Daftar Baru</a>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<?php include 'modul/footer.php' ?>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>