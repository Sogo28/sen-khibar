<?php include ("databaseConnector.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
	<title>Sen Khibar</title>
</head>

<body>
	<div class="top-bar">
		<div class="logo-container"><span class="logo">Sen Khibar</span></div>
		<nav>
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<?php
				$sql = "SELECT * FROM categorie";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while ($row = $result->fetch_assoc()) {
						?>
						<li><a href="afficher.php?id=<?= $row['id'] ?>"><?= $row['libelle'] ?></a></li>
						<?php
					}
				}
				?>
			</ul>
		</nav>
	</div>
	<div class="container">
		<?php
		$sql = "SELECT * FROM article";
		$result = $conn->query($sql);
		?>
		<div class="articles-container">
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					?>
					<div class="article">
						<h3 class="titre"><?= $row['titre'] ?></h3>
						<p class="contenu"><?= $row['contenu'] ?></p>
					</div>
				<?php }
			} ?>
		</div>
	</div>
</body>

</html>