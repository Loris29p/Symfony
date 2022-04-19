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
        '/etat' => [[['_route' => 'app_etat_index', '_controller' => 'App\\Controller\\EtatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etat/new' => [[['_route' => 'app_etat_new', '_controller' => 'App\\Controller\\EtatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fiche/frais' => [[['_route' => 'app_fiche_frais_index', '_controller' => 'App\\Controller\\FicheFraisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/fiche/frais/new' => [[['_route' => 'app_fiche_frais_new', '_controller' => 'App\\Controller\\FicheFraisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/frais/forfait' => [[['_route' => 'app_frais_forfait_index', '_controller' => 'App\\Controller\\FraisForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/frais/forfait/new' => [[['_route' => 'app_frais_forfait_new', '_controller' => 'App\\Controller\\FraisForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/frais/forfait' => [[['_route' => 'app_ligne_frais_forfait_index', '_controller' => 'App\\Controller\\LigneFraisForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/frais/forfait/new' => [[['_route' => 'app_ligne_frais_forfait_new', '_controller' => 'App\\Controller\\LigneFraisForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/ligne/frais/hors/forfait' => [[['_route' => 'app_ligne_frais_hors_forfait_index', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/ligne/frais/hors/forfait/new' => [[['_route' => 'app_ligne_frais_hors_forfait_new', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/etat/([^/]++)(?'
                    .'|(*:186)'
                    .'|/edit(*:199)'
                    .'|(*:207)'
                .')'
                .'|/f(?'
                    .'|iche/frais/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                    .'|rais/forfait/([^/]++)(?'
                        .'|(*:297)'
                        .'|/edit(*:310)'
                        .'|(*:318)'
                    .')'
                .')'
                .'|/ligne/frais/(?'
                    .'|forfait/([^/]++)(?'
                        .'|(*:363)'
                        .'|/edit(*:376)'
                        .'|(*:384)'
                    .')'
                    .'|hors/forfait/([^/]++)(?'
                        .'|(*:417)'
                        .'|/edit(*:430)'
                        .'|(*:438)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:465)'
                    .'|/edit(*:478)'
                    .'|(*:486)'
                .')'
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
        186 => [[['_route' => 'app_etat_show', '_controller' => 'App\\Controller\\EtatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        199 => [[['_route' => 'app_etat_edit', '_controller' => 'App\\Controller\\EtatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        207 => [[['_route' => 'app_etat_delete', '_controller' => 'App\\Controller\\EtatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_fiche_frais_show', '_controller' => 'App\\Controller\\FicheFraisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_fiche_frais_edit', '_controller' => 'App\\Controller\\FicheFraisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_fiche_frais_delete', '_controller' => 'App\\Controller\\FicheFraisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        297 => [[['_route' => 'app_frais_forfait_show', '_controller' => 'App\\Controller\\FraisForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_frais_forfait_edit', '_controller' => 'App\\Controller\\FraisForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        318 => [[['_route' => 'app_frais_forfait_delete', '_controller' => 'App\\Controller\\FraisForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        363 => [[['_route' => 'app_ligne_frais_forfait_show', '_controller' => 'App\\Controller\\LigneFraisForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        376 => [[['_route' => 'app_ligne_frais_forfait_edit', '_controller' => 'App\\Controller\\LigneFraisForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        384 => [[['_route' => 'app_ligne_frais_forfait_delete', '_controller' => 'App\\Controller\\LigneFraisForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_ligne_frais_hors_forfait_show', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_ligne_frais_hors_forfait_edit', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        438 => [[['_route' => 'app_ligne_frais_hors_forfait_delete', '_controller' => 'App\\Controller\\LigneFraisHorsForfaitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
