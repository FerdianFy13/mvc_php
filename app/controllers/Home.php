<?php

class Home extends Controller
{
    public function index()
    {
        // echo 'home/index';
        $data['title'] = 'Home';
        $data['name'] = $this->model('User_model')->getUser();
        $this->view('partials/header', $data);
        $this->view('home/index', $data);
        $this->view('partials/footer');
    }
}
?>
