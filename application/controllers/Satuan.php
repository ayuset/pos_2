<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("satuan_model");
        $this->load->library('form_validation');
    }

    public function index()                                                                                                                  
    {
        $data["satuan"] = $this->satuan_model->getAll();
        $this->load->view("list_satuan", $data);
    }


    public function add()
    {
        $satuan = $this->satuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($satuan->rules());

        if ($validation->run()) {
            $satuan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('satuan');
        }

        $this->load->view("new_form_satuan");
    }

    public function edit($satuan_id = null)
    {
        if (!isset($satuan_id)) redirect('satuan');
       
        $satuan = $this->satuan_model;
        $validation = $this->form_validation;
        $validation->set_rules($satuan->rules());

        if ($validation->run()) {
            $satuan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('satuan');
        }

        $data["satuan"] = $satuan->getById($satuan_id);
        if (!$data["satuan"]) show_404();
        
        $this->load->view("edit_form_satuan", $data);
    }


    public function delete($satuan_id=null)
    {
        if (!isset($satuan_id)) show_404();
        
        if ($this->satuan_model->delete($satuan_id)) {
            redirect(site_url('satuan'));
        }
    }
}
