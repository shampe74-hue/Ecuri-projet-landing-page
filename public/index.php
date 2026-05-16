<?php
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

        <button type="button">Menu</button>

        <nav class="navbar">
            <ul>
                <li><a href="#probleme">Probleme</a></li>
                <li><a href="#solution">Solution</a></li>
                <li><a href="#produit">Produit</a></li>
                <li><a href="#avis">Avis</a></li>
                <li><a href="#formulaire">Formulaire</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <video src=""></video>

        <section class="hero_main">
            <h2>Titre</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corrupti, ratione!</p>
            <p>Lorem ipsum dolor sit, amet consectetur </p>
            <p>Lorem ipsum dolor sit</p>
            <a href="">CLIQUEZ</a>
        </section>

    </div>

    <main>
        <section class="bg-probleme" id="problem">
            <div>
                <h3>Problème</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis ducimus illum impedit, obcaecati porro et assumenda quia, ex non earum expedita rem libero at quasi consequuntur natus maiores fuga doloribus adipisci quis nostrum explicabo optio ea! Voluptates qui eum officia sint dolorum velit magni eos eaque sed voluptas, odio ipsum?</p>
            </div>

        </section>

        <section id="solution">
            <h3>Solution</h3>
            <div class="solution_main">
                <figure class="solution_img_left">
                    <picture>
                        <source src="" type="">
                        <source src="" type="">
                        <img src="" alt="">
                    </picture>
                </figure>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat nihil quis eveniet esse harum accusamus perferendis repellendus minima laborum cumque!</p>

                <figure class="solution_img_right">
                    <picture>
                        <source src="" type="">
                        <source src="" type="">
                        <img src="" alt="">
                    </picture>
                </figure>
            </div>
        </section>

        <section id="produit">
            <div>
                <h3>Détail</h3>
                <div class="slides">
                    <div class="slide">
                        <figure>
                            <img src="" alt="">
                        </figure>

                        <section>
                            <h4>Skils</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quis quidem earum illo dolores, quas deleniti eius. Modi, debitis aliquid.</p>
                        </section>

                    </div>

                    <div class="slide">
                        <figure>
                            <img src="" alt="">
                        </figure>

                        <section>
                            <h4>Skils</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit quis quidem earum illo dolores, quas deleniti eius. Modi, debitis aliquid.</p>
                        </section>

                    </div>


                </div>
            </div>
        </section>

        <section id="avis">
            <figure>
                <img src="" alt="">
            </figure>

            <h3>Confiance</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid cumque ipsam ratione nisi, nihil illum laboriosam quibusdam! Cupiditate, optio laboriosam?</p>
        </section>

        <section id="formulaire">
            <h3>Formulaire</h3>

            <form action="" method="post" class="form">
                <div class="form_nom">
                    <label for="name">Nom:</label>
                    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($data["nom"]) ?>" placeholder="Entrer votre nom" required>
                    <p>Votre nom doit avoir 2 caracartere minimum et commencer par une majuscule</p>
                    <?php if (htmlspecialchars(!empty($erreurs))) : ?>;
                        <div class="err">
                         <p><?= $erreurs; ?></p>
                         </div>
                     <?php endif; ?>
                </div>

                <div class="form_prenom">
                    <label for="name">Prénom:</label>
                    <input type="text" name="prenom" id="prenom"  value="<?= htmlspecialchars($data["prenom"]) ?>" placeholder="Entrer votre prenom" required>
                    <p>Votre nom doit avoir 2 caracartere minimum et commencer par une majuscule</p>
                    <?php if (htmlspecialchars(!empty($erreurs))) : ?>;
                        <div class="err">
                         <p><?= $erreurs; ?></p>
                         </div>
                     <?php endif; ?>
                </div>

                <div class="form_email">
                    <label for="name">Email:</label>
                    <input type="text" name="name" id="name"  value="<?= htmlspecialchars($data["email"]) ?>" placeholder="example@gmail.com" required>
                    <?php if (htmlspecialchars(!empty($erreurs))) : ?>;
                        <div class="err">
                         <p><?= $erreurs; ?></p>
                         </div>
                     <?php endif; ?>
                </div>

                <div class="form_demande">
                    <label for="name">Demande:</label>
                    <textarea name="demande" id="demande" cols="30" rows="10"  value="<?= htmlspecialchars($data["demande"]) ?>" placeholder="Décrivez votre demande" required>

                    </textarea>
                    <p>Minimum : 2 Caractère/ Maximum : 300 Caractère</p>
                    <?php if (htmlspecialchars(!empty($erreurs))) : ?>;
                        <div class="err">
                         <p><?= $erreurs; ?></p>
                         </div>
                     <?php endif; ?>
                </div>

                <button type="submit">Envoyez</button>
                <button type="reset">Effacer</button>
            </form>

            <div class="result"></div>
        </section>

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