<?
namespace controller;
use components\ArticleComponent;
use core\View;
use core\SqlBuilder;

class ArticleController extends FrontController   
{
	 
	public function actionIndex()
	{
		 
		$article = new ArticleComponent();
		$SqlBuilder = new SqlBuilder();
		 
		
 		$article->list();
 		$article->getView('index',function() use ($article,$SqlBuilder){
 			
			    $sql =  $SqlBuilder->select()->FROM('articles')->orderBy('id','DESC')->limit(2)->get();
				
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

	public function actionAdd()
	{		
 
		$article = new ArticleComponent;

		$article->title = 'sfasf';
		$article->anons = 'sfasf';
		$article->content = 'sfasf';
		$article->subtitle = 'sfasf';
		 
		$article->add();
		 
	}

	public function actionEdite()
	{

	}

	public function actionDelete()
	{
		 
	}
	 
}




 