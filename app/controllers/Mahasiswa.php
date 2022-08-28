<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        // echo "hallo, saya adalah $job $name";
        $data['title'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAll();

        $this->view('partials/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('partials/footer');
    }

    public function detail($id)
    {
        // echo "hallo, saya adalah $job $name";
        $data['title'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getDetail($id);

        $this->view('partials/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('partials/footer');
    }
}
?>
