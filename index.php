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
				<h2 class="">All Task</h2>
				<div class="tasks-container">
					<?php
						require_once './database.php';
						$query = "SELECT * FROM tasks";
						$stmt = mysqli_prepare($conn, $query);
						mysqli_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
					?>

					<?php if (mysqli_num_rows($result) > 0): ?>
						<?php while($row = mysqli_fetch_assoc($result)) { ?>
							<div class="p-2 card">
								<h4><?= $row["name"] ?></h4>
								<p class="m-0"><?= $row["description"] ?></p>
								<p>Due: <?= $row["due_date"] ?></p>
								<p class="m-0"><?= $row["status"] === 0 ? "not done" : "done" ?></p>
							</div>
						<?php } ?>
					<?php endif; ?>
				</div>
			</div>
		</main>
		<?php require_once './inc/footer.php'; ?>
	</body>
</html>
<?php mysqli_close($conn); ?>