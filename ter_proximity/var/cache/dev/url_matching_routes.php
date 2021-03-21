<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\PinsController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscription' => [[['_route' => 'app_pins_inscrit', '_controller' => 'App\\Controller\\PinsController::inscrit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pins/addfournisseur' => [[['_route' => 'app_add_fournisseur', '_controller' => 'App\\Controller\\PinsController::addfournisseur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/prise/rdv' => [[['_route' => 'app_rdv', '_controller' => 'App\\Controller\\PriseRdvController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/p(?'
                    .'|ins/add(?'
                        .'|Type/([^/]++)(*:197)'
                        .'|Service/([^/]++)/([^/]++)(*:230)'
                        .'|Calendrier/([^/]++)/([^/]++)/([^/]++)(*:275)'
                    .')'
                    .'|rise/rdv/(?'
                        .'|([^/]++)(*:304)'
                        .'|(\\d+)/edit(*:322)'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:368)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        197 => [[['_route' => 'app_add_type', '_controller' => 'App\\Controller\\PinsController::addtype'], ['idFournisseur'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        230 => [[['_route' => 'app_add_service', '_controller' => 'App\\Controller\\PinsController::addservice'], ['idFournisseur', 'idType'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        275 => [[['_route' => 'app_add_calendrier', '_controller' => 'App\\Controller\\PinsController::addCalendrier'], ['idFournisseur', 'idType', 'idService'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        304 => [[['_route' => 'app_rdv_delete', '_controller' => 'App\\Controller\\PriseRdvController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        322 => [[['_route' => 'app_rdv_edit', '_controller' => 'App\\Controller\\PriseRdvController::edit'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, false, null]],
        368 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
