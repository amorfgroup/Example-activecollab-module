<?php

/**
 * modulename module definition
 *
 * @package activeCollab.modules.modulename
 * @subpackage models
 */
class ModulenameModule extends Module {

    /**
     * Plain module name
     *
     * @var string
     */
    var $name = 'modulename';

    /**
     * Is system module flag
     *
     * @var boolean
     */
    var $is_system = false;

    /**
     * Module version
     *
     * @var string
     */
    var $version = '1.0';

    // ---------------------------------------------------
    //  Events and Routes
    // ---------------------------------------------------

    /**
     * Define module routes
     *
     * @param Router $r
     * @return null
     */
    function defineRoutes(&$router) {
        /*
         * example routers
         * 
         * 
         */
        //$router->map('modulename', 'modulename', array('controller' => 'modulename', 'action' => 'index'));
        //$router->map('dashboard_modulename', 'dashboard/modulename', array('controller' => 'modulename', 'action' => 'index'));
        //$router->map('modulename_view_project', 'modulename/:project_id/view', array('controller' => 'modulename', 'action' => 'view'), array('project_id' => '\d+'));
    }

// defineRoutes

    /**
     * Define event handlers
     *
     * @param EventsManager $events
     * @return null
     */
    function defineHandlers(&$events) {
        /*
         * example handlers see: handlers/on_admin_sections.php and handlers/on_build_menu.php
         * 
         */

        //$events->listen('on_build_menu', 'on_build_menu');
        //$events->listen('on_admin_sections', 'on_admin_sections');
    }

// defineHandlers
    // ---------------------------------------------------
    //  Un(Install)
    // ---------------------------------------------------

    /**
     * Install module
     *
     * @param void
     * @return boolean
     */
    function install() {
        /*
         * do some stuff at install db table creation/modification, email template creation etc.
         * 
         * 
         */
        return parent::install();
    }

// install

    /**
     * Uninstall module
     *
     * @param void
     * @return boolean
     */
    function uninstall() {
        /*
         * do some stuff at uninstall db table deletion/modification, email template deletion etc
         * 
         */
        return parent::uninstall();
    }

// uninstall

    /**
     * Get module display name
     *
     * @return string
     */
    function getDisplayName() {
        return lang('Module Name Display Name');
    }

// getDisplayName

    /**
     * Return module description
     *
     * @param void
     * @return string
     */
    function getDescription() {
        return lang('Some description');
    }

// getDescription

    /**
     * Return module uninstallation message
     *
     * @param void
     * @return string
     */
    function getUninstallMessage() {
        return lang('Module will be deactivated. (No)/(All) data will be deleted');
    }

// getUninstallMessage
}

?>