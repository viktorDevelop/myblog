<?
namespace components;
use controller\FrontController;

class Component  extends FrontController  
{
	protected static $table;

	private $data = [];



	public function __set($k,$v)
	{
		// code...

		$this->data[$k] = $v;
	}

	public function add()
	{
		 // echo 'add to '. static::$table;
		 
			$cols = array_keys($this->data);


			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 
			 

			 $sql = "INSERT INTO  ". static::$table . "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 

			 				 // print_r($ins);
		 // $this->get("INSERT INTO articles (title, anons, content, subtitle, id_user, data_create, image_path, id_cat) VALUES ('12ffff', 'safdasf', 'sfsf', 'sdf', '1', now(), 'выап', '1') ");
		 // $this->get("INSERT INTO articles (title) VALUES (:title)",);
		$this->get($sql,$data);			 				 
		  
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
