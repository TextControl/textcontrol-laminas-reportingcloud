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

return [
    'service_manager'    => [
        'factories' => [
            'ReportingCloud' => Service\ReportingCloudFactory::class,
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'reportingCloud' => Mvc\Controller\Plugin\ReportingCloudFactory::class,
        ],
    ],
    'view_helpers'       => [
        'factories' => [
            'reportingCloud' => View\Helper\ReportingCloudFactory::class,
        ],
    ],
];
