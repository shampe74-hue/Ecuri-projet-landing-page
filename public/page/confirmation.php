<?php
session_start();
require_once __DIR__ . "../../app/config/";
require_once __DIR__ . "../../app/formulaire/ecuri-form.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">

    <meta prorerty="og:title" content="">
    <meta prorerty="og:description" content="">
    <meta prorerty="og:image" content="">
    <meta prorerty="og:url" content="">
    <meta prorerty="og:type" content="">

    <meta name="twiter:title" content="">
    <meta name="twiter:description" content="">
    <meta name="twiter:card" content="">


    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="canonical" href="">

    <script src="" defer></script>

    <title>Document</title>
</head>

<body>
    <header>
        <div class="logo">
            <figure>
                <img src="" alt="">
            </figure>

            <h1 id="titre"><a href="#">Titre</a></h1>
        </div>
    </header>
    <main>

        <?php if (!empty($_SESSION["resultat"])) : ?>

            <div>

                <h3>Succès</h3>

                <p class="green">
                    <?= htmlspecialchars($_SESSION["resultat"]) ?>
                </p>

            </div>

            <?php unset($_SESSION["resultat"]); ?>

        <?php endif; ?>


        <?php if (!empty($_SESSION["error"])) : ?>

            <div>

                <h3>Erreur</h3>

                <p class="red">
                    <?= htmlspecialchars($_SESSION["error"]) ?>
                </p>

            </div>

            <?php unset($_SESSION["error"]); ?>

        <?php endif; ?>

    </main>

    <footer>
        <div class="logo">
            <figure>
                <img src="" alt="">
            </figure>

            <h1 id="titre">Titre</h1>
        </div>

        <div class="liens">
            <div>
                <h4>Mentions légal</h4>
                <ul>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>

            <div>
                <h4>Nous Contacter</h4>
                <ul>
                    <li>tel</li>
                    <li>email</li>
                </ul>
            </div>
        </div>

        <p><strong><em>&copy;2026 Titre</em></strong></p>
    </footer>


</body>

</html>