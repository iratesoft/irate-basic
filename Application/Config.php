<?php

namespace Application;

/**
 * Application configuration
 */
class Config
{
    const BASE_URL    = '/';

    /**
     * Database vars
     * We only support MySQL at this time.
     */
    const DB_HOST     = false;
    const DB_NAME     = '';
    const DB_USER     = '';
    const DB_PASSWORD = '';
    const DB_CHARSET  = 'utf8mb4';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;

    /**
     * The default controller for routing.
     * @var string
     */
    const ROUTE_DEFAULT_CONTROLLER = 'Site';

    /**
     * The default action for routing.
     * @var string
     */
    const ROUTE_DEFAULT_ACTION = 'index';

    /**
     * Route Configuration for your applicaton.
     * @var array
     */
    const ROUTES = [

    ];

    const ENCODING_KEY = '00c8d295cc0421563f3160e79f119e34';

    /**
     * Parameters that you may use throughout your application
     * Use System::$params->siteTitle to access.
     * @var array
     */
    const PARAMS = [
      'siteTitle' => 'Irate Framework'
    ];
}
