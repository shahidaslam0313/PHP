<?php
class Admin extends My_controller
{

  public function index()
  {
    if ($this->session->userdata('id')) {
      return redirect('admin/Welcome');
    } else {
      $this->load->view('Admin/Login');
    }
    //  $this->load->view('Admin/Login');      
  }

  public function Checklogin()
  {
    //checks if signin is validate
    if ($this->form_validation->run('Signin_rules')) {
      $uname = $this->input->post('username');
      $pass = $this->input->post('password');

      $this->load->model('Loginmodel');

      //username and password finding in database
      $login_id = $this->Loginmodel->isvalidate($uname, $pass);

      //if login ID is validate user will login and redirect to Dashboard
      if ($login_id) {
        $this->session->set_userdata('id', $login_id);
        return redirect('Admin/Welcome');
      }
      // if Login ID is not availble in database
      else {
        $this->session->set_flashdata('Login_Fialed', 'Invalid Username/Password');
        return redirect('Admin');
      }
    }
  }
  public function Welcome()
  {

    //Check if user is logged in then Login page will never display
    if (!$this->session->userdata('id')) {
      return redirect('admin/Login');
    }
    $this->load->model('Loginmodel');
    $this->load->library('pagination');

    $config = [
      'base_url' => base_url('Admin/Welcome'),
      'per_page' => 2,
      'total_rows' => $this->Loginmodel->Rows_Counter(),
    ];

    $this->pagination->initialize($config);

    $articals = $this->Loginmodel->ArticalList($config['per_page'], $this->uri->segment(3));
    $this->load->view('Admin/dashboard', ['articals' => $articals]);
  }

  // public function Login()
  // 
  // }


  public function Addarticle()
  {
    if ($this->form_validation->run('Add_article_rules')) {
      $post = $this->input->post();
      $this->load->model('Loginmodel');
      if ($this->Loginmodel->Add_articles($post)) {

        $this->session->set_flashdata('msg', 'Article Added Successfully');
        $this->session->set_flashdata('msg_class', ' alert alert-success');
      } else {
        $this->session->set_flashdata('msg', 'Faild to insert the Article');
        $this->session->set_flashdata('msg_class', 'alert alert-danger');
      }
    }
    return redirect('Admin/Welcome');
  }
  public function Insert_article()
  {
    $this->load->view('Admin/Add_Article');
  }
  public function Regester()
  {
    $this->load->view('Admin/signup');
  }

  public function signup()
  {

    if ($this->form_validation->run('Signup_rules')) {

      $post = $this->input->post();
      $this->load->model('Loginmodel');
      if ($this->Loginmodel->Signup_user($post)) {

        return redirect('Admin/index');
        $this->session->set_flashdata('msg', 'Sign up Successfully');
        $this->session->set_flashdata('msg_class', ' alert alert-success');
      } else {
        $this->session->set_flashdata('msg', 'Some error has occur');
        $this->session->set_flashdata('msg_class', 'alert alert-danger');
      }
    } else {
      $this->load->view('Admin/signup');
    }
  }

  public function Logout()
  {
    $this->session->unset_userdata('id');
    return redirect('Admin/index');
  }

  public function DelArticle()
  {

    $id = $this->input->post(id);
    $this->load->model('Loginmodel');

    if ($this->Loginmodel->DelArticle($id)) {

      $this->session->set_flashdata('msg', 'Article Deleted Successfully');
      $this->session->set_flashdata('msg_class', ' alert alert-success');
    } else {
      $this->session->set_flashdata('msg', 'Some error has occur');
      $this->session->set_flashdata('msg_class', 'alert alert-danger');
    }
    return redirect('Admin/Welcome');
  }
}
