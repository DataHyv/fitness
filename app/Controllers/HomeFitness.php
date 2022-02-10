<?php

namespace App\Controllers;

class HomeFitness extends \CodeIgniter\Controller{
    public function index()
    {
        echo view("template/header");
        echo view("site/index");
    }
}