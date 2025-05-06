<?php
#mysql_connect("127.0.0.1:3306");
#mysql_connect("127.0.0.1:3306");
#Hostname: "127.0.0.1";
#Port: "3306";
#mysql_db_name('uts');
#mysql_db_query('select * from profil');
#mysql_pconnect(127.0.0.1:3306, string $username, string $password);

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"> </script>
		<script>
			
		</script>
	</head>
	<body class="">
		<div class=" bg-body-secondary p-5 w-100 h-50 vh-100  rounded-3">
			<table class="table ">
				<thead class=" ">
					<tr>
						<th scope="col">Peringkat</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>John</td>
						<td>Doe</td>
						<td>@social</td>
					</tr>
					<tr>
						<th scope="row">4</th>
						<td>Adi</td>
						<td>Nie</td>
						<td>@mimin</td>
					</tr>
					<tr>
						<th scope="row">5</th>
						<td>Mic</td>
						<td>sir</td>
						<td>@bintu</td>
					</tr>
					<tr>
						<th scope="row">6</th>
						<td>Vinmu</td>
						<td>Linmu</td>
						<td>@ciilu</td>
					</tr>
					<tr>
						<th scope="row">7</th>
						<td>Vuvu</td>
						<td>Pillru</td>
						<td>@cimn8</td>
					</tr>
					<tr>
						<th scope="row">8</th>
						<td>Kiru</td>
						<td>Nimna</td>
						<td>@Pollo</td>
					</tr>
				</tbody>

			</table>
			<div class="position-relative p-5 mb-5">
				<button  class="p-2 text-black position-relative  start-100 translate-middle bg-warning-subtle" onclick="<?clicked()?>">+</button>
				<button class="p-2 text-black position-relative top-50 start-100 translate-middle bg-warning-subtle">-</button>
			</div>
			
	</body>
</html>
