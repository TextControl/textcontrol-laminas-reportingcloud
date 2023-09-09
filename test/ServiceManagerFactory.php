<?php
declare(strict_types=1);

namespace TextControlTest\Laminas\ReportingCloud;

use Laminas\ModuleManager\ModuleManager;
use Laminas\Mvc\Service\ServiceManagerConfig;
use Laminas\ServiceManager\ServiceManager;

class ServiceManagerFactory
{
    public static function getServiceManager(array $applicationConfig = []): ServiceManager
    {
        $applicationConfig = [] !== $applicationConfig ? $applicationConfig : static::getApplicationConfig();
        $config            = self::getConfig();

        $serviceManagerConfigArray = [];
        if (isset($applicationConfig['service_manager'])) {
            $serviceManagerConfigArray = $applicationConfig['service_manager'];
        }

        $serviceManager       = new ServiceManager();
        $serviceManagerConfig = new ServiceManagerConfig($serviceManagerConfigArray);
        $serviceManagerConfig->configureServiceManager($serviceManager);

        $serviceManager->setService('ApplicationConfig', $applicationConfig);
        $serviceManager->setService('Config', $config);

        $moduleManager = $serviceManager->get('ModuleManager');
        assert($moduleManager instanceof ModuleManager);
        $moduleManager->loadModules();

        return $serviceManager;
    }

    /**
     * @return array<string, array>
     */
    public static function getApplicationConfig(): array
    {
        return [
            'modules'                 => ['Laminas\Router', 'TextControl\Laminas\ReportingCloud'],
            'module_listener_options' => [
                'config_glob_paths' => [],
                'module_paths'      => [],
            ],
        ];
    }

    /**
     * @return array<string, array>
     */
    public static function getConfig(): array
    {
        return [
            'reportingcloud' => [
                'credentials' => [
                    'username' => 'your-username',
                    'password' => 'your-password',
                ],
            ],
        ];
    }
}
