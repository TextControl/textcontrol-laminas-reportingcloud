<?php
declare(strict_types=1);

namespace TextControlTest\Laminas\ReportingCloud\Mvc\Controller\Plugin;

use PHPUnit\Framework\TestCase;
use TextControl\Laminas\ReportingCloud\Mvc\Controller\Plugin\ReportingCloud as ReportingCloudControllerPlugin;
use TextControl\ReportingCloud\ReportingCloud as ReportingCloudReportingCloud;

class ReportingCloudTest extends TestCase
{
    public function testInvocationReturnsReportingCloudInstance(): void
    {
        $reportingCloud   = new ReportingCloudReportingCloud();
        $controllerPlugin = new ReportingCloudControllerPlugin($reportingCloud);

        self::assertSame($reportingCloud, $controllerPlugin());
    }
}
