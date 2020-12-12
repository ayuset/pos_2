<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model
{
    private $category = "category";

    public $category_id;
    public $category_name;

    public function rules()
    {
        return [
            ['field' => 'category_name',
            'label' => 'Category',
            'rules' => 'required'],

            ['field' => 'qty',
            'label' => 'Qty',
            'rules' => 'numeric'],
            
             ['field' => 'harga_buku',
            'label' => 'Harga',
            'rules' => 'numeric'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->category)->result();
    }

    public function tampil_data()
    {  
        $query = $this->db->get($this->category);
        return $query;
    }
 
    
    public function getById($category_id)
    {
        return $this->db->get_where($this->category, ["category_id" => $category_id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->category_id = uniqid();
        $this->category_name = $post["category_name"];
        return $this->db->insert($this->category, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->category_id = $post["category_id"];
        $this->category_name = $post["category_name"];
        return $this->db->update($this->category, $this, array('category_id' => $post['category_id']));
    }




    public function delete($category_id)
    {
        return $this->db->delete($this->category, array("category_id" => $category_id));
    }
}