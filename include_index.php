<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- require will produce a fatal error (E_COMPILE_ERROR) 
    and stop the script -->
    <?php
        require "include_header.php";
    ?>
    <!-- include will only produce a warning (E_WARNING) 
    and the script will continue -->
    <?php
        include "include_main.php";
    ?>
</body>
</html>