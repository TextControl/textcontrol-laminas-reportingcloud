<?php
declare(strict_types=1);

/**
 * ReportingCloud Laminas Module
 *
 * Laminas Module for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://tinyurl.com/4mefj7xz for the canonical source repository
 * @license   https://tinyurl.com/4xh3utpp
 * @copyright © 2023 Text Control GmbH
 */

namespace TextControl\Laminas\ReportingCloud;

class Module
{
    /**
     * Return the Laminas module configuration array
     */
    public function getConfig(): array
    {
        $filename = dirname(__FILE__, 2) . '/config/module.config.php';

        $config = include $filename;
        assert(is_array($config));

        return $config;
    }
}
