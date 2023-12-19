<?php 
session_start();
// require_once 'config/config.php';
// // require_once 'security/LoginService.php';
// require_once 'security/LoginInterface.php';
// require_once 'services/Bservice.php';
// require_once 'services/AgencyService.php';
// require_once 'models/Bank.php';
// require_once 'models/Agency.php';



// Autoload Libraries 


require_once 'config/config.php';


function Autoloader($class) {
    $paths = [
        APPROOT."/libraries/",
        APPROOT."/services/",
        APPROOT."/models/",
        APPROOT."/security/"
    ];

    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}


spl_autoload_register('Autoloader');

$init = new Core();

// spl_autoload_register(function($className){

//     require_once 'libraries/' . $className . '.php';


// });

// // spl_autoload_register(function($className){

// //     require_once 'services/' . $className . '.php';

// // });

// $init = new Core();

?>