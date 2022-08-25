<?php

class Home extends Controller
{
    public function index()
    {
        // echo 'home/index';
        $data['title'] = 'Home';

        $this->view('partials/header', $data);
        $this->view('home/index');
        $this->view('partials/footer');
    }
}
?>
