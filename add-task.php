<!DOCTYPE html>
<?php
	include './database.php';
  if (isset($_POST["submit"])) {
		$name = $_POST["name"];
    $description = $_POST["description"];
    $due_date = $_POST["due_date"];
		
    $query = "INSERT INTO tasks (name, description, due_date) VALUES ('$name', '$description', '$due_date')";
    $result = mysqli_query($conn, $query);
    // if ($result) {
    //   echo "Task added successfully";
    // } else {
    //   echo "Failed to add task";
    // }
  }
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>PHP Practice</title>
		<link
			rel="stylesheet"
			href="./bootstrap-5.3.3-dist/css/bootstrap.min.css"
		/>
		<link rel="stylesheet" href="./styles/styles.css">
	</head>
	<body>
		<?php include './inc/header.php'; ?>
		<main class="main-content-container">
			<?php include './inc/sidebar.php'; ?>
			<div class="main-content">
				<h2 class="">Add Task</h2>

				<form action="" method="post">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input
						type="text"
						class="form-control"
						name="name"
						id="name"
						/>
					</div>

					<div class="mb-3">
						<label for="description" class="form-label">Description</label>
						<input
						type="text"
						class="form-control"
						name="description"
						id="description"
						/>
					</div>

					<div class="mb-3">
						<label for="due_date" class="form-label">Due Date</label>
						<input
						type="date"
						class="form-control"
						name="due_date"
						id="due_date"
						/>
					</div>

					<div>
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

			</div>
		</main>

		<?php

		?>

		<?php include './inc/footer.php'; ?>
	</body>
</html>
