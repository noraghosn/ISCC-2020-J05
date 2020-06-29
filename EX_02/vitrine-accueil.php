<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style/vitrine.css" type="text/css">
    <meta charset= "utf-8">
<body>
<header>
    <?php
    $navigation='accueil';
    include ("header.php"); 
?>
</header>

<b style= 'color: <?php echo $color;?>;'></b>

        <main>
            <h2> Accueil </h2>
            <p> Le numérique, nouvelle ère de l’humanité, source d’innovation et de performance ? 
                Pour mieux comprendre cette révolution, venez apprendre les rudiments du code et découvrir les bases de la programmation des sites internet. 
                Destiné aux étudiants, ce code camp vous initiera en un mois aux principaux langages de programmation
             Web (HTML-CSS et PHP), vous dévoilera le fonctionnement d’outils comme Google ou Paypal et vous éclaira sur la sécurité des sites internet.
            </p> <br>

        <div class="images">
            <img src="style/épitech.jpg" width="400" height="250">
            <img src="style/épitech2.jpg" width="400" height="250">
        </div>
        </main> 

    <?php include ("footer.php"); ?>

</body>
</html>