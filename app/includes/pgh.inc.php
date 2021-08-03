<?php

    // Alle verfügbaren Seiten
    require_once __DIR__ . "/pages.inc.php";

    // Falls der Benutzer eine Seite aufruft, die nicht im Array '$AvailablePages'
    // vorhanden ist, wird der Benutzer zu '$defaultPage' weitergeleitet
    if (!isset($_GET['page']) || !in_array($_GET['page'], $AvailablePages))
        Redirect($defaultPage);

    // Falls der Benutzer eine Seite aufruft, dessen voraussetzung 'auth' == 1
    // ist, aber der Benutzer nicht Angemeldet ist, wird der Benutzer zu
    // '$loginPage' weitergeleitet
    if ($PageInfos[$_GET['page']]['auth'] != 0) {

        if ($PageInfos[$_GET['page']]['auth'] == 1 && $User)
            Redirect($defaultPage);
          
        if ($PageInfos[$_GET['page']]['auth'] == 2 && !$User)
            Redirect($loginPage);

    }

    // Falls der Benutzer eine Seite aufruft, dessen voraussetzung 'admin' == 1
    // ist, aber der Benutzer nicht die Berechtigung hat, wird der Benutzer zu
    // '$defaultPage' weitergeleitet
    if ($User)
        if ($PageInfos[$_GET['page']]['admin'] != 0 && $PageInfos[$_GET['page']]['admin'] != $User['isAdmin'])
            Redirect($defaultPage);

    // Inhalt Rückgabe
    if (file_exists(__DIR__ . "/../pages/" . $_GET['page']. ".php"))
        require_once __DIR__ . "/../pages/" . $_GET['page'] . ".php";
    else
        Redirect($defaultPage);

?>