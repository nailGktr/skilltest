<?php

    // Bequemes weiterleiten
    function Redirect ($path) {
        
        header("Location: " . $path);
        exit;

    }

    // Überprüfung von 'leeren' Variablen
    function checkEmptyVars ($Vars) {

        foreach ($Vars as $Var)
            if ($Var == '')
                return true;

        return false;

    }

    // Überprüfen ob eine angegebene E-Mail Adresse
    // bereits im System hinterlegt ist
    function checkDoubleEmail ($email, $database) {

        $query = $database->prepare("SELECT id FROM users WHERE email = ?");
        $query->bind_param("s", $email);
        $query->execute();
        $query->store_result();

        if ($query->num_rows != 0)
            return true;

        $query->free_result();
        $query->close();

        return false;

    }

?>