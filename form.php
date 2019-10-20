<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="contact.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>


<form action="thanks.php" method="post">
    <h1>Nous contacter</h1>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname"/>
    </div>
    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="user_firstname"/>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="phonenumber">Téléphone :</label>
        <input type="tel" id="phonenumber" name="user_phone">
    </div>
    <div>
        <label for="subject">Objet de la demande:</label>
        <SELECT name="subject" id="subject" size="1">
            <OPTION value="">Objet de ma demande</OPTION>
            <OPTION>une facture</OPTION>
            <OPTION>mon contrat</OPTION>
            <OPTION>mon espace client</OPTION>
            <OPTION>aide</OPTION>
            <OPTION>autre</OPTION>
        </SELECT>
    </div>
    <div>
        <label for="msg">Votre demande :</label>
        <textarea id="msg" name="message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>
