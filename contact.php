<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dien een klacht in</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav>
        <a href="index.php"><img src="image/huis.jpg" class="huisfoto" width="40px" height="40px"></a>
        <button class="buttonnav"><a href="index.php" class="navigatie">Home</a></button>
        <button class="buttonnav"><a href="menu.php" class="navigatie">Menu</a></button>
        <button class="buttonnav"><a href="voordeelpas.php" class="navigatie">Voordeelpas</a></button>
        <button class="buttonnav"><a href="contact.php" class="navigatie">Contact</a></button>
    </nav>
    
    <!-- <?php
       if (isset($_POST['submit'])){
            $fname = $_POST['fname'];
            $from = 'From: My Contact Form';
            $to = 'nielstoemen@gmail.com';
            $subject = 'contactmail';
    
            $body = "From: $fname\n";
    
            if ($_POST['submit']) {
                if (mail ($to, $subject, $body, $from)) {
                echo '<p>Message Sent Successfully!</p>';
                } else {
                echo '<p>Ah! Try again, please?</p>';
                }
            }
       }
       ?> -->
    <div class="contactform">
        <div class="contact">
        <form action="includes/Klachtinvoegen.php" method="post" class="forum">
            <label class="form">Email:</label> <br>
            <input class="form" name="Email" placeholder="Email"> <br>
            <label class="form">Telefoonnumer:</label> <br>
            <input class="form" name="Telefoonnummer" placeholder="Telefoonnummer"> <br>
            <label class="form">Campeerplaats:</label> <br>
            <input class="form" name="Campeerplaats" placeholder="Campeerplaats"> <br>
            <label class="form">Klacht:</label> <br>
            <input class="form" name="Klacht" placeholder="Klacht"> <br>
        <input id="submit" name="submit" type="submit" value="submit" class="submitbutton">
        </form>
        </div>
        <div class="infoform">
            <h4>Contact</h4>
            <p>Voer hier uw gegevens in en wij zullen zo snel mogenlijk reageren op uw vraag.</p>
        </div>
    </div>
    
    <footer>
        <div class="opening">
            <h3 class="footertekst">Openingstijden</h3>
            <p class="footertekst">Dinsdag t/m zondag 11:30 – 21:00u</p>
            <p class="footertekst">Op maandag zijn wij helaas gesloten</p>
        </div>
        <div class="adres">
            <h3 class="footertekst">Contact</h3>
            <h4 class="footertekst">Adres:</h4>
            <p class="footertekst">Eetpaleis ’t Vosje</p>
            <p class="footertekst">Mercuriusplein 86</p>
            <p class="footertekst">5258AW Berlicum</p>
        </div>
        <div class="adrestweede">
            <h4 class="footertekst">Telefoonnummer:</h4>
            <p class="footertekst">073 503 41 14</p>
            <h4 class="footertekst">Email:</h4>
            <p class="footertekst">info@eetpaleis-tvosje.nl</p>
        </div>
        <div class="socials">
            <a href="https://www.facebook.com/Eetpaleis-t-Vosje-580914481957929/" target="blank">
            <img src="image/fblogo.png" width="7%">
            <a href="https://www.instagram.com/eetpaleis_t_vosje_berlicum/" target="blank">
            <img src="image/ilogo.png" width="7%">
            <a href="https://www.tripadvisor.nl/Restaurant_Review-g3621317-d8430616-Reviews-Eetpaleis_t_Vosje-Berlicum_North_Brabant_Province.html" target="blank">
            <img src="image/tripadvisor.png" width="7%">
        </div>
    </footer>
</body>
</html>
