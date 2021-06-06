<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="public/css/style.css" />
    <meta name="viewport" content="width=device-width, intial-scale=1" />
</head>

<body>
    <div id="conteneur">
        <header>HEADER</header>
        <div id="contenu">
            <nav>
                <ul>
                    <li>
                        <a href="accueil">Accueil</a>
                    </li>
                    <li>
                        <a href="favoris">Favoris</a>
                    </li>
                    <li>
                        <a href="sucre">Calculer votre consommation de sucre</a>
                    </li>
                    <li>
                        <a href="connexion">Connexion</a>
                    </li>

                </ul>
            </nav>
            <main>
                <section>
                    <h1><?= $titre ?></h1>
                    <?= $content ?>
                </section>
                <div id="boiteAside">
                    <aside>ASIDE</aside>
                    <aside>ASIDE</aside>
                    <aside>ASIDE</aside>
                </div>
            </main>
        </div>
        <footer>FOOTER</footer>
    </div>
    <script src="public/js/script.js"></script>
</body>

</html>