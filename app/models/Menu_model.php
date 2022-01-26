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
        
        return $this->db->returnSet();
    }
   
    private $menu= [
        [
            "jenis_ikan" => "Baronang",
            "gambar" => "baronang.jpg",
        ],
        [
            "jenis_ikan" => "kerapu",
            "gambar" => "kerapu.jpg",
        ],
        [
            "jenis_ikan" => "kudukudu",
            "gambar" => "kudukudu.jpg",
        ],
        [
            "jenis_ikan" => "Bawal",
            "gambar" => "Bawal.jpg",
        ],

    ];


}