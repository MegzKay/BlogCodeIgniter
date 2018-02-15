<?php

class Comment_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
	/*
	//OLD
    public function create_comment($post_id){
        $data = array(
            'username'=>$this->session->userdata('username'),
            'user_id'=>$this->session->userdata('user_id'),
            'body'=>$this->input->post('body'),
            'post_id'=>$post_id
        );
        return $this->db->insert('comments',$data);
    }
	*/
    public function get_comments($post_id){
		$this->db->order_by('id', 'DESC');
        $query = $this->db->get_where('comments', array('post_id' => $post_id));
        return $query->result_array();
    }
	public function add_comment($post_id, $parent_ID=null)
	{
		$data = array(
            'username'=>$this->session->userdata('username'),
            'user_id'=>$this->session->userdata('user_id'),
            'body'=>$this->input->post('body'),
            'post_id'=>$post_id
        );
		if($parent_ID)
		{
			echo 'ts';
			die();
			$data['parent_ID']=$parent_ID;
		}
        $this->db->insert('comments',$data);
		
		return $this->db->insert_id();

	}
	public function delete_comment($id)
	{
		$this->db->delete('comments',array('id'=>$id));
	}
	public function fetchReplies($parent_ID)
	{
		$this->db->order_by('parent_ID', 'DESC');
		$query = $this->db->get_where('comments', array('parent_ID' => $parent_ID));
		return $query->result_array();
	}
}
