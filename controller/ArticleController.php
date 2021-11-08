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


	public function actionDetailByTitleEn($url_params='')
	{
		 $article = new ArticleComponent();
		$SqlBuilder = new SqlBuilder();
	    
	    $article->detail();

	    
		$article->getView('index',function() use ($article,$SqlBuilder,$url_params){

 				 
			   $sql =  $SqlBuilder->select()->FROM('articles')->WHERE('title_en')->get();
				
				 return   $article->get($sql,[':title_en'=>$url_params['title_en'] ]);
 	 

	 		});
		 
		$this->template('blog');
		
	}


	
	public function actionAdd()
	{		
 
		$article = new ArticleComponent;


		$article->title = 'Frontend';
		$article->title_en = 'frontend';
		$article->anons = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
		$article->subtitle = 'Lorem';
		 
		$article->add();
		 
	}

	public function actionEdite()
	{

	}

	public function actionDelete()
	{
		 
	}

	 
}




 