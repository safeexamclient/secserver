<?php

class User_model extends MY_Model
{

    protected $table_name = 'tbl_user';

    protected $primary_key = 'user_id';

    /**
     * 构造器
     */
    public function __construct ()
    {
        parent::__construct();
    }

    /**
	 * 用户登录
	 */
	public function check_signin($user_logname, $user_password_md5){
		$this->db->where('user_logname',$user_logname);
		$this->db->where('user_password',$user_password_md5);
		$this->db->from($this->table_name);
		//$sql = $this->db->get_compiled_select($this->table_name);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data;
	}

	/**
	 * 检查登录名是否已被占用，返回true表示已被占用
	 */
	public function check_exist_logname($user_logname){
		$return = false;
		//是否已被别人注册，true已被注册
		$this->db->where('user_logname',$user_logname);
		$query = $this->db->get($this->table_name);
		$result = $query->result_array();
		if($result != null){
			$return = true;
		}
		//是否是保留字
		$filter = 'www,service,support,test,home,web,company,campus,china,ceping,kaoshi,sale,sales,sec';
		$a1 = explode(',',$filter);
		$a1_len = count($a1);
		for($i = 0 ; $i < $a1_len; $i++){
			if($a1[$i] == $user_logname){
				$return = true;
			}
		}
		return $return;
	} 

	/**
	 * 检查手机号是否已被占用，返回true表示已被占用
	 */
	public function check_exist_mobile($user_mobile){
		$return = false;
		//是否已被别人注册，true已被注册
		$this->db->where('user_mobile',$user_mobile);
		$query = $this->db->get($this->table_name);
		$result = $query->result_array();
		if($result != null){
			$return = true;
		}
		return $return;
	} 

    /**
	 * 重置密码的信息核实
	 */
	public function check_forgetpw($user_logname, $user_email){
		$this->db->where('user_logname',$user_logname);
		$this->db->where('user_email',$user_email);
		$this->db->from($this->table_name);
		$query = $this->db->get();
		$data = $query->row_array();
		return $data;
	}	

}
