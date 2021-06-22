<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de la flotte</title>

        <link rel="stylesheet" href="./css/flower.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>


    </head>
    <body>
            <h1>Gestion de la flotte</h1>


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
                <div id="explication">Aller sur la fleur pour choisir votre option.</div>



            </div>




                <footer>
                    <footerLeft>
                    </footerLeft>
                    <div id="footerRight">
                        <?php
                            if(DB::connection()->getPdo()){
                                //echo "Status: OK pour la database : " . DB::connection()->getDatabaseName();
                                echo "Status: OK";
                            }


                        ?>
                        </br>Bruxelles : {{date('H:i')}}
                        <br>&copy; Coyright 2021&middot; <a href="about" id="/about">About us</a>
                    </div>
                </footer>

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
