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

namespace TextControl\Laminas\ReportingCloud\Mvc\Controller\Plugin;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use TextControl\ReportingCloud\ReportingCloud as TextControlReportingCloudReportingCloud;

/**
 * Class ReportingCloudFactory
 *
 * @package TextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class ReportingCloudFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string             $requestedName
     * @param array|null         $options
     *
     * @return ReportingCloud
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): ReportingCloud
    {
        $reportingCloud = $container->get('ReportingCloud');
        assert($reportingCloud instanceof TextControlReportingCloudReportingCloud);

        return new ReportingCloud($reportingCloud);
    }
}
