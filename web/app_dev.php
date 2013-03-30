<?php

use Symfony\Component\HttpFoundation\Request;

//Access to this file is not restricted by ip address. This allows other systems
//to access this development version of the site. It is important that your
//deployment process remove this file

require_once __DIR__.'/../app/bootstrap.php.cache';
require_once __DIR__.'/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
