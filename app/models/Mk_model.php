<?php

class Mk_model
{
    private $table = 'mata_kuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMk()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMkById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMk($data)
    {
        $query = "INSERT INTO mata_kuliah
                    VALUES
                  (null, :nama_mk, :kode_mk, :sks, :smt)";

        $this->db->query($query);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('smt', $data['smt']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMk($id)
    {
        $query = "DELETE FROM mata_kuliah WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataMk($data)
    {
        $query = "UPDATE mata_kuliah SET
                    nama_mk = :nama_mk,
                    kode_mk = :kode_mk,
                    sks = :sks,
                    smt = :smt
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('smt', $data['smt']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataMk()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mata_kuliah WHERE nama_mk LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
