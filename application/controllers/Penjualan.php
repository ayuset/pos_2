<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("penjualan_model");
        $this->load->model('barang_model');
        $this->load->library('form_validation');
    }

    public function index()                                                                                                                  
    {
        $data["penjualan"] = $this->penjualan_model->getAll();
        $this->load->view("list_penjualan", $data);
    }


    public function add()
    {
        $penjualan = $this->penjualan_model;
        $validation = $this->form_validation;
        $validation->set_rules($penjualan->rules());

        if ($validation->run()) {
            $penjualan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('penjualan');
        }
        $this->data['all_barang'] = $this->barang_model->getAll();

        $this->load->view("new_form_penjualan", $this->data);
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
