<?php
// Routes Url To Controller And View
$routes = array(
					// Home
					array( 'url' => '/^\/?$/', 'controller' => 'navigator', 'view' => 'index'),

					// Sessions
					array( 'url' => '/^session\/new$/', 'controller' => 'session', 'view' => 'index'),
					array( 'url' => '/^session\/create$/', 'controller' => 'session', 'view' => 'create'),
					array( 'url' => '/^session\/delete$/', 'controller' => 'session', 'view' => 'delete'),
					array( 'url' => '/^session\/pview$/', 'controller' => 'session', 'view' => 'pview'),
					array( 'url' => '/^session\/modify$/', 'controller' => 'session', 'view' => 'modify'),

					// Card
					array( 'url' => '/^cards\/(?P<id>\d+)$/', 'controller' => 'posts', 'view' => 'show'),
					array( 'url' => '/^cards\/?(page\/)?(?P<page>\d+)?$/', 'controller' => 'posts', 'view' => 'index'),
					array( 'url' => '/^cards\/(?P<id>\d+)\/edit$/', 'controller' => 'posts', 'view' => 'edit'),
					array( 'url' => '/^cards\/(?P<id>\d+)\/update$/', 'controller' => 'posts', 'view' => 'update'),
					array( 'url' => '/^cards\/search$/', 'controller' => 'posts', 'view' => 'search'),
					array( 'url' => '/^cards\/upload$/', 'controller' => 'posts', 'view' => 'upload'),
					array( 'url' => '/^cards\/create$/', 'controller' => 'posts', 'view' => 'create'),
					array( 'url' => '/^cards\/searchc$/', 'controller' => 'posts', 'view' => 'searchc'),
					array( 'url' => '/^cards\/request$/', 'controller' => 'posts', 'view' => 'request'),
					array( 'url' => '/^cards\/request\/(?P<id>\d+)\/delete$/', 'controller' => 'posts', 'view' => 'rdelete'),
					array( 'url' => '/^cards\/request\/create$/', 'controller' => 'posts', 'view' => 'rcreate'),

					// Complaint
					array( 'url' => '/^complaint\/index\/?(page\/)?(?P<page>\d+)?$/', 'controller' => 'complaint', 'view' => 'index'),
					array( 'url' => '/^complaint$/', 'controller' => 'complaint', 'view' => 'complaint'),
					array( 'url' => '/^complaint\/(?P<id>\d+)\/delete$/', 'controller' => 'complaint', 'view' => 'delete'),
					array( 'url' => '/^complaint\/(?P<id>\d+)\/close$/', 'controller' => 'complaint', 'view' => 'update'),
					array( 'url' => '/^complaint\/create$/', 'controller' => 'complaint', 'view' => 'create'),
					array( 'url' => '/^complaint\/search$/', 'controller' => 'complaint', 'view' => 'search'),
					array( 'url' => '/^complaint\/searchc$/', 'controller' => 'complaint', 'view' => 'searchc'),
					array( 'url' => '/^complaint\/(?P<id>\d+)\/viewc$/', 'controller' => 'complaint', 'view' => 'viewc'),
					array( 'url' => '/^complaint\/edit$/', 'controller' => 'complaint', 'view' => 'updateCom'),

					// Branch
					array( 'url' => '/^branch\/(?P<id>\d+)$/', 'controller' => 'branch', 'view' => 'show'),
					array( 'url' => '/^branch\/?(page\/)?(?P<page>\d+)?$/', 'controller' => 'branch', 'view' => 'index'),
					array( 'url' => '/^branch\/add$/', 'controller' => 'branch', 'view' => 'add'),
					array( 'url' => '/^branch\/(?P<id>\d+)\/edit$/', 'controller' => 'branch', 'view' => 'edit'),
					array( 'url' => '/^branch\/(?P<id>\d+)\/update$/', 'controller' => 'branch', 'view' => 'update'),
					array( 'url' => '/^branch\/create$/', 'controller' => 'branch', 'view' => 'create'),
					array( 'url' => '/^branch\/search$/', 'controller' => 'branch', 'view' => 'search'),
					//array( 'url' => '/^branch\/searchc$/', 'controller' => 'branch', 'view' => 'searchc'),
					array( 'url' => '/^branch\/(?P<id>\d+)\/delete$/', 'controller' => 'branch', 'view' => 'delete'),
					array( 'url' => '/^branch\/report$/', 'controller' => 'branch', 'view' => 'report'),

					// Atm
					array( 'url' => '/^atm\/(?P<id>\d+)$/', 'controller' => 'atm', 'view' => 'show'),
					array( 'url' => '/^atm\/?(page\/)?(?P<page>\d+)?$/', 'controller' => 'atm', 'view' => 'index'),
					array( 'url' => '/^atm\/add$/', 'controller' => 'atm', 'view' => 'add'),
					array( 'url' => '/^atm\/(?P<id>\d+)\/edit$/', 'controller' => 'atm', 'view' => 'edit'),
					array( 'url' => '/^atm\/(?P<id>\d+)\/update$/', 'controller' => 'atm', 'view' => 'update'),
					array( 'url' => '/^atm\/create$/', 'controller' => 'atm', 'view' => 'create'),
					array( 'url' => '/^atm\/search$/', 'controller' => 'atm', 'view' => 'search'),
					//array( 'url' => '/^atm\/searchc$/', 'controller' => 'atm', 'view' => 'searchc'),
					array( 'url' => '/^atm\/(?P<id>\d+)\/delete$/', 'controller' => 'atm', 'view' => 'delete'),

					// Users
					array( 'url' => '/^user\/(?P<id>\d+)$/', 'controller' => 'user', 'view' => 'show'),
					array( 'url' => '/^user\/?(page\/)?(?P<page>\d+)?$/', 'controller' => 'user', 'view' => 'index'),
					array( 'url' => '/^user\/new$/', 'controller' => 'user', 'view' => 'new'),
					array( 'url' => '/^user\/create$/', 'controller' => 'user', 'view' => 'create'),
					array( 'url' => '/^user\/(?P<id>\d+)\/edit$/', 'controller' => 'user', 'view' => 'edit'),
					array( 'url' => '/^user\/(?P<id>\d+)\/update$/', 'controller' => 'user', 'view' => 'update'),
					array( 'url' => '/^user\/(?P<id>\d+)\/delete$/', 'controller' => 'user', 'view' => 'delete'),
					array( 'url' => '/^user\/(?P<id>\d+)\/aview$/', 'controller' => 'user', 'view' => 'aview'),
					array( 'url' => '/^user\/(?P<id>\d+)\/aview\/page\/(?P<page>\d+)?$/', 'controller' => 'user', 'view' => 'aview')

				);

// Define DB constants

define('HOST','localhost');
define('USERNAME','adb');
define('PASSWORD','adb123');
define('DATABASE','d_adb');

// Directory Structure
define('DS','/');

// Server Root
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT']);

// Application Root
define('APP_ROOT', DS.'adb');

// Address Of Website
define('WEBSITE','http://100.100.120.81');
//define('WEBSITE','http://localhost');

// MVC Paths
define('MODEL_PATH', SERVER_ROOT.APP_ROOT.DS.'models');
define('VIEW_PATH', SERVER_ROOT.APP_ROOT.DS.'views');
define('CONTROLLER_PATH', SERVER_ROOT.APP_ROOT.DS.'controllers');

// Public Paths
define('JS', APP_ROOT.DS.'public/js'.DS);
define('CSS', APP_ROOT.DS.'public/stylesheets'.DS);
define('IMG', APP_ROOT.DS.'public/images'.DS);
define('CHART', APP_ROOT.DS.'public/charts'.DS);

// Include libraries

include('./lib/database.php');
include('./lib/controller.php');
include('./lib/model.php');
include('./lib/view.php');

?>