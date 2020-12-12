<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{
    private $barang = "barang";

    public $penjualan_id;
    public $penjualan_no;
    public $nama_kasir;
    public $total;

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
        $this->db->from('penjualan');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getById($penjualan_id)
    {
        return $this->db->get_where($this->penjualan, ["penjualan_id" => $penjualan_id])->row();
    }

    // public function getById($id_buku)
    // {
    //     return $this->db->get_where($this->buku, ["id_buku" => $id_buku])->row();
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->penjualan_id = uniqid();
        $this->penjualan_no = $post["penjualan_no"];
        $this->nama_kasir = $post["nama_kasir"];
        return $this->db->insert($this->penjualan, $this);
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