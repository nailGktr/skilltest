<?php require_once __DIR__ . "/../requests/signup.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Registrieren</title>
</head>
<body>
    <div class="container flex vertical-center">
        <form method="post">
            <h1>Registrieren</h1>
            <div class="box">
                <?= ($error) ? '<center>' . $error . '</center><hr>' : '' ?>
                <div class="row">
                    <div>
                        <strong>Vorname</strong> <br>
                        <input type="text" name="vorname" value="<?= htmlspecialchars($_POST['vorname']) ?>">
                    </div>
                    <div>
                        <strong>Nachname</strong> <br>
                        <input type="text" name="nachname" value="<?= htmlspecialchars($_POST['nachname']) ?>">
                    </div>
                </div>
                <hr>
                <strong>E-Mail Adresse</strong>
                <input type="email" name="email" value="<?= htmlspecialchars($_POST['email']) ?>">
                <hr>
                <strong>Passwort</strong>
                <input type="password" name="passwort" value="<?= htmlspecialchars($_POST['passwort']) ?>">
                <hr>
                <div class="row">
                    <div>
                        <strong>Strasse</strong> <br>
                        <input type="text" name="strasse" value="<?= htmlspecialchars($_POST['strasse']) ?>">
                    </div>
                    <div>
                        <strong>Hausnummer</strong> <br>
                        <input type="text" name="hausnummer" value="<?= htmlspecialchars($_POST['hausnummer']) ?>">
                    </div>
                </div>
                <div class="row">
                    <div>
                        <strong>Ort</strong> <br>
                        <input type="text" name="ort" value="<?= htmlspecialchars($_POST['ort']) ?>">
                    </div>
                    <div>
                        <strong>Postleitzahl</strong> <br>
                        <input type="number" name="plz" value="<?= htmlspecialchars($_POST['plz']) ?>">
                    </div>
                </div>
                <hr>
                <strong>Alter</strong>
                <input type="number" name="alter" id="alter" value="<?= htmlspecialchars($_POST['alter']) ?>">
                <input type="submit" name="submit" value="Registrieren">
                <hr>
                Konto vorhanden? <a href="?page=signin">Anmelden</a>
            </div>
        </form>
    </div>
</body>
</html>