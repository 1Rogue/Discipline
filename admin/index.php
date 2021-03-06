<?php
error_reporting(-1);
ini_set("display_errors", 1);

function __autoload($class_name) {
    include $class_name . '.php';
}
?>
<html>
    <head lang="en-US">
        <title>Testing page</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../assets/css/main.css" rel="stylesheet" media="screen">
        <link href="../assets/css/menu.css" rel="stylesheet" media="screen">
        <link href="../assets/css/table.css" rel="stylesheet" media="screen">
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.js"></script>
    </head>
    <body>
        <?
        $module = $_GET['module'];
        include('modules/' . $module .  '.php');
        ?>
    </body>
</html>