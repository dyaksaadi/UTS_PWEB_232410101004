<?php
include 'components/navbar.blade.php';

?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"> </script>
		<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"> </script>
	</head>
	<body>
		
		<div class="p-5 d-flex flex-column align-items-center ">
			<div class="p-5 d-flex bg-danger-subtle w-25 h-25 rounded-4 my-5 ">
				
				<div class="">
					<p class=" text-black">admin1</p>
					<p class="text-black"></p>
				</div>
			</div>
			<button onclick="alert('log out sukses')" class="p-2 rounded-3 bg-warning text-white">
				<a class="text-black" href="login.blade.php">Log Out</a>
			</button>
		</div>
		
	</body>

</html>

<?php
include 'components/footer.blade.php';
?>