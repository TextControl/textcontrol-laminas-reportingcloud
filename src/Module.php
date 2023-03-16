<?php
declare(strict_types=1);

/**
 * ReportingCloud Laminas Module
 *
 * Laminas Module for ReportingCloud Web API. Authored and supported by Text Control GmbH.
 *
 * @link      https://www.reporting.cloud to learn more about ReportingCloud
 * @link      https://git.io/JexF4 for the canonical source repository
 * @license   https://git.io/JexFB
 * @copyright © 2022 Text Control GmbH
 */

namespace TextControl\Laminas\ReportingCloud;

/**
 * Class Module
 *
 * @package TextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class Module
{
    /**
     * Return the Laminas module configuration array
     *
     * @return array
     */
    public function getConfig(): array
    {
        $filename = dirname(__FILE__, 2) . '/config/module.config.php';

        $config = include $filename;
        assert(is_array($config));

        return $config;
    }
}
