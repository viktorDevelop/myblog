<?
namespace core;
use \PDO;
/**
 * 
 */
class DataBase    
{
	
	private static $instance;
	private $db;

	private function __construct()
	{
		 $this->db  = new PDO('mysql:dbname=myDb;host=db','user','test'); 

	}

	public static function getInstance()
	{
		if (!isset(self::$instance)) {
			// code...

			$cl = __CLASS__;

			self::$instance = new $cl;
		}

		return self::$instance;
	}

	public function getConnect($value='')
	{
		 return $this->db;
	}

}