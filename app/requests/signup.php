<?php

    if (isset($_POST['submit'])) {

        // Überprüfe alle Eingabefelder
        if (checkEmptyVars([
            $_POST['vorname'],
            $_POST['nachname'],
            $_POST['email'],
            $_POST['passwort'],
            $_POST['strasse'],
            $_POST['hausnummer'],
            $_POST['ort'],
            $_POST['plz'],
            $_POST['alter']
        ]))
            return $error = 'Alle Felder müssen ausgefüllt sein!';

        // Überprüfe ob die E-Mail dem gültigen Format entspricht
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            return $error = 'Keine Gültige E-Mail Adresse!';

        // Überprüfe ob das Passwort mindestens 6 Zeichen lang ist
        if (strlen($_POST['passwort']) < 6)
            return $error = 'Passwort muss mindestens 6 Zeichen lang sein!';

        // Überprüfe ob die Postleitzahl dem Datentyp 'int' entspricht
        // und ob die Postleitzahl 5 Zeichen lang ist
        if (!is_int($_POST['plz']) && strlen($_POST['plz']) != 5)
            return $error = 'Ungültige Postleitzahl!';

        // Überprüft ob das Alter dem Datentyp 'int' entspricht
        // und ob das Alter nicht negativ ist bzw. größer/gleich 0
        if (!is_int($_POST['alter']) && $_POST['alter'] <= 0)
            return $error = 'Ungültiges Alter!';

        // Überprüfe ob die angegebene E-Mail Adresse bereits im System hinterlegt ist.
        if (checkDoubleEmail($_POST['email'], $conn))
            return $error = 'E-Mail Adresse wird bereits verwendet!';

        // Trage die angegebene Daten im Forumlar in die Datenbank ein
        $query = $conn->prepare("INSERT INTO users (vorname, nachname, email, passwort, strasse, hausnummer, ort, plz, lebensalter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssssii", $_POST['vorname'], $_POST['nachname'], $_POST['email'], md5($_POST['passwort']), $_POST['strasse'], $_POST['hausnummer'], $_POST['ort'], $_POST['plz'], $_POST['alter']);
        $query->execute();

        // Leite den Benutzer zur Anmeldung weiter
        Redirect('?page=signin');

    }

?>