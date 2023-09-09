<?php
declare(strict_types=1);

namespace TextControlTest\Laminas\ReportingCloud\Service;

use Laminas\ServiceManager\Exception\ServiceNotFoundException;
use Laminas\ServiceManager\ServiceManager;
use PHPUnit\Framework\TestCase;
use TextControl\Laminas\ReportingCloud\Service\ReportingCloudFactory;
use TextControl\ReportingCloud\Exception\InvalidArgumentException;
use TextControlTest\Laminas\ReportingCloud\ServiceManagerFactory;

class ReportingCloudFactoryTest extends TestCase
{
    protected ReportingCloudFactory $factory;

    protected function setUp(): void
    {
        $this->factory = new ReportingCloudFactory();
    }

    protected function tearDown(): void
    {
        unset($this->factory);
    }

    public function testItRaisesExceptionIfConfigNotInContainer(): void
    {
        try {
            $container = new ServiceManager();
            $this->factory->__invoke($container, '');
        } catch (ServiceNotFoundException $serviceNotFoundException) {
            self::assertStringContainsString(
                'Unable to resolve service "Config" to a factory',
                $serviceNotFoundException->getMessage()
            );
        }
    }

    public function testItRaisesExceptionIfConfigInContainerIsIncomplete1(): void
    {
        try {
            $container = new ServiceManager();
            $container->setService('Config', []);
            $this->factory->__invoke($container, '');
        } catch (InvalidArgumentException $invalidArgumentException) {
            $needle = "The key 'reportingcloud' has not been specified in your application's configuration file.";
            self::assertStringContainsString($needle, $invalidArgumentException->getMessage());
        }
    }

    public function testItRaisesExceptionIfConfigInContainerIsIncomplete2(): void
    {
        try {
            $container = new ServiceManager();
            $container->setService('Config', [
                'reportingcloud' => [],
            ]);
            $this->factory->__invoke($container, '');
        } catch (InvalidArgumentException $invalidArgumentException) {
            $needle = "The key 'credentials' has not been specified under the key ";
            $needle .= "'reportingcloud' in your application's configuration file.";
            self::assertStringContainsString($needle, $invalidArgumentException->getMessage());
        }
    }

    public function testItRaisesExceptionIfConfigInContainerIsIncomplete3(): void
    {
        try {
            $container = new ServiceManager();
            $container->setService('Config', [
                'reportingcloud' => [
                    'credentials' => [],
                ],
            ]);
            $this->factory->__invoke($container, '');
        } catch (InvalidArgumentException $invalidArgumentException) {
            $needle = "Either the key 'api_key', or the keys 'username' and 'password' have not been specified";
            self::assertStringContainsString($needle, $invalidArgumentException->getMessage());
        }
    }

    public function testItRaisesExceptionIfConfigInContainerIsIncomplete4(): void
    {
        try {
            $container = new ServiceManager();
            $container->setService('Config', [
                'reportingcloud' => [
                    'credentials' => [
                        'username' => '',
                    ],
                ],
            ]);
            $this->factory->__invoke($container, '');
        } catch (InvalidArgumentException $invalidArgumentException) {
            $needle = "Either the key 'api_key', or the keys 'username' and 'password' have not been specified";
            self::assertStringContainsString($needle, $invalidArgumentException->getMessage());
        }
    }

    public function testItRaisesExceptionIfConfigInContainerIsIncomplete5(): void
    {
        try {
            $container = new ServiceManager();
            $container->setService('Config', [
                'reportingcloud' => [
                    'credentials' => [
                        'password' => '',
                    ],
                ],
            ]);
            $this->factory->__invoke($container, '');
        } catch (InvalidArgumentException $invalidArgumentException) {
            $needle = "Either the key 'api_key', or the keys 'username' and 'password' have not been specified";
            self::assertStringContainsString($needle, $invalidArgumentException->getMessage());
        }
    }

    public function testItIsRegisteredInServiceFactory(): void
    {
        $serviceManager = ServiceManagerFactory::getServiceManager();

        self::assertTrue($serviceManager->has('ReportingCloud'));
    }
}
