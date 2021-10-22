<?
namespace components;
use components\Component;

class ArticleComponent extends  Component
{	
	protected static $table = 'articles' ;
		
	 

	private $type;

	 public function list()
	 {
	 	$this->type = 'list'; 
	 }

	 public function detail()
	 {
	 	 $this->type = 'detail';
	 }
 		
	  public function getView($view_page,callable $callable)
	  {
	  	 
	  	$this->view->arResult =  $callable();
	  	$this->view->view_page = $this->view->render('blog/articles/'.$view_page.'/'.$this->type);
	  	
 
	  }
 
	  

}