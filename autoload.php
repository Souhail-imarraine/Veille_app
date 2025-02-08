

<?php
spl_autoload_register(function($class) {
    include_once "app/controllers/$class.php";
    include_once "app/models/$class.php";
});