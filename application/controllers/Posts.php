<?php
  class Posts extends CI_Controller{
    public function index(){
      $data['title'] = 'Latest Posts';

      $data['posts'] = $this->post_model->get_posts();

      $this->load->view('templates/header');
      $this->load->view('posts/index', $data);
      $this->load->view('templates/footer');

    }

    public function view($slug = NULL){
      $data['post'] = $this->post_model->get_posts($slug);
      $post_id = $data['post']['id'];
      $data['comments'] = $this->comment_model->get_comments($post_id);

      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = $data['post']['tiitle'];

      $this->load->view('templates/header');
      $this->load->view('posts/view', $data);
      $this->load->view('templates/footer');

    }

    public function create(){
      $data['title'] = 'Create Posts';
      $data['categories'] = $this->post_model->get_categories();
      // Rules for form validation_errors
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('body', 'Body', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('posts/create', $data);
        $this->load->view('templates/footer');
      }else{
        // upload image_type_to_extension
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '1000';
        $config['max_height'] = '1000';
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload()){
          $error = array('error' => $this->upload->display_errors());
          $post_image = 'noimage.png';
        }else{
          $data = array('upload_data' => $this->upload->data());
          $post_image = $_FILES['userfile']['name'];
        }

        $this->post_model->create_post($post_image);
        // $this->load->view('posts/success');
        redirect('posts');
      }
    }
    public function delete($id){
      $this->post_model->delete_post($id);
      redirect('posts');
    }
    public function edit($slug){
      $data['post'] = $this->post_model->get_posts($slug);
      $data['categories'] = $this->post_model->get_categories();
      if(empty($data['post'])){
        show_404();
      }

      $data['title'] = 'Edit Posts';

      $this->load->view('templates/header');
      $this->load->view('posts/edit', $data);
      $this->load->view('templates/footer');
    }
    public function update(){
      $this->post_model->update_post();
      redirect('posts');
    }
  }

?>
