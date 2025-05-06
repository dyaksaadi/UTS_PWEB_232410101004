<?php

function sendForm($username,$password){
	echo 5;
	include '/app/Http/Controllers/PageController.php';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script>
		function sendForm()
		{
			alert('test');
		}

		</script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"> </script>
	</head>
	<body class="">
		<div class="d-flex  vh-100 w-100 align-items-center justify-content-center ">
			<div class="bg-dark-subtle h-75 d-flex flex-column justify-content-center w-75 rounded-3 text-center align-items-center p-5">
				<form  onsubmit="sendForm(email,password)" class="">
					<h3>Halaman Register</h3>
					<h5>Nama <input /></h5>
					<h5 class="">Email<input value=""  class="mx-2"/></h5>
					<h5>Password<input type="password" value="password" class="mx-2" /></h5>
					<button onclick="<?php
						
						
					?>"  class="rounded-2 bg-light-subtle">
					<a href="dashboard.blade.php">Login 
						
					</a>
					</button>
				</form>
			</div>
		</div>
	</body>
</html>






<?
include 'components/footer.blade.php';

?>

