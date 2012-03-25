<?php

/**
 * Modulename module on_build_menu event handler
 *
 * @package activeCollab.modules.modulename
 * @subpackage handlers
 */

/**
 * Build menu
 *
 * @param Menu $menu
 * @param User $user
 * @return array
 */
function modulename_handle_on_build_menu(&$menu, &$user) {
    /*
     * example for put the module in menu for administrators
     * 
     */
    /*
      if($user->isAdministrator()) {
      $menu->addToGroup(array(
      new MenuItem('modulename', lang('Module name'), assemble_url('modulename'), get_image_url('icon.gif', MODULENAME_MODULE))
      ), 'main');
      } // if
     */
}

// modulename_handle_on_build_menu
?>