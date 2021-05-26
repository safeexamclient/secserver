<?php

class Exam_model extends MY_Model
{

    protected $table_name = 'tbl_exam';

    protected $primary_key = 'exam_id';

    /**
     * 构造器
     */
    public function __construct ()
    {
        parent::__construct();
    }

    /**
     * 根据user_id，得到所有考试列表
     */    
    public function get_exams_by_userid($user_id)
    {
        $this->db->order_by('exam_id','desc');
        $this->db->where('user_id', $user_id);
        $datas = $this->db->get($this->table_name)->result_array();
        return $datas;
    }

    /**
     * 检查考试口令是否存在，返回true表示已被占用
     */
    public function check_exist_exam_key($exam_key){
        $return = false;
        //是否已被别人占用，true已被注册
        $this->db->where('exam_key',$exam_key);
        $query = $this->db->get($this->table_name);
        $result = $query->result_array();
        if($result != null){
            $return = true;
        }
        return $return;
    } 

    /**
     * 根据考试口令，得到考试信息
     */
    public function get_exam_by_key($exam_key){
        $row = null;
        $this->db->where("exam_key",$exam_key);
        $query = $this->db->get($this->table_name);
        if($query->num_rows() >0){
            $row = $query->row_array();
        }
        return $row;
    }

}
