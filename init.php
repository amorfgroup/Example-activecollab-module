<?php

/**
 * Modulename module initialization file
 * 
 * @package activeCollab.modules.modulename
 */
define('MODULENAME_MODULE', 'modulename');
define('MODULENAME_MODULE_PATH', APPLICATION_PATH . '/modules/modulename');

use_model('modulename', MODULENAME_MODULE);
set_for_autoload(
    array
        ('Modulename' => MODULENAME_MODULE_PATH . '/models/modulename/Modulename.class.php'));
?>