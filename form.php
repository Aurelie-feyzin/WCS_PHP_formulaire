<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="contact.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>


<form action="verif.php" method="post">
    <h1>Nous contacter</h1>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="user_lastname"
               value="<?php echo isset($_SESSION['inputs']['user_lastname']) && empty($_SESSION['user_lastname_err']) ? $_SESSION['inputs']['user_lastname'] : ""; ?>"
               required/>
        <p class="error"><?php echo !empty($_SESSION['user_lastname_err']) ? $_SESSION['user_lastname_err'] : ""; ?></p>
    </div>
    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="user_firstname"
               value="<?php echo isset($_SESSION['inputs']['user_firstname_']) && empty($_SESSION['user_firstname_err']) ? $_SESSION['inputs']['user_firstname_'] : ""; ?>"
               required/>
        <p class="error"><?php echo !empty($_SESSION['user_firstname_err']) ? $_SESSION['user_firstname_err'] : ""; ?></p>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail"
               value="<?php echo isset($_SESSION['inputs']['user_mail']) && empty($_SESSION['user_mail_err']) ? $_SESSION['inputs']['user_mail'] : ""; ?>"
               required/>
        <p class="error"><?php echo !empty($_SESSION['user_mail_err']) ? $_SESSION['user_mail_err'] : ""; ?></p>
    </div>
    <div>
        <label for="phonenumber">Téléphone :</label>
        <input type="tel" id="phonenumber" name="user_phone"
               value="<?php echo isset($_SESSION['inputs']['user_phone']) && empty($_SESSION['user_phone_err']) ? $_SESSION['inputs']['user_phone'] : ""; ?>"
               required/>
        <p class="error"><?php echo !empty($_SESSION['user_phone_err']) ? $_SESSION['user_phone_err'] : ""; ?></p>
    </div>
    <div>
        <label for="subject">Objet de la demande:</label>
        <SELECT name="subject" id="subject" size="1" required>
            <OPTION value="">Objet de ma demande</OPTION>
            <OPTION <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'une facture') ? "selected" : ""; ?>>
                une facture
            </OPTION>
            <OPTION <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'mon contrat') ? "selected" : ""; ?>>
                mon contrat
            </OPTION>
            <OPTION <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'mon espace client') ? "selected" : ""; ?>>
                mon espace client
            </OPTION>
            <OPTION <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'aide') ? "selected" : ""; ?>>
                aide
            </OPTION>
            <OPTION <?php echo ($_SESSION['inputs']['subject'] && ($_SESSION['inputs']['subject']) === 'autre') ? "selected" : ""; ?>>
                autre
            </OPTION>
        </SELECT>
        <p class="error"><?php echo !empty($_SESSION['subject_err']) ? $_SESSION['subject_err'] : ""; ?></p>
    </div>
    <div>
        <label for="msg">Votre demande :</label>
        <textarea id="msg"
                  name="message"
                  minlength="5"
                  maxlength="256"
                  required><?php echo isset($_SESSION['inputs']['message']) && empty($_SESSION['message_err']) ? $_SESSION['inputs']['message'] : ""; ?></textarea>
        <p class="error"><?php echo !empty($_SESSION['message_err']) ? $_SESSION['message_err'] : ""; ?></p>
    </div>
    <div class="button">
        <button type="submit">Envoyer</button>
    </div>
</form>
</body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['user_lastname_err']);
unset($_SESSION['user_firstname_err']);
unset($_SESSION['user_mail_err']);
unset($_SESSION['user_phone_err']);
unset($_SESSION['subject_err']);
unset($_SESSION['message_err']);
?>
