<?php

/**
 * Modulename module on_admin_section event handler
 *
 * @package activeCollab.modules.modulename
 * @subpackage handlers
 */

/**
 * Register tool in administration other section
 *
 * @param array $sections
 * @return null
 */
function modulename_handle_on_admin_sections(&$sections) {
    /*
     * example for administrative section
     * 
     */
    /*
    if (is_array($sections[ADMIN_SECTION_OTHER][ADMIN_SECTION_OTHER])) {
        $temp = array(
            'name' => lang('Module name'),
            'description' => lang('Module description'),
            'url' => assemble_url('modulename'),
            'icon' => get_image_url('icon.png', MODULENAME_MODULE)
        );
        array_push($sections[ADMIN_SECTION_OTHER][ADMIN_SECTION_OTHER], $temp);
    }
    else {
        $sections [ADMIN_SECTION_OTHER] [ADMIN_SECTION_OTHER] = array(
            array('name' => lang('Module name'),
                'description' => lang('Module description'),
                'url' => assemble_url('modulename'),
                'icon' => get_image_url('icon.png', MODULENAME_MODULE)));
    }
     
     */
}

// backup_handle_on_admin_sections
?>