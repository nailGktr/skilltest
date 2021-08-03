<?php

    // Infos
    // Weitere Seiten erst in '$AvailablePages' eintragen.
    // Details zur jeweiligen Seiten in '$PageInfos' eintragen
    // auth => [0 (Jeder) | 1 (Nur nicht angemeldete) | 2 (Nur angemeldete)]
    // permission = [0 (Jeder) | 1+ (Administrator etc.)]

    // Standardseite zur weiterleitung
    $defaultPage = '?page=index';

    // Standardseite zur Anmeldung
    $loginPage   = '?page=signin';

    // Verfügbare Seiten
    $AvailablePages = [
        'index',
        'signin',
        'signup',
        'admin_dashboard'
    ];

    // Benötigte Rechte für die jeweiligen Seiten
    $PageInfos = [
        'index' => [
            'auth' => 2,
            'admin' => 0
        ],
        'signin' => [
            'auth' => 1,
            'admin' => 0
        ],
        'signup' => [
            'auth' => 1,
            'admin' => 0
        ],
        'admin_dashboard' => [
            'auth' => 2,
            'admin' => 1
        ]
    ];

?>