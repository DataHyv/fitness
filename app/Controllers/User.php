<?php

namespace App\Controllers;

class User extends \CodeIgniter\Controller{
    
    public function dashboard()
    {
        $data['page_title'] = 'Dashboard';
        $indicator['navbar'] = 'active';
        echo view("user/template/dashboard_header",$data);
        echo view("user/template/dashboard_nav",$indicator);
        echo view("user/pages/dashboard");
        echo view("user/template/dashboard_footer");
        
    }
    public function task()
    {
        $data['page_title'] = 'Task';
        echo view("user/template/dashboard_header",$data);
        echo view("user/template/dashboard_nav");
        echo view("user/pages/task");
        echo view("user/template/dashboard_footer");
    }
    public function logout()
    {
        $data['page_title'] = 'Task';
        echo view("site/template/header",$data);
        echo view("site/template/nav");
        echo view("site/pages/loginpage");
        echo view("site/template/footer");
    }
}
