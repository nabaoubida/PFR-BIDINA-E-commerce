<?php
    // Load config file
    require_once 'config/config.php';
    require_once 'helpers/redirect.php';
    require_once 'helpers/session.php';
    
    // Load Libraries
    // require_once '../app/libraries/Controller.php';
    // require_once '../app/libraries/Core.php';
    // require_once '../app/libraries/Database.php';

    //autoload Core libraries
    spl_autoload_register(function($className){
        require_once '../app/libraries/' . $className .'.php';
    });
    