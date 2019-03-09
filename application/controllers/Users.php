<?php
  class Users extends CI_Controller{
    public function register(){
      $data['title'] = 'Sign Up';

      //VAliadtion
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
      $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_rules('password2','Password2','matches[password]');

      if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header');
        $this->load->view('users/register', $data);
        $this->load->view('templates/footer');
      }else{
        //Encryption password
        $enc_password = md5($this->input->post('password'));

        $this->user_model->register($enc_password);

        // using session to send msg for flash database
        $this->session->set_flashdata('user_registered', 'You are now Registered and can log in');

        redirect('posts');
      }
    }

    public function login(){
      $data['title'] = 'Sign In';

      //VAliadtion
      $this->form_validation->set_rules('username','Username','required');
      $this->form_validation->set_rules('password','Password','required');

      if($this->form_validation->run() == FALSE){
        $this->load->view('templates/header');
        $this->load->view('users/login', $data);
        $this->load->view('templates/footer');
      }else{

        $username = $this->input->post('username');
        $enc_password = md5($this->input->post('password'));

        $user_id = $this->user_model->login($username, $enc_password);

        if($user_id){
          // Create a SessionHandler
          $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true,
          );

          $this->session->set_userdata($user_data);

          // using session to send msg for flash database
          $this->session->set_flashdata('user_login_success', 'You are now Logged in !!');

          redirect('posts');
        }else{
          // using session to send msg for flash database
          $this->session->set_flashdata('user_login_failed', 'Invalid Credentials!!');
          redirect('users/login');
        }
      }
    }

    public function logout(){
      //Unset Session Data
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('user_id');

      // using session to send msg for flash database
      $this->session->set_flashdata('user_logout', 'You are now Logged out !!');

      redirect('users/login');
    }
    // check if username exits
    function check_username_exists($username){
      $this->form_validation->set_message('check_username_exists', 'That username is already taken !');
      if($this->user_model->check_username_exists($username)){
        return true;
      }else{
        return false;
      }
    }

    // check if username exits
    function check_email_exists($email){
      $this->form_validation->set_message('check_email_exists', 'That email is already taken !');
      if($this->user_model->check_email_exists($username)){
        return true;
      }else{
        return false;
      }
    }
  }
?>
