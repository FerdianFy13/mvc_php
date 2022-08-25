<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
} ?>

<!-- class ini merupakan class utama yang akan mengatur pada folder controller yang akan melakukan extend pada Class Controler -->