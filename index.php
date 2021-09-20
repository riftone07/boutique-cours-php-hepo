<?php 
	include('produits.php')
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Boutique en ligne</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Ma Boutique</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Accueil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">A propos</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Boutique
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Nouveaux Produits</a></li>
							<li><a class="dropdown-item" href="#">Produits Populaires</a></li>

						</ul>
					</li>

				</ul>
				<form class="d-flex">
					<button class="btn btn-outline-dark" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
							<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
						</svg>
						Panier <span class="badge bg-dark">0</span></button>
					</form>
				</div>
			</div>
		</nav>

		<header class="py-5" >
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center text-white my-5 bg-dark opacity-75 py-2">
						<h1 class="fw-bolder display-4">Achetez votre style</h1>
						<p>Devenez le centre de l'attention</p>
						<a href="#" class="btn btn-primary">Acheter Maintenant</a>
					</div>
				</div>
			</div>
		</header>

		<div class="container mt-5">
			<div class="row">

				<?php foreach($produits as $produit) {?>

				<div class="col-lg-4 mt-2 ">
					<div class="card h-100">
						<img src="images/<?php echo $produit['image'] ?>" >
						<div class="card-body text-center">
							<h2><?php echo $produit['nom'] ?></h2>
							<p><?php echo $produit['prix'] ?> Fcfa</p>
							<a href="#" class="btn btn-outline-dark" >Ajouter</a>
						</div>
					</div>
				</div>

			<?php } ?>
				

			</div>
		</div>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</body>
	</html>