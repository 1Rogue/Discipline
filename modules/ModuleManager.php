<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

/**
 * Manages modules in use
 *
 * @author 1Rogue
 */
class ModuleManager {
    
    private $arr;
    
    function __construct() {
        $arr = array(
            "global" => new Globals()
        );
    }
    
    public function getModule($name) {
        $back = $arr[$name];
        if ($arr === null) {
            return new Globals();
        }
        return $back;
    }
}

?>
