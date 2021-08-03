<?php

    error_reporting(0);

    // Session starten
    session_start();

    // Datenbank
    require_once __DIR__ . "/app/includes/dbh.inc.php";

    // Funktionen
    require_once __DIR__ . "/app/includes/functions.inc.php";

    // Benutzer-Daten
    require_once __DIR__ . "/app/includes/auth.inc.php";

    // PageController
    require_once __DIR__ . "/app/includes/pgh.inc.php";

    // Datenbank schließen
    $conn = null;

    // Session schließen
    session_write_close();

?>