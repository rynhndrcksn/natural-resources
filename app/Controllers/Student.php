<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function profile()
    {
        $data = $this->session->get('user');

        echo view('templates/header');
        echo view('pages/studentProfile.php', $data);
        echo view('templates/footer');
    }
}
