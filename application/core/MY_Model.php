<?php

/**
* Model基类，把常见的DB操作先写好，方便子类继承
*/
class MY_Model extends CI_Model
{
	//表名
	protected $table_name = '';
	//唯一主键
	protected $primary_key = '';

	//构造器
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	/********************************/
	/***     以下是常用查询函数     ***/
	/********************************/

	/**
	 * 查询：在本表中，根据ID，得到一条记录
	 */
	public function get_row($id)
	{
		$row = null;
		$this->db->where($this->primary_key,$id);
		$query = $this->db->get($this->table_name);
		if($query->num_rows() >0){
			$row = $query->row_array();
		}
		return $row;
	}

	/**
	 * 查询：在本表中，根据ID，得到指定字段的值
	 */
	public function get_field_by_id($field,$id)
	{
		$value = null;
		$row = $this->get_row($id);
		if(!empty($row)){
			$value = $row[$field];
		}
		return $value;
	}

	/**
	 * 查询：在任一表中，根据ID，得到指定字段的值
	 */
	/*
	public function get_name_by_id($id,$idvalue,$name,$table)
	{
		$this->db->select("$name");
		$this->db->where("$id",$idvalue);
		$this->db->from("$table");
		$query = $this->db->get();
		$result = $query->row_array();
		return $result["$name"];
	}
	*/	

	/**
	 * 查询：得到自动生成的ID（自增长）
	 */
	public function get_insert_id()
	{
		return $this->db->insert_id();
	}	

	/**
	 * 查询：得到记录的总数，$query->num_rows();
	 */
	/*
	public function get_query_count($sql){
		$query = $this->db->query($sql);
		$count = $query->num_rows();
		return $count;
	}
	*/

	/**
	 * 查询：根据若干条件得到记录
	 */
	/*
	public function get_where($array,$field='all')
	{
		//如果指定字段
		$field == 'all' ? '' : $this->db->select($field);
		$this->db->where($array);
		$query = $this->db->get($this->table_name);
		$result = $query->result_array();
		return $result;
	}	
	*/



	/********************************/
	/***     以下是常用操作函数     ***/
	/********************************/


	/**
	 * 新增：插入一条记录
	 */
	public function insert($data)
	{
		return $this->db->insert($this->table_name,$data);
	}

	/**
	 * 新增：插入多条记录
	 */
	/*
	public function insert_multi($datas)
	{
		$state = True;
		foreach($datas as $k=>$v){
			$state = self::insert($v);
		}
		return $state;
	}
	*/

	/**
	 * 更新：根据ID，更新一条记录
	 */
	public function update($id,$data)
	{
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->table_name, $data);
	}

	/**
	 * 删除：根据ID，删除一条记录
	 */
	public function delete($id)
	{
		$this->db->where($this->primary_key, $id);
		return $this->db->delete($this->table_name);
	}

	/**
	 * 删除：根据条件，删除多条记录
	 */
	/*
	public function delete_where($where)
	{
		if(empty($where)){
			return false;
		}
		$this->db->where($where);
		return $this->db->delete($this->table_name);
	}
	*/

}