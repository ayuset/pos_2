<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() == false)
        {
            $this->load->view("login_page2.php");
        }else{
            $this->_login();
        }
        // jika form login disubmit
        if($this->input->post()){
            if($this->user_model->doLogin()) redirect(site_url('admin'));
        }

        // tampilkan halaman login
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if($user)
        {
            if(password_verify($password, $user['password']))
            {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', '<div class="alert alert-sucess" role="alert"><strong>Login Berhasil!</strong></div>');
                redirect('home');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password !</div>');
                redirect('login/index');
            }
        }else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered !</div>');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',
            ['is_unique' => 'This email has already registered !']);
        $this->form_validation->set_rules('fullname','Fullname','required|trim');
        $this->form_validation->set_rules('phone','Phone','required|trim');
        $this->form_validation->set_rules('password1','Password','required|trim|matches[password2]',
            ['matches' => 'Password dont match !']);
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');

        if($this->form_validation->run() == false)
        {
            $this->load->view('register');
        }else{
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'fullname' => htmlspecialchars($this->input->post('fullname',true)),
                'phone' => $this->input->post('phone'),
                'role' => "customer"
            ];
            $this->db->insert('user',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created.</div>');
            redirect('login/index');
        }
        
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        //$this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
            redirect('login/index');

        
        
    }
}