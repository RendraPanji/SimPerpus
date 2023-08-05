<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // $this->db2 = \Config\Database::connect();
        // $query = $this->db2->query("SELECT * FROM buku ")->getResult();
        // var_dump($query);
        echo view('header');
        echo view('home');
        echo view('footer');

    }
}
