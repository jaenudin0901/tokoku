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

    public function detail($id)
    {
        $data['judul']='Detail Menu';
        $data['menu'] = $this->model('Menu_model')->getMenuById($id);
        $this->view('templates/header', $data);
        $this->view('menu/detail', $data);
        $this->view('templates/footer');
    }

}