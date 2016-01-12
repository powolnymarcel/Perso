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
    if (!$_POST['nom'] || $_POST['nom']=='') {
        $errNom = 'Veuillez entrer votre nom';
    }
    else{
        $errNom='';
    }

    // Verifier si le mail est entré et valide
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || $_POST['email']=='') {
        $errEmail = 'Veuillez entrer une adresse e-mail valide';
    }   else{
        $errEmail='';
    }

    //Vérifier si message présent
    if (!$_POST['message'] || $_POST['message']=='') {
        $errMessage = 'Veuillez écrire un message';
    } else{
        $errMessage='';
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
    <link href="plugin/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="plugin/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
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
        <div class="col-md-6 col-xs-12">
            <section class="mon-nom">
                <h1>Powolny <i>Marcel</i></h1>
                <h2>Developpeur Web</h2>
                <p>Mon nom est Powolny Marcel. Je suis un Web developpeur à Liège, Belgique.
                    Titulaire d'un Brevet d'Enseignement Supérieur (BAC+2) reconnu au niveau européen,</p>
                <p>je crée des sites web avec des outils tels que Symfony, Laravel ou encore M.E.A.N.</p>
                <p>J'aime tout ce qui concerne les nouvelles technologies et je suis passionné par le developpement Web.</p>
                <p>Si vous avez un projet ou un job pour moi, contactez-moi.</p>
                <br>

            </section>
        </div>
        <div class="col-md-6 col-xs-12">
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
            <ul class="social social2">
                <li>
                    <a title="twitter" target="_blank" href="http://twitter.com/Marcpowo">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a title="github" target="_blank" href="https://github.com/powolnymarcel">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
                    <a title="linkedin" target="_blank" href="https://linkedin.com/in/marcpowo/">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="techno" style="background: #ffffff">
    <section id="techno" class="space-50 light-bg">
        <div class="techno-slider  theme-slider">
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/logo-javascript.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/AngularJS-large.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/node.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://blog.papsou.org/wp-content/uploads/2014/06/symfony.jpg" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/githuboctocat.jpeg" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/grunt-logo.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/Heroku_logo.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/logo-npm-300x90-light.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/mongo-db-logo.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/MongoLab-Logo-OnWhite-RGB.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/twitter-bootstrap.png" alt=""> </a> </div>
            <div class="item"> <a href="#" class="thumbnail" target="_blank"> <img class="img-responsive" src="http://www.ondego.be/divers/technoSitePerso/bower_logo.png" alt=""> </a> </div>

        </div>
    </section>
</div>


<section style="background: #ffffff">
    <div class="container" style="background: #ffffff;">
        <div class="row">
            <div class="titreContact">
                <h2>CONTACT</h2>
            </div>
            <form class="col-md-offset-2 no-padding col-md-8 col-sm-12" id="contact-form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#contact-form">>
                <div class="form-group col-sm-12 form-alert"></div>
                <div class="contact-form">
                    <div class="form-group col-sm-6 no-padding">
                        <input type="text" id="cf_name" value="<?php echo htmlspecialchars($_POST['nom']); ?>" name="nom" placeholder="Votre nom" class="form-control name input-your-name">
                    </div>
                    <div class="form-group col-sm-6 no-padding">
                        <input type="email" id="cf_email" value="<?php echo htmlspecialchars($_POST['email']); ?>" name="email" placeholder="Votre Email" class="form-control email input-email">
                    </div>
                    <div class="form-group col-sm-12 no-padding">
                        <textarea id="cf_message" name="message" placeholder="Votre Message" cols="10" rows="8" class="form-control message input-message" ><?php echo htmlspecialchars($_POST['message']);?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="humain" class="col-sm-2 control-label">2 + 3 = ?</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="humain" name="humain" placeholder="Votre reponse">
                            <?php echo "<p class='text-danger'>$errHumain</p>";?>
                        </div>
                    </div>
                </div>
                <?php echo "<p class='text-danger'>$errNom</p>";?>
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2" style="font-size: 15px;text-align: center">
                        <?php echo $result; ?>
                    </div>
                </div>
                <div class="form-group col-sm-12 no-padding text-center">
                    <input class="theme-btn btn submit-btn submit-button" id="submit" name="submit" type="submit" value="Envoyer" >
                </div>


            </form>

        </div>
    </div>
</section>



<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 margin copy">
                <p>&copy; <?php echo date("Y") ?> ONDEGO - Tous droits réservés</p>
            </div>
            <div class="col-lg-4 col-sm-6 col-offset-2 margin social">
                <a target="_blank" href="http://www.facebook.com/marcpow88" class="facebook">Facebook</a> /
                <a target="_blank" href="http://www.twitter.com/Marcpowo" class="twitter">Twitter</a> /
                <a target="_blank" href="https://plus.google.com/u/0/102260711725671307822/posts" class="google">Google+</a> /
                <a target="_blank" href="https://linkedin.com/in/marcpowo/" class="linkedin">Linkedin</a> /
                <a target="_blank" href="http://www.instagram.com/Marcpowo" class="github">Github</a>
            </div>

        </div>
</section>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="plugin/owl-carousel/owl.carousel.min.js"></script>
<script>
    $(".techno-slider").owlCarousel({
        pagination: false,
        autoPlay: true, //Set AutoPlay to 3 seconds
        items: 6,
        itemsDesktop: [1199, 6],
        itemsDesktopSmall: [1024, 5],
        itemsTablet: [991, 3],
        itemsTabletSmall: [600, 2],
        itemsMobile: [480, 1]
    });
    $('.nav-toggle').on('click', function () {
        $('nav').addClass('open');
    });
    $('.nav-close').on('click', function () {
        $('nav').removeClass('open');
    });

    $('nav ul li a').on('click', function () {
        $('nav').removeClass('open');
    });


    //Changer couleur menu si la section techno est depassée au scroll
    $(document).scroll(function() {
        if($(document).scrollTop() > $("#techno").position().top) {
            $('header>i').css('color', 'black');

        } else {
            $('header>i').css('color', 'white');
    }
    });
</script>



</body>
</html>
