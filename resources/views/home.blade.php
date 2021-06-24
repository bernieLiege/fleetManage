<!doctype html>
<html lang="en">
<head>
  	<title>Home:Gestion Flotte Miam!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="./css/flower.css">


</head>
<body>
    <div class="container">
		<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="/about">Miam !</a>
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="https://www.facebook.com/grospaysan/" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="https://twitter.com/Ouille_le_code" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    		</p>
	            </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>
                    <li class="nav-item"><a href="/sinistre" class="nav-link">Urgence !</a></li>
		        	<li class="nav-item"><a href="/vehicule" class="nav-link">Véhicule</a></li>
		        	<li class="nav-item"><a href="/personnel" class="nav-link">Personnel</a></li>
		            <li class="nav-item"><a href="/suivi" class="nav-link">Suivi</a></li>
                    <li class="nav-item"><a href="/reservation" class="nav-link">Réservation</a></li>
		        </ul>
		      </div>
		    </div>
        </nav>
    </div>
    <!-- END nav -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="cat">
                <div class="cat-main">
                        <div class="info"></div>
                        <a href="/vehicule" class="vehicule-link" ><div id="vehicule"  class="petal vehicule">Véhicule</div></a>
                        <a href="/personnel" class="personnel-link" ><div id="personnel" class="petal personnel">Personnel</div></a>
                        <a href="/reservation" class="reservation-link" ><div id="reservation"  class="petal reservation">Réservation</div></a>
                        <a href="/suivi" class="suivi-link" ><div id="suivi" class="petal suivi">Suivi</div></a>
                        <a href="/sinistre" class="sinistre-link"><div  id="sinistre" class="petal sinistre">Sinistre</div></a>
                        <?php
                            /*
                            Menu:
                            -gestion vehicule : CRUD +  lien vers entretien, sinistre

                            */
                        ?>

                </div>
            </div>
        </div>
        <center>
            <div id="explication">Aller sur la fleur pour choisir votre option.</div>
        </center>

    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>


        let d1 = document.getElementById("suivi");

        d1.onmouseover = function() {
            document.getElementById("explication").innerText="Gestion Suivi des véhicules";
            document.getElementById("explication").style.color= 'orange';
        }
        d1.onmouseout = function() {
            document.getElementById("explication").innerText="Aller sur la fleur pour choisir votre option.";
            document.getElementById("explication").style.color= 'red';
        }

        let d2 = document.getElementById("personnel");

        d2.onmouseover = function() {
            document.getElementById("explication").innerText="Gestion des utilisateurs";
            document.getElementById("explication").style.color= 'orange';
        }
        d2.onmouseout = function() {
            document.getElementById("explication").innerText="Aller sur la fleur pour choisir votre option.";
            document.getElementById("explication").style.color= 'red';
        }

        let d3 = document.getElementById("sinistre");

        d3.onmouseover = function() {
            document.getElementById("explication").innerText="Gestion et signalisation des sinistres";
            document.getElementById("explication").style.color= 'orange';
        }
        d3.onmouseout = function() {
            document.getElementById("explication").innerText="Aller sur la fleur pour choisir votre option.";
            document.getElementById("explication").style.color= 'red';
        }

        let d4 = document.getElementById("vehicule");

        d4.onmouseover = function() {
            document.getElementById("explication").innerText="Gestion des véhicules (Lire/modif)";
            document.getElementById("explication").style.color= 'orange';
        }
        d4.onmouseout = function() {
            document.getElementById("explication").innerText="Aller sur la fleur pour choisir votre option.";
            document.getElementById("explication").style.color= 'red';
        }

        let d5= document.getElementById("reservation");

        d5.onmouseover = function() {
            document.getElementById("explication").innerText="Gestion réservation des véhicules";
            document.getElementById("explication").style.color= 'orange';
        }
        d5.onmouseout = function() {
            document.getElementById("explication").innerText="Aller sur la fleur pour choisir votre option.";
            document.getElementById("explication").style.color= 'red';
        }
    </script>

</body>
</html>
