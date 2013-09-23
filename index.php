<?php
error_reporting(-1);
ini_set("display_errors", 1);

/*function __autoload($class_name) {
    include $class_name . '.php';
}*/

include 'modules/ModuleManager.php';
?>
<html>
    <head lang="en-US">
        <title>Testing page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="assets/css/main.css" rel="stylesheet" media="screen">
        <link href="assets/css/menu.css" rel="stylesheet" media="screen">
        <link href="assets/css/table.css" rel="stylesheet" media="screen">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.js"></script>
    </head>
    <?
    $modules = new ModuleManager();
    $module = null;
    if (isset($_GET['module'])) {
        $module = $modules->getModule($_GET['module']);
    } else {
        $module = $modules->getModule('global');
    }
    ?>
    <body>
        <div class="container">
            <div id="header">
                <?
                $module->getHeader();
                ?>
            </div>
            <div id="content">
                <?
                $module->getContent();
                ?>
            </div>
            <div id="footer">
                <?
                $module->getFooter();
                ?>
                <span class="footnote">
                    Online management for academic administrative actions. Developed by
                    <a href="https://github.com/1Rogue">Spencer Alderman</a>
                </span>
            </div>
    </body>
</html>