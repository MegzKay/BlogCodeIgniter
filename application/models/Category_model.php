<?php

class Category_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function get_categories(){
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->result_array();
    }
    public function create_category(){
        $data = array(
            'name' => $this->input->post('name'),
            'user_id' => $this->session->userdata('user_id')
        );
        return $this->db->insert('categories', $data);
    }
    
    public function get_category($id){
        $query = $this->db->get_where('categories', array('id' => $id));
		return $query->row();
    }
    public function delete_category($id){
        $this->db->delete('categories',array('id', $id));
        return true;
    }
	public function update_category()
	{
		$data = array(
            'name' => $this->input->post('name'),
        );
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('categories', $data);
	}
    public function is_category_tied_to_post($id)
    {
        $result = $this->db->where('posts',array('category_id', $id));
        if(!empty($result)){
            return true;
        }
        else{
            return false;
        }
    }

}