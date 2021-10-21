<?
namespace controller;
use core\View;
use core\SqlBuilder;
 

class Component  extends FrontController  
{
	protected static $table;


	public function add($value='')
	{
		 echo 'add to '. static::$table;
	}

	public function delete($id)
	{
		 
	}

	public function edite($id)
	{
		 
	}

	public function get($sql, $data = [])
	{
		$sql = $this->db->prepare($sql); 

		if (!empty($data)) {
			 

			$sql->execute($data);
		}else{

			$sql->execute();
		}
		
		$res = $sql->FetchAll();

		return $res;
		
	}
	 
	

}

 
class ArticleComponent extends  Component
{	
	protected static $table = 'articles' ;
		
	public $id;
	public $title;
	public $titleUrl;

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


class ArticleController extends FrontController   
{
	 
	public function actionIndex()
	{
		 
		$article = new ArticleComponent();
		$SqlBuilder = new SqlBuilder();
		 
		
 		$article->list();
 		$article->getView('index',function() use ($article,$SqlBuilder){
 			
			   $sql =  $SqlBuilder->select()->FROM('articles')->orderBy('id','DESC')->get();
				
				 return   $article->get($sql);
 	 

	 		});

 		$this->template('blog');
	}	

	public function actionDetailById($url_params = '')
	{
		 $article = new ArticleComponent();
		$SqlBuilder = new SqlBuilder();
	    
	    $article->detail();
		$article->getView('index',function() use ($article,$SqlBuilder,$url_params){

 				 
			   $sql =  $SqlBuilder->select()->FROM('articles')->WHERE('id')->orderBy('id','DESC')->get();
				
				 return   $article->get($sql,[':id'=>intval($url_params['id'])]);
 	 

	 		});
		$this->template('blog');
	}

	public function actionAdd($value='')
	{		

		 


		 $this->template('admin');
	}
	 
}




 