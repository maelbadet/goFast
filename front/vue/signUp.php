<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    
    <div class="container">
        <form action="../../back/account/actionSignUp.php" method="post">
        <h2>Inscription à Gofast</h2>
        <label for="email"><b>Email :</b></label>
        <input type="email" placeholder="email" name="email" required>
        <label for="psw"><b>Mot de Passe :</b></label>
        <input type="password" placeholder="mot de passe" name="psw" required>
        <label for="confirmPsw"><b>Confirmez le mot de Passe :</b></label>
        <input type="password" placeholder="mot de passe" name="confirmPsw" required>
        <a href="./login.php">Déjà un compte ?</a>
        <button type="submit">Inscription</button>
        </form>
    </div>
</body>
</html>