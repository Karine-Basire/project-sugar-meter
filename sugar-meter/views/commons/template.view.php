<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="public/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <div id="conteneur">
        <header>HEADER</header>
        <div id="contenu">
            <nav>
                <ul>
                    <?php if (!Securite::verifAccessSession()) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>login">Login</a>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="<?= URL ?>user">user</a>
                        </li>
                        <li>
                            <a href="<?= URL ?>favoris">Favoris</a>
                        </li>
                        <li>
                            <a href="<?= URL ?>sucre">Calculer votre consommation de sucre</a>
                        </li>
                        <li>
                            <a href="<?= URL ?>consommations">Consommations à la journée</a>
                        </li>
                        <li>
                            <a href="<?= URL ?>deconnexion">deconnexion</a>
                        </li>
                    <?php endif; ?>
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