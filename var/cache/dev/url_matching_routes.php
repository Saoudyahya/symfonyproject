<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/member' => [[['_route' => 'app_sport_member', '_controller' => 'App\\Controller\\SportMemberController::getMember'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sport/reclamation' => [[['_route' => 'app_sport_reclamation', '_controller' => 'App\\Controller\\SportReclamationController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
