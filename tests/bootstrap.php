<?php

/**
 * PHP mServer client Test setup
 *
 * @author     Vítězslav Dvořák <vitex@arachne.cz>
 * @copyright  2015-2020 Spoje.Net
 */

require_once file_exists('../vendor/autoload.php') ? '../vendor/autoload.php' : 'vendor/autoload.php';

\Ease\Shared::instanced()->loadConfig(__DIR__ . '/.env',true);
