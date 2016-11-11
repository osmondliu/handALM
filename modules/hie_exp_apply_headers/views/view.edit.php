<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');

class hie_exp_apply_headersViewEdit extends ViewEdit
{

    function Display() {

        $modules = array(
            'HIE_exp_apply_headers',
            'HIE_exp_apply_lines',
        );

        foreach ($modules as $module) {
            if (!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js')) {
                require_once 'include/language/jsLanguage.php';
                jsLanguage::createModuleStringsCache($module, $GLOBALS['current_language']);
            }
            echo '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $module . '/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['js_version_key'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
            
        };
        echo '<script type="text/javascript" src="modules/HIE_exp_apply_lines/js/HIE_exp_apply_lines_editview.js"></script>';

        parent::Display();
    }
}
