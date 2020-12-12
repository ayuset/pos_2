<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_model extends CI_Model
{
    private $satuan = "satuan";

    public $satuan_id;
    public $satuan_name;

    public function rules()
    {
        return [
            ['field' => 'satuan_name',
            'label' => 'Satuan',
            'rules' => 'required'],];
    }

    public function getAll()
    {
        return $this->db->get($this->satuan)->result();
    }

    public function tampil_data()
    {  
        $query = $this->db->get($this->satuan);
        return $query;
    }
 
    
    public function getById($satuan_id)
    {
        return $this->db->get_where($this->satuan, ["satuan_id" => $satuan_id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->satuan_id = uniqid();
        $this->satuan_name = $post["satuan_name"];
        return $this->db->insert($this->satuan, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->satuan_id = $post["satuan_id"];
        $this->satuan_name = $post["satuan_name"];
        return $this->db->update($this->satuan, $this, array('satuan_id' => $post['satuan_id']));
    }




    public function delete($satuan_id)
    {
        return $this->db->delete($this->satuan, array("satuan_id" => $satuan_id));
    }
}