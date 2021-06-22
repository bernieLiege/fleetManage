<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion de la flotte</title>

        <link rel="stylesheet" href="./css/flower.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


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
                        <a href="/vehicule" class="vehicule-link"><div class="petal vehicule">Véhicule</div></a>
                        <a href="/personnel" class="personnel-link"><div class="petal personnel">Personnel</div></a>
                        <a href="/reservation" class="reservation-link"><div class="petal reservation">Réservation</div></a>
                        <a href="/suivi" class="suivi-link"><div class="petal suivi">Suivi</div></a>
                        <a href="/sinistre" class="sinistre-link"><div class="petal sinistre">Sinistre</div></a>
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
                <?php
                    if(DB::connection()->getPdo()){
                        echo "Status: OK pour la database : " . DB::connection()->getDatabaseName();
                    }


                ?>
                </br>Hr. Bruxelles : {{date('H:i')}}
                <br>&copy; Coyright 2021&middot; <a href="about" id="/about">About us</a>
            </footer>
    </body>
</html>
