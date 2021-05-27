<?php

namespace App\Controllers;

class Student extends BaseController
{
    public function portal()
    {
        return view('pages/studentPortal.html');

    }

    public function profile()
    {
        return view('pages/studentProfile.html');

    }
}
