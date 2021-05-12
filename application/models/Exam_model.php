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

}
