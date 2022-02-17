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
        echo view("site/template/header",$data);
        echo view("site/template/nav");
        echo view("site/pages/index");
        echo view("site/template/footer");
    }
    public function loginpage()
    {
        $data['page_title'] = 'Log-in';
        echo view("site/template/header",$data);
        echo view("site/template/nav");
        echo view("site/pages/loginpage");
        echo view("site/template/footer");
    }
    public function signup()
    {
        $data['page_title'] = 'Sign-up';
        echo view("site/template/header",$data);
        echo view("site/template/nav");
        echo view("site/pages/signup");
        echo view("site/template/footer");
    }
    // public function dashboard()
    // {
    //     echo view("user/template/dashboard_header");
    //     echo view("user/template/dashboard_nav");
    //     echo view("user/pages/dashboard");
    //     echo view("user/template/dashboard_footer");
    // }
}
