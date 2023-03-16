![Logo](../resource/rc_logo_512.png)

# What Happened to the Zend Framework 3 Module for ReportingCloud Web API?

In April 2019, Matthew Weier O'Phinney [announced](https://framework.zend.com/blog/2019-04-17-announcing-laminas.html) that the [Zend Framework](https://framework.zend.com/) will transition to the Linux Foundation under the new name of [The Laminas Project](https://getlaminas.org/).

At the end of December 2019, The Laminas Project [released](https://github.com/laminas) an initial set of repositories, and all Zend Framework packages were marked as abandoned.

Following this trend, the package [`textcontrol/textcontrol-reportingcloud-zf-module`](https://packagist.org/packages/textcontrol/textcontrol-reportingcloud-zf-module) was also marked as abandoned and a new package [`textcontrol/textcontrol-reportingcloud-laminas-module`](https://packagist.org/packages/textcontrol/textcontrol-reportingcloud-laminas-module) was released containing the migrated code.

Since the [migration](https://github.com/laminas/laminas-migration) from Zend Framework 3 to Laminas involves mainly a namespace change (`\Zend` to `\Laminas`), migrating the Zend Framework 3 Module for ReportingCloud Web API is simply a matter of replacing the old package with the new one.

## How to Migrate

1) Change directory into the root directory of your project (the directory in which `composer.json` is located).

2) Type `composer remove textcontrol/textcontrol-reportingcloud-zf-module` to remove the abandoned Zend Framework 3 module.

3) Type `composer require textcontrol/textcontrol-reportingcloud-laminas-module:^2.2` to install the Laminas module.

4) You have completed the migration.

   Since the Laminas module for ReportingCloud Web API has not changed any public interfaces, you do not need to make any further changes to your project.
