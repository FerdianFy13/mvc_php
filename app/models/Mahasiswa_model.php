<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDetail($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO mahasiswa VALUES ('', :name, :nim, :major)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('major', $data['major']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>
