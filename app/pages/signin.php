<?php require_once __DIR__ . "/../requests/signin.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Anmelden</title>
</head>
<body>
    <div class="container flex horizontal-center vertical-center">
        <form method="post">
            <h1>Anmelden</h1>
            <div class="box">
                <?= ($error) ? '<center>' . $error . '</center><hr>' : '' ?>
                <strong>E-Mail Adresse</strong>
                <input type="email" name="email">
                <strong>Passwort</strong>
                <input type="password" name="passwort">
                <input type="submit" name="submit" value="Anmelden">
                <hr>
                Kein Konto? <a href="?page=signup">Registrieren</a>
            </div>
        </form>
    </div>
</body>
</html>