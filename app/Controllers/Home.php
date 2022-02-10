<?php

// namespace App\Controllers;

// class Home extends BaseController
// {
//     public function index()
//     {
//         return view('site/index');
//         echo view("template/header");
//     }
// }

namespace App\Controllers;

class Home extends \CodeIgniter\Controller{
    
    public function index()
    {
        $data['page_title'] = 'Home';
        echo view("template/header",$data);
        echo view("template/nav");
        echo view("site/index");
        echo view("template/footer");
    }
    public function loginpage()
    {
        $data['page_title'] = 'Log-in';
        echo view("template/header",$data);
        echo view("template/nav");
        echo view("site/loginpage");
        echo view("template/footer");
    }
    public function signup()
    {
        $data['page_title'] = 'Sign-up';
        echo view("template/header",$data);
        echo view("template/nav");
        echo view("site/signup");
        echo view("template/footer");
    }
}
