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

    public function insert()
    {
        // var_dump($_POST);
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('success', 'insert data', 'warning');
            header('location: ' . BASEURL . '/mahasiswa');
            exit();
        } else {
            Flasher::setFlash('failed', 'insert data', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }

    public function delete($id)
    {
        // var_dump($_POST);
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('success', 'delete data', 'warning');
            header('location: ' . BASEURL . '/mahasiswa');
            exit();
        } else {
            Flasher::setFlash('failed', 'delete data', 'danger');
            header('location: ' . BASEURL . '/mahasiswa');
            exit();
        }
    }

    public function getubah()
    {
        // echo $_POST['id'];
        echo json_encode(
            $this->model('Mahasiswa_model')->getDetail($_POST['id'])
        );
    }
}
?>
