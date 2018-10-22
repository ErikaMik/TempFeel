<?php include('functions.php'); ?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>TempFeel</title>
</head>
<body>
	<div class="container">
		<h1 class="bg-info text-light p-3">TempFeel</h1>
		<div class="row mt-1">
			<div class="col">
				<table class="table table-sm table-dark">
					<thead>
						<tr>
							<th scope="col">Temperature</th>
							<th scope="col">Feeling</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							for($temp = 1; $temp <36; $temp++) {
								echo "<tr><td>$temp</td><td>".getFeel($temp)."</td></tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>