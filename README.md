# goFast

# Contexte
    Connaissez-vous les raccourcisseurs de liens, du type https://bitly.com ou https://tiny
    url.com/app ? Ce sont des outils importants pour créer des liens plus courts que ce
    qu'ils sont réellement. On les retrouve notamment dans les réseaux sociaux ou les
    campagnes de communication.
    Votre objectif dans ce projet est de réaliser un raccourcisseur de liens avec PHP.
# Fonctionnalités
    Ce projet est découpé en deux parties : les fonctionnalités principales et les
    fonctionnalités bonus.
# Fonctionnalités principales
    Les fonctionnalités principales demandées sont :
        - Pouvoir créer un compte
        - Pouvoir se connecter à son compte
        - Pouvoir se déconnecter de son compte
        - Pouvoir lister ses URLs raccourcies
        - Pouvoir raccourcir une URL
        - Pouvoir cliquer sur une URL raccourcie et être redirigé vers le lien initial
# Gestion de compte
    Dans votre site, vous devrez offrir la possibilité de créer un compte. Ce compte sera
    composé à minima d'une adresse mail et d'un mot de passe. N'oubliez pas de chiffrer
    le mot de passe en base de données grâce aux fonctions PHP password_hash et pass
    word_verify .
# Raccourcir une URL
    Vous devrez (une fois l'utilisateur connecté à son compte) lui proposer de lister toutes
    les URLs qu'il a précédemment raccourci.
    Il faudra également proposer un formulaire permettant de saisir une URL, pour que
    celle-ci soit raccourcie.
    Vous pouvez utiliser la fonction random_bytes pour générer des URLs aléatoires.
# Au clic sur une URL raccourcie
    Tout le monde peut suivre une URL raccourcie. Quand une personne se rend sur une
    URL raccourcie, ce lien doit pouvoir rediriger la personne sur la bonne destination.
    Tirez pour cela parti des fonctions http_response_code , header et de votre
    connaissance de HTTP.


# Fonctionnalités bonus
    Les fonctionnalités bonus sont :
        - Afficher le nombre de clics sur un lien raccourci
        - Désactiver et supprimer définitivement un lien raccourci
        - Pouvoir stocker des fichiers et les associer à des URLs raccourcies
# Nombre de clics
    Pour compter le nombre de clics, il vous faudra mettre à jour dans un stockage de
    données externes (fichier ou base de données) le nombre de personnes s'étant
    rendues sur le lien, et l'augmenter de 1 à chaque fois qu'une personne utilise le lien.
    Ce nombre de clics par URL doit être affiché sur le compte utilisateur.
# Désactiver et supprimer un lien
    Ajoutez deux actions sur une URL pour les utilisateurs ayant créé des URLs
    raccourcies : désactivation et suppression d'URL. Une colonne dans la base de
    données peut aider pour la désactivation d'un lien.
# Stocker des fichiers
    Au lieu de soumettre une URL pour la raccourcir, proposez un envoi de fichier qui sera
    stocké sur le serveur. Au lieu de rediriger les utilisateurs vers l'URL raccourcie, au clic
    sur ce lien, proposez de télécharger le fichier préalablement stocké.
# Modalités de réalisation
    Ce projet doit être réalisé en groupe de 3 à 4 personnes. La durée et les modalités de
    rendu seront spécifiées dans le mail accompagnant ce sujet.
    Bon courage à toutes et à tous !