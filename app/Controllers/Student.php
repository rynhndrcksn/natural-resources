<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function portal()
    {
        echo view('templates/header');
        echo view('pages/studentPortal.html');
        echo view('templates/footer');

    }

    public function profile()
    {
        $data = $this->session->get('user');

        echo view('templates/header');
        echo view('pages/studentProfile.php', $data);
        echo view('templates/footer');
    }
}
