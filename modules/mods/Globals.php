<?php

/**
 * Main module to view
 *
 * @author 1Rogue
 */
class Globals implements Module {
    
    function getName() {
        return "global";
    }

    public function getContent() {
        echo ("Hello from global module!");
    }

    public function getFooter() {
        echo ("This is global's footer");
    }

    public function getHeader() {
        echo ("<h1 class=\"title\"><span>Hello, ");
        echo ("Spencer");
        echo ("!</span></h1>");
    }

}
?>
