<?php

	


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Focus Admin: Widget</title>

	<!-- ================= Favicon ================== -->
	<!-- Standard -->
	<link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
	<!-- Retina iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
	<!-- Retina iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
	<!-- Standard iPad Touch Icon-->
	<link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
	<!-- Standard iPhone Touch Icon-->
	<link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

	<!-- Styles -->
	<link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/lib/themify-icons.css" rel="stylesheet">
	<link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/lib/helper.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

	


	<div class="unix-login">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login-content">
						
						<?php

						if (isset($_GET['pesan'])){
							if ($_GET['pesan'] == 'gagal'){
								echo '<div class="alert alert-danger">gagal!!</div>';
							}
						}

						?>
						

						
						<div class="login-form">
							<h4>SDGS (Sustainable Development Goals/Tujuan Pembangunan Berkelanjutan)</h4>
							<hr />
							<form method="POST" action="page/cek_login.php">
								<div class="form-group">
									<label>Username</label>
									<input type="username" class="form-control" name="username" placeholder="username ..">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" placeholder="password ..">
								</div>
						
								<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-10">Sign in</button>
								<div class="social-button">
									
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>