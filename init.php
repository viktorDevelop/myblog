<?
namespace app;
use \PDO;
use core\Route;

define('URL','http://localhost:8001');

spl_autoload_register(function($class){

 
     $path = str_replace('\\', '/', $class);

    $file = $path.'.php';

    if (file_exists($file)) {
         
        include $file;
    } 



});


// список последних статей
Route::get('/',['controller'=>'Article']);
// список категорий
Route::get('/category/',['controller'=>'Category']);
// список статей по категории
Route::get('/category/(?P<id>[a-z0-9-]+)',['controller'=>'Category','action'=>'ListArticlesByCategory']);
// детальная статьи
Route::get('/article/(?P<id>[0-9]+)',['controller'=>'Article','action'=>'DetailById']);
Route::get('/article/(?P<title_en>[a-z-]+)',['controller'=>'Article','action'=>'DetailByTitleEn']);
 
Route::get('/admin/article/add',['controller'=>'Article','action'=>'Add']);

