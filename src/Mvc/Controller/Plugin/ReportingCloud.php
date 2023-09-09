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

use Laminas\Mvc\Controller\Plugin\AbstractPlugin;
use TextControl\ReportingCloud\ReportingCloud as TextControlReportingCloudReportingCloud;

class ReportingCloud extends AbstractPlugin
{
    public function __construct(
        protected TextControlReportingCloudReportingCloud $textControlReportingCloudReportingCloud
    ) {
    }

    public function __invoke(): TextControlReportingCloudReportingCloud
    {
        return $this->textControlReportingCloudReportingCloud;
    }
}
