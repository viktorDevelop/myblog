<?
namespace components;

/**
 * 
 */
class MenuComponent extends Component
{
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
	  	 
	   	
	  } 

	  public function render($params = [])
	  {
	  	if (!empty($params)) {
	  		 
	  		$path = $params['template'].'/menu/'.$params['view'];
	  				$this->view->arResult = ['title','id'];
	   		echo  $this->view->render($path);
  
	  	}

	  }
}