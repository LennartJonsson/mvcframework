<?php
/**
 * All requests routed through here. This is an overview of what actually happens during
 * a request.
 *
 * @package MvcFrameWorkCore
 */

//
// Phase: Bootstrap
//
define('MFW_INSTALL_PATH', dirname(__FILE__));
define('MFW_SITE_PATH', MFW_INSTALL_PATH . '/site');

require(MFW_INSTALL_PATH.'/src/bootstrap.php');

$mfw = CMvcFrameWork::Instance();

//
// Phase: Frontcontroller route
//
$mfw->FrontControllerRoute();

//
// Phase: Theme engine render
//
$mfw->ThemeEngineRender();

