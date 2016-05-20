<?php
/**
 * In short, this file does stuff that should always be done. The core script 
 * makes sure input is unescaped so we can escape it when we persist it and 
 * also includes the <tt>config.php</tt> file and adds directories to the 
 * include path.
 *
 * @author WladimirAvila
 */
namespace Lib;

require('config.php');
require('Dispatcher.php');
// 
// include path.
set_include_path(get_include_path() . PATH_SEPARATOR . 
    implode(PATH_SEPARATOR, array(
        MODEL,
        CONTROLLER,
        VIEW)
    ));

// Set level of error reporting
if (DEBUG == 2) {
    error_reporting(E_ALL);
} elseif (DEBUG == 1) {
    error_reporting(E_ALL & ~E_NOTICE);
} else {
    error_reporting(E_ERROR | E_PARSE | E_USER_ERROR);
}


// Strip slashes from input
unescape($_GET);
unescape($_POST);
unescape($_SESSION);
unescape($_COOKIE);
unescape($_SERVER);

/**
 * Perform <code>stripslashes</code> on an array or string if 
 * <code>get_magic_quotes_gpc</code> is set.
 *
 * @param $value A string or array to strip slashes from. The argument will 
 *               be passed as reference.
 */
function unescape(&$value) {
    if (get_magic_quotes_gpc()) {
        if (is_array($value)) {
            while (list($k, $v) = each($value)) {
                if (is_array($value[$k])) {
                    unescape($value[$k]);
                    @reset($value[$k]);
                } else {
                    $value[$k] = stripslashes($v);
                }
            }
        } else {
            $value = stripslashes($value);
        }
    }
}
?>