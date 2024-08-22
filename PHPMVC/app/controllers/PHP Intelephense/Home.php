<?php

class Home extends Controller{
    public function index(){
        $data['nama'] = 'amel';
        $data['pekerjaan'] = 'pelajar';
        $data['judul'] = 'home';
        $this->view('tempate/header', $data);
        $this->view('home/index', $data);
        $this->view('tempate/footer', $data);
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('tempate/header', $data);
        $this->view('home/page');
        $this->view('tempate/footer');
    }
}