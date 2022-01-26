<?php 

class Menu extends Controller {

    public function index()
    {
        $data['judul']='Daftar Ikan';
        $data['menu'] = $this->model('Menu_model')->getAllMenu();
        $this->view('templates/header', $data);
        $this->view('menu/index', $data);
        $this->view('templates/footer');
    }

}