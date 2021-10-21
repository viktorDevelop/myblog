<?
namespace controller;
use \PDO;
use core\View;


class FrontController    
{
	
	public $db;
	public $view;

	function __construct()
	{
		 $this->db  = new PDO('mysql:dbname=myDb;host=db','user','test');
		 $this->view = View::getInstance();
		 $this->view->menu = 'menu';
	}


	public function template($template)
	{
		 

		$this->view->render($template,true);
	}
	  
}
