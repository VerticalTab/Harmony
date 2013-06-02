Harmony : Symfony Based Framework for web applications
======================================================

release-1.0 [![Build Status](https://secure.travis-ci.org/VerticalTab/Harmony.png?branch=release-1.0)](http://travis-ci.org/VerticalTab/Harmony)

Harmony is a Symfony Based Framework that includes several additional tools 
which work together to aid in building web applications. In fact, Harmony is
basically the [symfony standard edition][1] with extra libraries and tweaks.
For additional information, refer to the [Symfony Book][4].

Requirements
------------

 - php >= 5.3 (for dev environment, use php >= 5.4)

### Developing on Debian based Linux

 - `sudo apt-get install php5-cli php5-xdebug`
 - (optionally install a dev rdbms) `sudo apt-get install mysql-server php5-mysql`


Create a new project
--------------------

To create a new project, use [composer][2]:

    curl -s http://getcomposer.org/installer | php
    php composer.phar create-project verticaltab/harmony my-project dev-release-1.0
    cd my-project


Developing your project
-----------------------
Install the development vendor libraries:

    php composer.phar update --dev

Check your system configuration and fix any reported problems:

    php app/check.php

Fire up php 5.4's build in web server:

    app/console server:run

Launch http://localhost:8000/ in your web browser. You should see the Bootstrap
starter template. If not, check http://localhost:8000/config.php for any problems.
The default bundle, HarmonyHomepageBundle is located in `src/Harmony`. You can
either directly modify the controllers and views there or remove it and create
your own bundle.

Removing HarmonyHomepageBundle
------------------------------

 - Remove the Harmony Bundle `rm -rf src/Harmony`.
 - Edit `app/AppKernel.php` and remove the HarmonyHomepageBundle line.
 - Edit `app/config/routing.yml` and remove the harmony_homepage section.

PHPUnit
-------

Unit tests can be run by running `bin/phpunit -c app`


Keeping vendor libraries up-to-date
-----------------------------------

During the development and life of your application, many of the vendor libraries
will release updated versions. To make use of these updated library versions, you
can either edit the composer.json file manually or download the [latest][3]. Then
use composer to update the vendor libraries:

    php composer.phar update


Deploying to Staging/Production
-------------------------------

Your deployment process should perform (at a minimum) these steps or equivalent:

    rm web/config.php
    rm web/app_dev.php
    curl -s http://getcomposer.org/installer | php
    php composer.phar install
    app/console assetic:dump


[1]: http://github.com/symfony/symfony-standard
[2]: http://getcomposer.org/
[3]: http://raw.github.com/VerticalTab/Harmony/master/composer.json
[4]: http://symfony.com/doc/current/book/index.html
