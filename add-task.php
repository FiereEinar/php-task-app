<!DOCTYPE html>
<?php
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $due_date = $_POST["due_date"];
    $status = $_POST["status"]; 
    $priority = $_POST["priority"];
    $created_at = date("Y-m-d H:i:s");
    $updated_at = date("Y-m-d H:i:s");

    $query = "INSERT INTO tasks (name, description, due_date, status, priority, created_at, updated_at) VALUES ('$name', '$description', '$due_date', '$status', '$priority', '$created_at', '$updated_at')";
    $result = mysqli_query($conn, $query);
    if ($result) {
      echo "Task added successfully";
    } else {
      echo "Failed to add task";
    }
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
			<div>
				<h2 class="">Add Task</h2>
				<form class="card" action="">
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input
						type="text"
						class="form-control"
						name="name"
						id="name"
						aria-describedby="helpId"
						placeholder="Task name"
						/>
					</div>
				</form>
			</div>
		</main>

		<?php

		?>

		<?php include './inc/footer.php'; ?>
	</body>
</html>
