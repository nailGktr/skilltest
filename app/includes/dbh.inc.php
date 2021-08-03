<?php

    // Verbindungsinformationen der Datenbank
    $data = [
        'host' => 'localhost',
        'user' => 'root',
        'database' => 'skilltest',
        'password' => ''
    ];

    // Verbindung initialisieren
    $conn = mysqli_connect($data['host'], $data['user'], $data['password'], $data['database']);

    // Verbindung testen
    if (!$conn)
        die('Datenbank Verbindung abgebrochen');

?>