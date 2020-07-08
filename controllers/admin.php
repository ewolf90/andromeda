<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once MODPATH.'core/controllers/nova_admin.php';

class Admin extends Nova_admin {

	public function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Put your own methods below this...
	 */
	 
	public function theme()
	{
	    Auth::check_access('site/catalogueskins');
	    
		$data['header'] = "Andromeda Settings";
	
        $this->_regions['content'] = Location::view('admin_theme', $this->skin, 'admin', $data);
        $this->_regions['title'].= $data['header'];
	
        Template::assign($this->_regions);
	
        Template::render();
    }
    
    public function styles()
    {
	    Auth::check_access('site/catalogueskins');
	    
		$data['header'] = "Andromeda Styles";
	
        $this->_regions['content'] = Location::view('admin_styles', $this->skin, 'admin', $data);
        $this->_regions['title'].= $data['header'];
	
        Template::assign($this->_regions);
	
        Template::render();
    }
}
