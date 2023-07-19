<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"></script>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="container" style="margin-top: 50px">

			<?php require_once "./calcController.php";?>

		    <div class="container calculator">
			<?php require_once "./calcController.php";?>
			<form method="post">
				<div class="form-group">
					<input name="number1" type="text" class="form-control inputField" placeholder="Enter number 1" />
				</div>
				<div class="form-group">
					<select name="operation" class="form-control">
						<option value="plus">Plus</option>
						<option value="minus">Minus</option>
						<option value="times">Times</option>
						<option value="divided by">Divided By</option>
					</select>
				</div>
				<div class="form-group" style="margin-top: 10px;">
					<input name="number2" type="text" class="form-control inputField" placeholder="Enter number 2" />
				</div>
				<div class="form-group">
					<input name="submit" type="submit" value="Calculate" class="btn btn-primary btn-block" />
				</div>
			</form>
		</div>
	</body>
</html>