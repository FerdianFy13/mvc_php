<?php

class Mahasiswa extends Controller
{
    public function index($name = 'Laravel', $job = 'framework')
    {
        // echo "hallo, saya adalah $job $name";
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAll();

        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer');
    }
}
?>
