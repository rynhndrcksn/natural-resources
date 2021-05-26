<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        if($this->request->getMethod() === 'post'){

            //TODO: Create validation method
            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('pass');

            $model = new LoginModel();

            if($model->isUser($email, $pass)){

                echo "TEST!!!";

                //Started the session
//                $session = session();

                //Add user to session
//                $session->set('user', $model->getUser($email, $pass));

//                var_dump($session);
            }
        }

        return view('pages/login.html');
    }
}