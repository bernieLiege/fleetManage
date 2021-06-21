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
            <h1>La bienvenue dans la gestion de la flotte de TataYoyo !      </h1>


            <div class="cat">
                <div class="cat-main">
                        <div class="info"></div>
                        <a href="/vehicule" class="portfolio-link"><div class="petal portfolio"></div></a>
                        <a href="/personnel" class="contact-link"><div class="petal contact"></div></a>
                        <a href="#" class="socialmedia-link"><div class="petal socialmedia"></div></a>
                        <a href="#" class="inspiration-link"><div class="petal inspiration"></div></a>
                        <a href="#" class="mystery-link"><div class="petal mystery"></div></a>
                </div>

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
