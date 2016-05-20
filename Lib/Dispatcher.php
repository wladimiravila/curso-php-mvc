<?php
/**
 * Description of distpacher
 *
 * @author WladimirAvila
 */

namespace Lib;

class Distpacher {

    public static function run() {

        $params = array();
        $c_params = array_merge($params, $_POST, $_GET);
        $controller = ($c_params['controller'] ? $c_params['controller'] : 'Index');
        $action = ($c_params['action'] ? $c_params['action'] : 'index');

        require CONTROLLER . 'Controller.php';
        include CONTROLLER . $controller . CONTROLLER_FILE;

        $obj = new $controller();
        
        if ($action) {
            $obj->$action($c_params);
        }

    }

}