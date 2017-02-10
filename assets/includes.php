<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

#Generalize the path to be recognized in server or localhost
$assets_folder = "http://". $_SERVER['HTTP_HOST'] .'/CI-Angular/assets/';
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
	<link rel="stylesheet" type="text/css" href=<?php echo CSSPATH."teste.css"; ?>>
</head>