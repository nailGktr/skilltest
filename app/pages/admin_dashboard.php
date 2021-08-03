<?php require_once __DIR__ . "/../requests/admin_dashboard.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container flex horizontal-center vertical-center">
        <div>
            <h1>Admin Dashboard</h1>
        </div>
        <div class="box">
            Hallo <strong><?= $User['vorname']; ?></strong>, hier findest du allgemeine Daten!
            <hr>
            <div class="row">
                <div>
                    <strong>Neuester Benutzer</strong><br>
                    <?= $newestUser['vorname'] ?>, <?= $newestUser['nachname'] ?> <br>
                    <?= $newestUser['plz'] ?> <?= $newestUser['ort'] ?>
                </div>
                <div>
                    <strong>Durchschnittsalter aller Benutzer</strong> <br>
                    <?= ceil($avgAge['durchschnitt']) ?>
                </div>
                <div>
                    <strong>Anzahl aller Benutzer</strong><br>
                    <?= $numUsers['anzahl'] ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>