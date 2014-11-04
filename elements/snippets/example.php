<?php
/**
 * @name Example
 * @description Example Snippet
 *
 * USAGE
 *
 *  [[Example]]
 *
 * Always include an example!
 *
 * Copyright 2014 by You <you@email.com>
 * Created on 10-31-2014
 *
 *
 * Variables
 * ---------
 * @var $modx modX
 * @var $scriptProperties array
 *
 * @package yourpackage
 */
// Your core_path will change depending on whether your code is running on your development environment
// or on a production environment (deployed via a Transport Package).  Make sure you follow the pattern
// outlined here. See https://github.com/craftsmancoding/repoman/wiki/Conventions for more info
$core_path = $modx->getOption('yourpackage.core_path', null, MODX_CORE_PATH.'components/yourpackage/');
include_once $core_path .'/vendor/autoload.php';
return 'Example Snippet';