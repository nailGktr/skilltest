<?php

    if (isset($_POST['submit'])) {

        // Überprüfe alle Eingabefelder
        if (checkEmptyVars([
            $_POST['email'],
            $_POST['passwort'],
        ]))
            return $error = 'Alle Felder müssen ausgefüllt sein!';

        // Überprüfe ob die E-Mail dem gültigen Format entspricht
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            return $error = 'Keine Gültige E-Mail Adresse!';

        // Rufe die User-Daten aus dem System ab die den Formular
        // Angaben entsprechen
        $query = $conn->prepare("SELECT id FROM users WHERE email = ? AND passwort = ?");
        $query->bind_param("ss", $_POST['email'], md5($_POST['passwort']));
        $query->execute();

        // Überprüfe ob ein Eintrag existiert
        if (!$result = $query->get_result()->fetch_assoc())
            return $error = 'E-Mail Adresse oder Passwort falsch!';

        // Setze die abgerufene 'id' als sessionid ein
        $_SESSION['userid'] = $result['id'];

        Redirect('?page=index');

    }

?>