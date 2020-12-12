<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $barang = "barang";

    public $id_barang;
    public $kode_barang;
    public $nama_barang;
    public $harga;
    public $stock;
    public $category_id;
    public $satuan_id;

    public function rules()
    {
        return [
            ['field' => 'kode_barang',
            'label' => 'Kode Barang',
            'rules' => 'required'],

            ['field' => 'nama_barang',
            'label' => 'Nama Barang',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'required'],

            ['field' => 'stock',
            'label' => 'Stock',
            'rules' => 'numeric'],
        ];
    }

    public function getAll()
    {
        $this->db->select ("*");
        $this->db->from('barang');
        $this->db->join('category', 'category.category_id = barang.category_id', 'inner');
        $this->db->join('satuan', 'satuan.satuan_id = barang.satuan_id');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($id_barang)
    {
        return $this->db->get_where($this->buku, ["id_barang" => $id_barang])->row();
    }

    // public function getById($id_buku)
    // {
    //     return $this->db->get_where($this->buku, ["id_buku" => $id_buku])->row();
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->id_barang = uniqid();
        $this->kode_barang = $post["kode_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->harga = $post["harga"];
        $this->stock = $post["stock"];
        $this->category_id = $post["category"];
        $this->satuan_id = $post["satuan"];
        return $this->db->insert($this->barang, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_barang = $post["id_barang"];
        $this->kode_barang = $post["kode_barang"];
        $this->nama_barang = $post["nama_barang"];
        $this->harga = $post["harga"];
        $this->stock = $post["stock"];
        $this->category_id = $post["category"];
        $this->satuan_id = $post["satuan"];
        return $this->db->update($this->barang, $this, array('id_barang' => $post['id_barang']));
    }




    public function delete($id_barang)
    {
        return $this->db->delete($this->barang, array("id_barang" => $id_barang));
    }
}