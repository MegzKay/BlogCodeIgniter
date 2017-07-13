<?php

class Categories extends CI_Controller{
    public function index(){
        $data['title'] = 'Categories';
        $data['categories'] = $this->category_model->get_categories();
        $this->load->view('templates/header');
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }
    public function create(){
        if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
        $data['title'] = 'Create Category';
        $this->form_validation->set_rules('name', 'Name', 'required');
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            
            $this->session->set_flashdata('category_created', 'Your category has been created');
            redirect('categories');
        }
    }
    
    public function posts($id, $offset=0){
        
        $category = $this->category_model->get_category($id);

        if(empty($category))
        {
            show_404();
        }

        $config['base_url'] = base_url().'categories/posts/'. $id;
        $config['total_rows'] = $this->post_model->get_posts_by_category_count($id);
        $config['per_page'] = 3;
        $config['uri_segment'] = 4;
        $config['attributes'] = array('class' => 'pagination-link');
        $this->pagination->initialize($config);
        
        
        $data['title'] = $category->name;
        $data['posts'] = $this->post_model->get_posts_by_category($id,$config['per_page'],$offset);
        
        $this->load->view('templates/header');
        $this->load->view('categories/posts', $data);
        $this->load->view('templates/footer');

    }
	public function edit($id)
	{
		if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
		$category = $this->category_model->get_category($id);
		
		if($this->session->userdata('user_id') != $category->user_id)
		{
			redirect('categories');
		}
		
		if(empty($category))
        {
            show_404();
        }
		$data['title'] = "Edit Category";
		$data['category'] = $category;
		$this->load->view('templates/header');
        $this->load->view('categories/edit', $data);
        $this->load->view('templates/footer');
	}
	public function update()
    {
		
        if(!$this->session->userdata('logged_in')){
            redirect('users/login');
        }
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		
        if($this->form_validation->run() === FALSE){
            redirect('categories/edit/'.$this->input->post('id'));
        } else {
            $this->category_model->update_category();
			$this->session->set_flashdata('category_updated', 'Your category has been updated');
			redirect('categories');
        }
		
        
    }
    public function delete($id){
        
        $post_exist_for_category = $this->category_model->is_category_tied_to_post($id);
        if($post_exist_for_category)
        {
            $this->session->set_flashdata('category_not_deleted', 
			'Category cannot be deleted. Posts belong to that category.');
        }
        else{
            $this->category_model->delete_category($id);
            $this->session->set_flashdata('category_deleted', 'This category has been deleted');
        }

       redirect('categories');
       
    }
}