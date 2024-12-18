<DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg" href="src/images/favicon.svg">
    <link rel="icon" type="image/ico" href="src/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=1.0.1">
    <meta lang="fr">
    <meta name="description" content="Page de formulaire site Objectif Lune, site concept, dynamique. Design et conceptuel, ce site est un projet de première année de But MMI">
    <title>Objectif lune</title>
</head>

<!-- Le header et le footer se répète, les mains diffèrent et ont des sélécteurs id, et sont similaires sur les pages d'informations -->

<body>
    <header>
        <nav>
            <!-- Même menu de navigation mais avec des différences de chemins que sur les html -->
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="../terre.html">Contexte</a></li>
                <li><a href="../missions.html">Missions</a></li>
                <li><a href="../apollo.html">Apollo 11</a></li>
            </ul>
        </nav>
    </header>
    <main id="accueil">
        <h1>Un avis sur objectif lune ?</h1>
        <form method="post" action="form.php" method="POST">
            <h2>Votre mail</h2> <input type="email" name="email">
            <ul id="rate">
                <li><input type="radio" name="validation" value="1"></li>
                <li>Êtes-vous humains? Cochez à droite si oui.</li>
                <li><input type="radio" name="validation" value="2"></li>
            </ul>
            <h2>Votre avis/suggestion</h2> <textarea name="text" rows="5" cols="100"></textarea>
            <button type="submit">Envoyer</button>
        </form>
        <?php
        // l'instruction ci dessous vérifie que $_POST est défini (que le formulaire a été envoyé, et que $tous les paramètres sont remplis (correctement))
        if ($_POST == true) {
            if ($_POST["validation"] == 1 || $_POST["email"] == "" || $_POST["text"] == "") {
                echo("Un des paramêtres n'est pas correctement rempli");
            } else {
                echo("Votre avis a bien été envoyé "." ".$_POST["email"]);
                file_put_contents("./ratings/".$_POST["email"].".txt", $_POST["text"]);
                // echo sert de confirmation
                // file_put_contents enregistre les données du formulaire dans le dossier ratings dans un fichier du nom du mail de la personne
            }
        }
        ?>
    </main>
    <footer>
        <!-- Menu du footer, accès au code via la page github, accès au formulaire de contact et à la page wiki -->
        <ul>
            <li><a href="https://fr.wikipedia.org/wiki/Course_%C3%A0_l%27espace" alt="lien vers la page wikipedia de la course à l'espace" class="footext">Wikipédia</a></li>
            <li><a href="form.php" alt="lien vers une page d'avis" class="footext">Contact</a></li>
            <li><a href="https://github.com/AptxUnicorn/Objectif-lune"><img src="../src/images/github-mark.svg" alt="logo github" id="github"></a></li>
        </ul>
    </footer>
</body>
</html>