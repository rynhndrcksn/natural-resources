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
        echo view('templates/header');
        echo view('pages/studentProfile.html');
        echo view('templates/footer');
    }
}
