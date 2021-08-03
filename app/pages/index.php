<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container flex horizontal-center vertical-center">
        <div>
            <h1>Dashboard</h1>
        </div>
        <div class="box">
            Hallo <strong><?= $User['vorname']; ?></strong>, hier findest du deine Daten!
            <hr>
            <div class="row">
                <div>
                    <strong>Anschrift</strong><br>
                    <?= $User['plz'] ?>, <?= $User['ort'] ?> <br>
                    <?= $User['strasse'] ?> <?= $User['hausnummer'] ?>
                </div>
                <div>
                    <strong>E-Mail Adresse</strong> <br>
                    <?= $User['email'] ?>
                </div>
                <div>
                    <strong>Alter</strong><br>
                    <?= $User['lebensalter'] ?>
                </div>
            </div>
            <?php

                if ($User['isAdmin'])
                    echo '<hr><a href="?page=admin_dashboard">Zum Admin Dashboard</a>';

            ?>
        </div>
    </div>
</body>
</html>