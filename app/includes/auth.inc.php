<?php

    // Überprüfe ob die session 'userid' bereits gesetzt wurde
    if ($_SESSION['userid']) {

        // Rufe die User-Daten aus dem System ab die den Angaben entsprechen
        $query = $conn->prepare("SELECT * FROM users WHERE id = ?");
        $query->bind_param("i", $_SESSION['userid']);
        $query->execute();

        // Speichere die User-Daten in der Variable '$User'
        $User = $query->get_result()->fetch_assoc();

        // Überprüfe ob die Variable '$User' true ist also
        // ob der Eintrag in der Datenbank noch existiert
        if (!$User)
            unset($_SESSION['userid']);

    }

?>