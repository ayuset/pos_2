<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("barang_model");
        $this->load->model("category_model");
        $this->load->model("satuan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["barang"] = $this->barang_model->getAll();
        $data["category"] = $this->category_model->getAll();
        $data["satuan"] = $this->satuan_model->getAll();
        $this->load->view("list_barang",$data);
    }


    public function add()
    {
        $barang = $this->barang_model;
        $data["category"] = $this->category_model->getAll();
        $data["satuan"] = $this->satuan_model->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('barang');

        }

        $this->load->view("new_form_barang",$data);
    }

    public function edit($id_barang = null)
    {
        if (!isset($id_barang)) redirect('barang');
       
        $barang = $this->barang_model;
        $data["category"] = $this->category_model->getAll();
        $data["satuan"] = $this->satuan_model->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($barang->rules());

        if ($validation->run()) {
            $barang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('barang');
        }

        $data["barang"] = $barang->getById($id_barang);
        if (!$data["barang"]) show_404();
        
        $this->load->view("edit_form", $data);
    }


    public function delete($id_barang=null)
    {
        if (!isset($id_barang)) show_404();
        
        if ($this->barang_model->delete($id_barang)) {
            redirect(site_url('barang'));
        }
    }
}
