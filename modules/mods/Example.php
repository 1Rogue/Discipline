<?php

/**
 * Example module to view
 *
 * @author 1Rogue
 */
class Example implements Module {
    
    function getName() {
        return "example";
    }

    public function getContent() {
        echo ("Hello from example module!");
    }

    public function getFooter() {
        echo ("This is example's footer");
    }

    public function getHeader() {
        echo ("<h1 class=\"title\"><span>Hello, ");
        echo ("Spencer");
        echo ("!</span></h1>");
    }

}
?>
