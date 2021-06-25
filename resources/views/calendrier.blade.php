<!doctype html>
<html lang="en">
<head>
	<title>Calendrier</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/calendar.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./css/flower.css">



</head>
<body>
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
                <li class="nav-item active"><a href="/" class="nav-link">Accueil</a></li>
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
        <h1>Visu Calendrier des réservations</h1>
    </div>


</div>


<?php

// recuperation du jous, mois, et année actuel
$jour_actuel = date("j", time());
$mois_actuel = date("m", time());
$an_actuel = date("Y", time());
$jour = $jour_actuel;

// si la variable mois n'existe pas, mois et année correspondent au mois et à l'année courante
if(!isset($_GET["mois"])){
	$mois = $mois_actuel;
	$an = $an_actuel;
}
else{
 $mois = $_GET["mois"];
 $an = $_GET["an"];
}
//definit le mois suivant
$mois_suivant = $mois + 1;
$an_suivant = $an;
if ($mois_suivant == 13){
	$mois_suivant = 1;
	$an_suivant = $an + 1;
}

//defini le mois précédent
$mois_prec = $mois - 1;
$an_prec = $an;
if ($mois_prec == 0)
{
	$mois_prec = 12;
	$an_prec = $an - 1;
}


//affichage du mois et de l'année en french
$mois_de_annee = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
$mois_en_clair = $mois_de_annee[$mois - 1];


// creation d'un tableau à 31 entrée (1 pour chaques jours) et on dit qu'aucuns jours n'est reservé
for($j = 1; $j < 32; $j++) $tab_jours[$j] = (bool)false;


$mois=ltrim($mois,"0");
$requete="SELECT * FROM calendrier WHERE YEAR(jour) = $an	AND MONTH(jour) = $mois";
$resultat = DB::select($requete);

//echo $requete;
//dd($resultat-> jour);

foreach($resultat as $elementLu){
	$jours =  $elementLu->jour." ";
	$id =  $elementLu->Id ." ";
	// transforme aaaa/mm/jj en jj
	$jour_reserve = (int)substr($jours, 8, 2);
	// insertion des jours reservé dans le tableau
	$tab_jours[$jour_reserve] = (bool)true;
}




?>
<br />

<table align="center" width="420" border="0" cellpadding="5" cellspacing="0"  class="tab_cal">
	<tr>
		<td height="51" colspan="7">
			<table width="381" border="0" cellpadding="0" cellspacing="0">
				<tr>
				  <td width="290" class="date"><div><?php echo $mois_en_clair," ", $an; ?></div></td>
					<td width="50">
						<a href="/calendrier?mois=<?php echo $mois_prec; ?>&an=<?php echo $an_prec; ?>">
					  <div align="left"><img border="0" src="img/prec.png" /></div></a>
				  </td>
					<td width="41">
						<a href="/calendrier?mois=<?php echo $mois_suivant; ?>&an=<?php echo $an_suivant; ?>">
					  <div><img border="0" src="img/suiv.png" /></div>
					  </a>
				  </td>
				</tr>
		  </table>
	  </td>
	</tr>
	<tr align="center" class="jours">
		<td width="60">D</td>
		<td width="60">L</td>
		<td width="60">M</td>
		<td width="60">M</td>
		<td width="60">J</td>
		<td width="60">V</td>
		<td width="60">S</td>
	</tr>
</table>
<table align="center"  width="420" border="0" cellpadding="5" cellspacing="0"  class="tab_numero">
	<tr align="center">
<?php
//Détection du 1er et dernier jour du moiS
$nombre_date = mktime(0,0,0, $mois, 1, $an);
$premier_jour = date('w', $nombre_date);
$dernier_jour = 28;
while (checkdate($mois, $dernier_jour + 1, $an))
	{ $dernier_jour++;}

//Affichage de 7 jours du calendrier

for ($i = 0; $i < 7; $i++){
	if ($i < $premier_jour){
		echo "<td width=60></td>";
	}
	else{
		$ce_jour = ($i+1) - $premier_jour;
		// si c'est un jour reserve on applique le style reserve
		if($tab_jours[$ce_jour]){
			echo '<td width="60" class="reserve">';
		// sinon on ne met pas de style
		}else{
			echo '<td width="60">';
		}
		echo $ce_jour;
		echo '</td>';
	}
}
//affichage du reste du calendrier
$jour_suiv = ($i+1) - $premier_jour;
for ($rangee = 0; $rangee <= 4; $rangee++){
		echo '</tr>';
		echo '<tr align="center" class="numero">';
		for ($i = 0; $i < 7; $i++){
			if($jour_suiv > $dernier_jour){
				echo '<td width="60">';
				echo '</td>';
			}else{
				// si c'est un jour reserve on applique le style reserve
				if($tab_jours[$jour_suiv]){
					echo '<td width="60" class="reserve">';
				// sinon on ne met pas de style
				}else{
					echo '<td width="60">';
				}
				//echo $tab_jours[$jour_suiv];
				echo $jour_suiv;
				echo '</td>';
			}
			$jour_suiv++;
		}
}
?>
</tr>
</table>
<table align="center" width="420" height="121" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60" height="43" align="center"><img border="0" src="img/prec.png" /></td>
    <td width="380"><div class="descriptif"> Voir le mois suivant.</div></td>
  </tr>
  <tr>
    <td width="60" height="46" align="center"><img border="0" src="img/suiv.png" /></td>
    <td><div class="descriptif"> Voir le mois Pr&eacute;cedant </div></td>
  </tr>
  <tr>
    <td width="60" align="center" height="32" class="reserve">XX</td>
    <td><div class="descriptif"> Jour d&eacute;ja r&eacute;serv&eacute;..</div></td>
  </tr>
</table>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>



</body>
</html>
