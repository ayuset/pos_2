<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("category_model");
        $this->load->library('form_validation');
    }

    public function index()                                                                                                                  
    {
        $data["category"] = $this->category_model->getAll();
        $this->load->view("list_category", $data);
    }


    public function add()
    {
        $category = $this->category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('category');
        }

        $this->load->view("new_form_category");
    }

    public function edit($category_id = null)
    {
        if (!isset($category_id)) redirect('category');
       
        $category = $this->category_model;
        $validation = $this->form_validation;
        $validation->set_rules($category->rules());

        if ($validation->run()) {
            $category->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('category');
        }

        $data["category"] = $category->getById($category_id);
        if (!$data["category"]) show_404();
        
        $this->load->view("edit_form_category", $data);
    }


    public function delete($category_id=null)
    {
        if (!isset($category_id)) show_404();
        
        if ($this->category_model->delete($category_id)) {
            redirect(site_url('category'));
        }
    }
}
