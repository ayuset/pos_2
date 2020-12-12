<?php

class Home extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		// $this->load->model("buku_model");
	}

	public function index()
	{
        // load view admin/overview.php
        // $data["buku"] = $this->buku_model->getAll();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang'. $data['user']['email'];
        $this->load->view('home');

	}
}