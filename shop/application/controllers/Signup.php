<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function index()
    {

        if ($this->form_validation->run('Signup_rules')) {

            $post = $this->input->post();
            unset($post['confirm_password']);
            $this->load->model('Signup_Model');
            if ($this->Signup_Model->Signup_user($post)) {

                return redirect('Signup/success');
                // $this->session->set_flashdata('msg', 'Sign up Successfully');
                // $this->session->set_flashdata('msg_class', ' alert alert-success');
            } else {
                return redirect('Signup/fails');
                // $this->session->set_flashdata('msg', 'Some error has occur');
                // $this->session->set_flashdata('msg_class', 'alert alert-danger');
            }
        } else {
            return redirect('Signup/signup_rules_faild');
        }
    }

    public function success()
    {

        echo "Signup success";
    }

    public function fails()
    {
        echo "Signup Faild";
    }
    public function signup_rules_faild()
    {
        echo "signup_rules_faild";
    }
}
