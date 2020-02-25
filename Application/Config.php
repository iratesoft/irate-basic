<?php

namespace Application;

/**
 * Application configuration
 */
class Config
{
    const BASE_URL    = '';

    /**
     * Database vars
     * We only support MySQL at this time.
     */
    const DB_HOST     = '';
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

    /**
     * Unique Key for encoding/decoding strings in Security class.
     * @var string
     */
    const ENCODING_KEY = '7e95d3583eb4e0e9a76d09149d019d03';

    /**
     * SMTP HOST
     * @var string
     */
    const SMTP_HOST = '';

    /**
     * SMTP USERNAME
     * @var string
     */
    const SMTP_USERNAME = '';

    /**
     * SMTP PASSWORD
     * @var string
     */
    const SMTP_PASSWORD = '';

    /**
     * SMTP PORT
     * @var integer
     */
    const SMTP_PORT = 587;

    /**
     * Parameters that you may use throughout your application
     * Use System::$params->siteTitle to access.
     * @var array
     */
    const PARAMS = [
      'siteTitle' => 'Irate Framework'
    ];
}
