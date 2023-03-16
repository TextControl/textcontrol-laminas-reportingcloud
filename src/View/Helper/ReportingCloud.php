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

namespace TextControl\Laminas\ReportingCloud\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use TextControl\ReportingCloud\ReportingCloud as TextControlReportingCloudReportingCloud;

/**
 * Class ReportingCloud
 *
 * @package TextControl\ReportingCloud
 * @author  Jonathan Maron (@JonathanMaron)
 */
class ReportingCloud extends AbstractHelper
{
    /**
     * @var TextControlReportingCloudReportingCloud
     */
    protected TextControlReportingCloudReportingCloud $reportingCloud;

    /**
     * ReportingCloud constructor
     *
     * @param TextControlReportingCloudReportingCloud $reportingCloud
     */
    public function __construct(TextControlReportingCloudReportingCloud $reportingCloud)
    {
        $this->reportingCloud = $reportingCloud;
    }

    /**
     * @return TextControlReportingCloudReportingCloud
     */
    public function __invoke(): TextControlReportingCloudReportingCloud
    {
        return $this->reportingCloud;
    }
}