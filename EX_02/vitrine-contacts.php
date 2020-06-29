<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="style/vitrine.css" type="text/css">
    <meta charset= "utf-8">
<body>
<header>
    <?php
    $navigation='contact';
    include ("header.php"); 
?>
</header>
        

    <main>
        <h2>Contact</h2>
        <form method= "post" action="traitement.php">
           <p> 
              <label for="Nom Prénom"> Nom/Prénom:</label> 
              <input type="text" name= "Nom Prénom" id="Nom Prénom" placeholder="Katy Perry" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p> 
                <label for="Email"> Email:</label> 
               <input type="text" name= "Email" id="Email" placeholder="jijo.got@gmail.com" style="width: 250px;" style="height: 30px;"/>
            </p>
           <p>
            <label for="Message"> Votre message:</label>   
            <input type="text" name= "Message" id="Message" placeholder="Je vous remercie..." style="width: 250px;"/>
        </p>
            <input type="submit" value="Envoyer">
        </form>
    </main>
    <?php include ("footer.php"); ?>
</body>
</html>