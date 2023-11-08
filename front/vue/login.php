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
        <form action="../../back/account/actionlogin.php" method="post">
        <label for="email"><b>Email :</b></label>
        <input type="text" placeholder="email" name="email" required>
        <label for="psw"><b>Mot de Passe :</b></label>
        <input type="password" placeholder="mot de passe" name="psw" required>
        <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>