<?php 

class Menu_model{
    
    private $table ='menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMenu()
    {
        $this->db->query('SELECT * FROM '. $this->table);
        
        return $this->db->resultSet();
    }
   
    public function getMenuById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);

        return $this->db->single();
    }

}