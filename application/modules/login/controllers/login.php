<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MX_Controller
{
	private $controller = 'Login';

	function __construct(){
		parent::__construct();
	}

	function index(){
		$data = array('module' 	=> $this->controller,
					  'title'	=> 'Login');	

		loadLoginLayout('login');	
	}
}
?>