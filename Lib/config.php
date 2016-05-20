<?php
/**
 *
 * @author WladimirAvila
 */

/**
 * The ROOT directory contains the app directory structure and the core lib.
 * Typically, you don't need to change this.
 */
define('ROOT', realpath(dirname(__FILE__) . '../../'));

/**
 * The 404 error page. Make sure this file actually exists. The 404 Not Found 
 * page can be a HTML or PHP page just as long as it produces some message that 
 * notifies the user that the requested URL didn't exist on the server.
 *
 * This file will be included by the URL dispatcher if no matching application 
 * is found (and no default exists).
 */
define ('FILE_NOT_FOUND', ROOT . '/error-doc/404.php');

/**
 * The file ending for PHP classes.
 */
define('CONTROLLER_FILE', 'Controller.php');

/**
 * The directory containing the application controllers. This directory will be
 * placed on the include path.
 */
define('CONTROLLER', ROOT . '/controller/');

/**
 * The directory containing the models of the application. This directory will 
 * be placed on the include path.
 */
define('MODEL', ROOT.  '/model/');

/**
 * The default template path. An application can override this or ignore this 
 * constant as it only should be seen as a recommendation. This directory will 
 * be placed on the include path.
 */
define ('VIEW', ROOT . '/view/');

/** 
 * Constant denoting the error reporting level. 
 * 0 - Show errors only.
 * 1 - Show warnings and errors.
 * 2 - Show notices, warnings and errors.
 */
define('DEBUG', 1);
?>