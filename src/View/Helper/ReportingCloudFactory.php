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

namespace TextControl\Laminas\ReportingCloud\View\Helper;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use TextControl\ReportingCloud\ReportingCloud as TextControlReportingCloudReportingCloud;

class ReportingCloudFactory implements FactoryInterface
{
    /**
     * @param string             $requestedName
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): ReportingCloud
    {
        $reportingCloud = $container->get('ReportingCloud');
        assert($reportingCloud instanceof TextControlReportingCloudReportingCloud);

        return new ReportingCloud($reportingCloud);
    }
}
