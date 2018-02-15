<?php

class Comments extends CI_Controller{
	
    
	//OLD
	/*public function create($post_id){
        $slug = $this->input->post('slug');
        
        $data['post'] = $this->post_model->get_posts($slug);

        $this->form_validation->set_rules('body','Body','required');
        
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->comment_model->create_comment($post_id);
            redirect('posts/'.$slug);
        }
    }*/
	public function add_comment($post_id)
	{
		$newid = $this->comment_model->add_comment($post_id);
		if($newid) echo $newid;
		else echo 0;
	}
	public function delete_comment($id)
	{
		$this->comment_model->delete_comment($id);
	}

	 /*
     * Function: reply_comment
     * Purpose: This controller is responsible for linking a new comment to an older
     * Params:  $parent_ID: The comment to reply to
     * Return: none
     */
	public function reply_comment($post_id, $parent_ID)
	{
		//make a new comment, and add replied_ID with the id of the
	}
    
}