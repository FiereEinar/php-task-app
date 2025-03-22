<?php
require_once './database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$name = trim($_POST["name"]);
	$description = trim($_POST["description"]);
	$due_date = $_POST["due_date"];

	if (empty($name) || empty($description) || empty($due_date)) {
		$error = "Failed to add task";
	} else {
		$query = "INSERT INTO tasks (name, description, due_date) VALUES (?, ?, ?)";
		$stmt = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($stmt, "sss", $name, $description, $due_date);
		$result = mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);

		if (!$result) {
			$error = "Failed to add task";
		}
	}
}
?>
<!DOCTYPE html>
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
		<?php require_once './inc/header.php'; ?>
		<main class="main-content-container">
			<?php require_once './inc/sidebar.php'; ?>
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

					<?php if (isset($error)): ?>
						<div class="alert alert-danger"><?= $error ?></div>
					<?php endif; ?>
					
					<div>
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>

			</div>
		</main>
		<?php require_once './inc/footer.php'; ?>
	</body>
</html>

<?php mysqli_close($conn); ?>
