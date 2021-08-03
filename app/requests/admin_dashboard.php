<?php

    // Neuester Benutzer
    $newestUser = $conn->prepare("SELECT vorname, nachname, plz, ort FROM users ORDER BY id DESC LIMIT 1");
    $newestUser->execute();
    $newestUser = $newestUser->get_result()->fetch_assoc();

    // Durchschnittsalter
    $avgAge = $conn->prepare("SELECT AVG(lebensalter) AS 'durchschnitt' FROM users");
    $avgAge->execute();
    $avgAge = $avgAge->get_result()->fetch_assoc();

    // Anzahl aller Benutzer
    $numUsers = $conn->prepare("SELECT COUNT(*) AS 'anzahl' FROM users");
    $numUsers->execute();
    $numUsers = $numUsers->get_result()->fetch_assoc();

?>