<?php
	if (isset($_POST["submit"])) {
		$nom = $_POST['nom'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$humain = intval($_POST['humain']);
		$from = 'Formulaire ondego.be';
		$to = 'powolnymarcel@gmail.com';
		$subject = 'Message du formulaire ondego.be ';

		$body ="From: $nom\n E-Mail: $email\n Message:\n $message";
		// Si nom entré
		if (!$_POST['nom']) {
			$errNom = 'Veuillez entrer votre nom';
		}

		// Verifier si le mail est entré et valide
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Veuillez entrer une adresse e-mail valide';
		}

		//Vérifier si message présent
		if (!$_POST['message']) {
			$errMessage = 'Veuillez écrire un message';
		}
		//Anti robot simple
		if ($humain !== 5) {
			$errHumain = 'Réponse incorrecte';
		}
// Si pas d'erreurs, envoi du mail
if (!$errNom && !$errEmail && !$errMessage && !$errHumain) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Merci, je vous contacte au plus vite</div>';
} else {
$result='<div class="alert alert-danger">Désolé, une erreur est survennue, veuillez ré-essayer plus tard.</div>';
}
}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
	    <title>Powolny Marcel</title>
	    <meta name="description" content="Je suis Powolny Marcel, web developpeur à Liège." />
	    <meta name="author" content="Powolny Marcel" />

	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	    <link rel="stylesheet" href="css/font-awesome.css" />
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/icomoon.css" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<header class="header">
			<i class="nav-toggle fa fa-bars"></i>
		</header>
		<nav>
			<ul>
				<li><i class="nav-close icon-cross3"></i></li>
				<li><h2>Salut!</h2></li>
			</ul>
		</nav>
					<div class="container">
							<div class="row">
								<div class="col-md-6 ">
									<section class="mon-nom">
									<h1>Powolny <i>Marcel</i></h1>
									<h2>Developpeur Web</h2>
										<p>Mon nom est Powolny Marcel. Je suis un Web developpeur à Liège, Belgique.
										Titulaire d'un Brevet d'Enseignement Supérieur (BAC+2) reconnu au niveau européen,</p>
										<p>je crée des sites web avec des outils tels que Symfony, Laravel ou encore M.E.A.N.</p>
										<p>J'aime tout ce qui concerne les nouvelles technologies et je suis passionné par le developpement Web.</p>
										<p>Si vous avez un projet ou un job pour moi, contactez-moi.</p>
										<br>
										<a href="https://twitter.com/Marcpowo">@Marcpowo</a>
									</section>
								</div>
								<div class="col-md-6">
										<div class="excerpt">
											<h5>Competences logicielles</h5>
											<ul>
												<li>Webstorm</li>
												<li>PHPstorm</li>
												<li>Adobe Photoshop</li>
												<li>Adobe Fireworks</li>
											</ul>
											<br>
											<h5>Competences coding</h5>
											<ul>
												<li>HTML5 / CSS3</li>
												<li>Javascript, NodeJS, MongoDB, ExpressJS, AngularJS</li>
												<li>PHP, Symfony, Laravel</li>
											</ul>
										</div>
									</div>
								</div>
						<div class="row contact">
						<div class="col-md-6 col-md-offset-3">

							<form class="form-horizontal" role="form" method="post" action="index.php">
								<div class="form-group">
									<label for="nom" class="col-sm-2 control-label">Nom</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom & prénom" value="<?php echo htmlspecialchars($_POST['nom']); ?>">
										<?php echo "<p class='text-danger'>$errNom</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="email" name="email" placeholder="exemple@FAI.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
										<?php echo "<p class='text-danger'>$errEmail</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="message" class="col-sm-2 control-label">Message</label>
									<div class="col-sm-10">
										<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
										<?php echo "<p class='text-danger'>$errMessage</p>";?>
									</div>
								</div>
								<div class="form-group">
									<label for="humain" class="col-sm-2 control-label">2 + 3 = ?</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" id="humain" name="humain" placeholder="Votre reponse">
										<?php echo "<p class='text-danger'>$errHumain</p>";?>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-primary">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<?php echo $result; ?>
									</div>
								</div>
							</form></div>
						</div>
					</div>



		<script src="js/jquery.js" type="text/javascript"></script>

		<script>

			$('.nav-toggle').on('click', function () {
				$('nav').addClass('open');
			});
			$('.nav-close').on('click', function () {
				$('nav').removeClass('open');
			});

			$('nav ul li a').on('click', function () {
				$('nav').removeClass('open');
			});
		</script>
	</body>
</html>