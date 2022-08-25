<?php

class About extends Controller
{
    public function index($name = 'Laravel', $job = 'framework')
    {
        // echo "hallo, saya adalah $job $name";
        $data['title'] = 'About Index';
        $data['name'] = $name;
        $data['job'] = $job;

        $this->view('partials/header', $data);
        $this->view('about/index', $data);
        $this->view('partials/footer');
    }

    public function page()
    {
        // echo 'About/page';
        $data['title'] = 'About Page';
        $this->view('partials/header', $data);
        $this->view('about/page');
        $this->view('partials/footer');
    }
}
?>
