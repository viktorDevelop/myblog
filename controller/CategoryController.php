<?
class CategoryController extends FrontController   
{
	 
	public function actionIndex()
	{
		 
		$article = new ArticleComponent();
		

		$article->getView();

 
	}

	public function actionListArticlesByCategory($url_params = '')
	{
		 
		// $article = new ArticleComponent();
		 
		print_r($url_params);
		// $article->id = $id;
		// $article->getView();
		// $this->template->

	}
	 
}