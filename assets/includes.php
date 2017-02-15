<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

#Generalize the path to be recognized in server or localhost
$assets_folder = "http://". $_SERVER['HTTP_HOST'] ."/CI-Angular/assets/";
define('CSSPATH', $assets_folder.'css/');
define('JSPATH', $assets_folder.'js/');

/* --------------------------------------------------
 * FRONT-END INCLUDES AND LINKS
 * --------------------------------------------------
 * Here must be placed all the front-end includes
 * like JavaScript, CSS and other files.
 */
?>
<head>
	<!-- DEFAULT CSS -->
	<link rel="stylesheet" type="text/css" href=<?php echo CSSPATH."core/bootstrap.min.css"; ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo CSSPATH."core/bootstrap-theme.min.css"; ?>>
	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href=<?php echo CSSPATH."style.css"; ?>>

	<!-- DEFAULT JAVASCRIPT -->
	<script src=<?php echo JSPATH."core/angular.min.js"; ?>></script>
	<script src=<?php echo JSPATH."core/angular-route.min.js"; ?>></script>
	<script src=<?php echo JSPATH."core/jquery.min.js"; ?>></script>
	<script src=<?php echo JSPATH."core/bootstrap.min.js"; ?>></script>
	<!-- CUSTOM JAVASCRIPT -->
	<script src=<?php echo JSPATH."app.js"; ?>></script>
	<script src=<?php echo JSPATH."controllers.js"; ?>></script>
	<script src=<?php echo JSPATH."routes.js"; ?>></script>
</head>
<body ng-app="app">
