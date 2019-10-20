# Les formulaires en PHP - Récupération
Challenge

Simuler une prise de contact

À partir de ce que tu viens de réaliser, il faut améliorer ce formulaire. Tu dois rajouter un champ pour entrer le numéro de téléphone de l'utilisateur, ainsi qu'une liste déroulante proposant plusieurs thématiques, qui sera reprise comme sujet du mail.

Une fois que l’utilisateur clique sur le bouton de soumission, les données du formulaires sont envoyées sur une nouvelle page “thanks.php” et les informations saisies sont reprises de la sorte sur la page :

Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”.

Un de nos conseiller vous contactera soit à l’adresse {e-mail} ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande : 

{message}

    Tu l'auras remarqué, à aucun moment on ne te demande d'envoyer le mail. C'est normal, il s'agit là d'une autre problématique. Tu verras ça plus tard. Concentre-toi sur la gestion des formulaires pour le moment.

Critères de validation

    Le formulaire de contact comporte les champs :
    nom,
    prénom,
    e-mail,
    téléphone,
    sujet (sous forme de liste déroulante),
    message (textarea).
    Le formulaire renvoie vers une nouvelle page PHP qui affiche le message demandé plus haut contenant les informations issues du formulaire.
    Le code est disponible sur un dépot Gist ou Github.

