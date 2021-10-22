<?
namespace core;
class SqlBuilder    
{
		
	private $sql;

	 public function select($selectItem = [])
	 {
	 	if (!empty($selectItem)) {
	 		// code...
	 		$this->sql = "SELECT ".implode(',', $selectItem);
	 	}else{

			$this->sql = "SELECT *"; 	 
	 	}

	 	return $this;
	 }

	 public function innerJoin($table,$params = [])
	 {
	 	 
	 	 $this->sql .= ' INNER JOIN '.$table.' ON '.$params[0].' = '.$params[1];
	 	 return $this;
	 }
	 public function FROM($table)
	 {
	 	 $this->sql.=' FROM  '.$table;
	 	 return $this;
	 }


	 public function orderBy($field, $val = 'ASC')
	 {
	 	// code...

	 	$this->sql .= ' ORDER BY '.$field.' '.$val;
	 	return $this;
	 }

	 

	 public function IN($column,$arr = [])
	 {
	 	 
	 	$in  = str_repeat('?,', count($arr) - 1) . '?';
		$this->in = " WHERE ". $column. " IN ($in)";
		return $this;
	 }

	 public function WHERE($column)
	 {
	 	$this->sql .= ' WHERE '. $column .'= :'.$column ;
	 	return $this;
	 }

	 public function limit($limit = 10, $offset = 0)
	 {
	 	// code...

	 	$this->sql .= ' LIMIT '.$limit.' OFFSET '.$offset; 
	 	return $this;
	 }
 
	
	public function insert()
		{
			$cols = array_keys($this->data);
			 $ins = [];
			$data = [];
			 //var_dump($this->db->data);
			foreach ($cols as $key) {
				 $ins[] = ":".$key;
				 $data[':'. $key] = $this->data[$key];
			}
			 

		echo	 $sql = "INSERT INTO  ". static::$table . "
			 				 (". implode(',', $cols).")
			 				 VALUES 
			 				 (".implode(',', $ins).")"; 
			 
			 return $this;
		}

	public function update()
		{
			 $cols = array_keys($this->data);

			 foreach ($cols as $key) {
				  
				 $data[':'.$key] = $this->data[$key];
				$up[] = $key.'=:'.$key;

			 	 
			}
	 		
			 $sql = "UPDATE " .static::getTable(). " SET  ".implode(',', $up). " WHERE id = :id";
			 
			  
	 		 

		}
	public function delete()
		{
			 $sql = "DELETE FROM ".static::getTable()." WHERE id = :id";
			 
			 $this->db->execute($sql,[':id'=>$this->data['id']]);
		}




	 public function get()
	 {
	 	return $this->sql;
	 }


}