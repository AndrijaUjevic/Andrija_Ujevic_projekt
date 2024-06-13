<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>L'OBS</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            header {
                width: 100%;
                text-align: center;
                padding: 20px 0;
                border-bottom: 1px solid #ccc;
            }
            header h1 {
                margin: 0;
            }
            nav {
                margin-top: 10px;
            }
            nav a {
                margin: 0 15px;
                text-decoration: none;
                color: black;
                font-weight: bold;
            }
            .content {
                width: 80%;
                max-width: 1200px;
                margin-top: 20px;
            }
            .section {
                margin-bottom: 40px;
            }
            .section h2 {
                margin-bottom: 20px;
                text-align: center;
            }
            .articles {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
            .article {
                width: 30%;
                margin-bottom: 20px;
            }
            .article img {
                width: 100%;
                height: auto;
            }
            .article h3 {
                margin: 10px 0;
            }
            .article p {
                color: grey;
            }
            footer {
                width: 100%;
                text-align: center;
                padding: 20px 0;
                border-top: 1px solid #ccc;
                margin-top: auto;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>L'OBS</h1>
            <nav>
                <a href="#">Početna</a>
                <a href="clanak.php" target="_blank">Članak</a>
                <a href="kontakt.php" target="_blank">Kontakt</a>
                <a href="#">Immobilier</a>
            </nav>
        </header>
        <div class="content">
            <div class="section">
                <h2>Politique</h2>
                <div class="articles">
                    <div class="article">
                        <img src="path/to/image1.jpg" alt="Article Image">
                        <h3>« La culture chrétienne, la sécurité, la famille : voilà les valeurs que la Hongrie veut protéger »</h3>
                        <p>Monde - Publié il y a 3 heures</p>
                    </div>
                    <div class="article">
                        <img src="path/to/image2.jpg" alt="Article Image">
                        <h3>« Les Européens, ce n’est pas le problème » : en Autriche, une extrême droite banalisée</h3>
                        <p>Monde - Publié il y a 18 heures</p>
                    </div>
                    <div class="article">
                        <img src="path/to/image3.jpg" alt="Article Image">
                        <h3>L’Europe, proie des vampires du populisme</h3>
                        <p>Edito - Publié il y a 19 heures</p>
                    </div>
                </div>
            </div>
            <div class="section">
                <h2>Immobilier</h2>
                <div class="articles">
                    <div class="article">
                        <img src="path/to/image4.jpg" alt="Article Image">
                        <h3>Haut-Rhin : entre Colmar et Mulhouse, les hauts et les bas du marché immobilier</h3>
                        <p>Immobilier - Publié il y a 3 heures</p>
                    </div>
                    <div class="article">
                        <img src="path/to/image5.jpg" alt="Article Image">
                        <h3>Dans la Meuse et les Vosges, la grisaille immobilière</h3>
                        <p>Immobilier - Publié il y a 3 heures</p>
                    </div>
                    <div class="article">
                        <img src="path/to/image6.jpg" alt="Article Image">
                        <h3>A Nancy, un horizon immobilier radieux</h3>
                        <p>Immobilier - Publié il y a 1 jour</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>&copy; L'Obs - Les marques ou contenus du site nouvelobs.com sont soumis à la protection de la propriété intellectuelle</p>
        </footer>
    </body>
</html>
