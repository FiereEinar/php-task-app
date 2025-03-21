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
		<?php include './inc/header.php'; ?>
		<main class="main-content-container">
			<?php include './inc/sidebar.php'; ?>
			<div class="main-content">
				<h2 class="">All Task</h2>
				<div>
					<?php
						// $query = "SELECT * FROM tasks";
						// $result = mysqli_query($conn, $query);
						// if (mysqli_num_rows($result) > 0) {
						// 	while ($row = mysqli_fetch_assoc($result)) {
						// 		echo "<div class='card'>";
						// 		echo "<h3>" . $row["name"] . "</h3>";
						// 		echo "<p>" . $row["description"] . "</p>";
						// 		echo "<p>" . $row["due_date"] . "</p>";
						// 		echo "<p>" . $row["status"] . "</p>";
						// 		echo "<p>" . $row["priority"] . "</p>";
						// 		echo "<p>" . $row["created_at"] . "</p>";
						// 		echo "<p>" . $row["updated_at"] . "</p>";
						// 		echo "</div>";
						// 	}
						// } else {
						// 	echo "No task found";
						// }
					?>
				</div>
			</div>
		</main>

		<?php

		?>

		<?php include './inc/footer.php'; ?>
	</body>
</html>
