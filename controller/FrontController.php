<?
namespace controller;

use core\View;
use components\MenuComponent;
use core\DataBase;
class FrontController    
{
	
	public $db;
	public $view;

	function __construct()
	{
		 $this->db  = DataBase::getInstance()->getConnect();
		 $this->view = View::getInstance();
		 
	}

	public function template($template)
	{
		 
		$this->view->menu =  new MenuComponent();
	
		$this->view->render($template,true);
	}
	  
}
