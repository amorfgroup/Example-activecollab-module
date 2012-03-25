<?php
class ModulenameController extends ApplicationController {
	/**
	 * Active module
	 *
	 * @var string
	 */
	var $active_module = MODULENAME_MODULE;
	
	function __construct($request){
		parent::__construct($request);
		/*
                 * create/modify variables and assign to Smarty
                 */
                //example
                /*
                $somevariable = 'text';
                $this->smarty->assign(array(
                    'active_project' => $somevariable
                 ));
                 */
	}
	
	function index() {
        
        }

        function view() {
        
        }
}