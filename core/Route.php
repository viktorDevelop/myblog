<?
namespace core;
 
class Route    
{
     

    public static function get($url,$ar = [])
    {       
          $preg_url = preg_match_all('~^'.$url.'$~',$_SERVER['REQUEST_URI'],$matches);
       
          unset($matches[0]);
          foreach ($matches as $key => $value) {
              // echo $key;
              if (!intval($key)) {
                 
                foreach($value as $item){
                   $url_slug[$key] = $item; 
                }
              }
          }
        
        $controller = (!empty($ar['controller'])) ? $ar['controller'] : 'default';
        $action = (isset($ar['action'])) ? 'action'.$ar['action'] : 'actionIndex';

       $controller =  '\\controller\\'.$controller.'Controller';
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && $preg_url) {
              
            $controller_obj =  new $controller();
            $controller_obj->$action($url_slug);
        }

    }


    public static function post($url,$ar = [])
    {       
          $preg_url = preg_match_all('~^'.$url.'$~',$_SERVER['REQUEST_URI'],$matches);
       
          unset($matches[0]);
          foreach ($matches as $key => $value) {
              // echo $key;
              if (!intval($key)) {
                 
                foreach($value as $item){
                   $url_slug[$key] = $item; 
                }
              }
          }
        
        $controller = (!empty($ar['controller'])) ? $ar['controller'] : 'default';
        $action = (isset($ar['action'])) ? 'action'.$ar['action'] : 'actionIndex';

       $controller =  '\\controller\\'.$controller.'Controller';
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $preg_url) {
              
            $controller_obj =  new $controller();
            $controller_obj->$action($url_slug);
        }

    }


     

        
}