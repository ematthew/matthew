<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script type="text/javascript" src="mat.js"> </script>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8">

				<div class="card">
					<div class="card-body">
					<form onsubmit="return validateAnimal()">
						<label>animal names:</label>
						<input class="form-control" type="text" id="animalname" placeholder="enter animal name" required>
						<button class="btn btn-primary"> submit</button>
					</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>