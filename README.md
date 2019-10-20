# Les formulaires en PHP

## [Part 1 Récupération](https://github.com/Aurelie-feyzin/WCS_PHP_formulaire/releases/tag/part1)
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

## Part 2 Sécurisation
Challenge
Sécuriser la prise de contact

À partir de ce que tu as réalisé lors de la précédente quête, tu vas pouvoir aller plus loin dans l’amélioration de ce formulaire. Comme tu dois t’en douter, tu vas devoir rajouter une partie validation des informations fournies par l’utilisateur.

Ainsi, tous les champs doivent être obligatoirement remplis avant de pouvoir soumettre le formulaire. Une fois le formulaire soumis :

    Si toutes les données attendues sont saisies correctement, l’utilisateur voit apparaître le message précédemment intégrer lors de la quête précédente.

    En cas d'erreur, l'utilisateur est notifié par un message lui indiquant qu’il manque des informations ou que le format des données n’est pas bon.

    Vérifier un à un tous les champs afin de s'assurer qu'ils sont correctement remplis, avec la bonne syntaxe, peut s’avérer long et fastidieux. Pour cette quête, on ne te demandera pas de tout vérifier à l'aide de PHP.

Critères de validation

    Le formulaire de contact comporte toujours les champs :
    nom,
    prénom,
    e-mail,
    téléphone,
    sujet (sous forme de liste déroulante)
    message (textarea).
    Côté PHP :
        Tous les champs sont requis et ne doivent pas être vides;
        Le format du champ e-mail est vérifié, à l'aide de filter_var.
    Côté client / front :
        Tous les champs sont requis;
        la validité du champ e-mail est vérifiée et correspond au format attendu.

    Occupes toi dans un premier temps de la partie serveur, ensuite tu pourras passer à la partie client. Car si tu le fais dans l’ordre inverse, le navigateur t’empechera

        S'il y a des erreurs, un message s’affiche sur la page du formulaire.
        En cas de succès, le message affiché lors de la quête précédente apparaît toujours.
        Le code est disponible sur un dépot Gist ou Githu
