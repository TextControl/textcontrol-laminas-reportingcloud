<?php
declare(strict_types=1);

namespace TextControlTest\Laminas\ReportingCloud\View\Helper;

use PHPUnit\Framework\TestCase;
use TextControl\Laminas\ReportingCloud\View\Helper\ReportingCloud as ReportingCloudViewHelper;
use TextControl\ReportingCloud\ReportingCloud as ReportingCloudReportingCloud;

class ReportingCloudTest extends TestCase
{
    public function testInvocationReturnsReportingCloudInstance(): void
    {
        $reportingCloud = new ReportingCloudReportingCloud();
        $viewHelper     = new ReportingCloudViewHelper($reportingCloud);

        self::assertSame($reportingCloud, $viewHelper());
    }
}
