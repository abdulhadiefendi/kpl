<?php
class M_produk extends CI_Model
{
    public $table = 'tbl_produk p';
    public function getAll($where = null,$like = null)
    {
        if ($like != null) {
            $this->db->like($like);
        }
        if ($where != null) {
            $this->db->where($where);
        }
        $this->db->join('tbl_kategori k','p.idKategori=k.idKategori');
        $this->db->join('tbl_subkategori sk','p.idSubKategori=sk.idSubKategori');
    
        return $this->db->get($this->table);
        
    }

    public function rekap()
    {
        $this->db->select('*,(SELECT count(*) from tbl_kategori kr,tbl_produk as ps where kr.idKategori=k.idKategori and kr.idKategori=ps.idKategori) as jml,(SELECT count(*) from tbl_subkategori sr,tbl_produk as psr where sr.idSubKategori=sk.idSubKategori and sr.idSubKategori=psr.idSubKategori and psr.idKategori=k.idKategori) as sub');
        $this->db->join('tbl_kategori k','p.idKategori=k.idKategori');
        $this->db->join('tbl_subkategori sk','p.idSubKategori=sk.idSubKategori');
        $this->db->order_by('k.idKategori,sk.idSubKategori');
        return $this->db->get($this->table);
    }

    public function grafik(){
        $this->db->select('*,count(p.idKategori) as jml');
        $this->db->join('tbl_kategori k','p.idKategori=k.idKategori');
        $this->db->group_by('k.idKategori');
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
