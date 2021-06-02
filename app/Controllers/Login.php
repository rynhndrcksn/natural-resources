<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        //If request method == POST
        if($this->request->getMethod() === 'post'){

            //TODO: Create validation method for email and password
            //Get email and pass from POST array
            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('pass');

            //Instantiate LoginModel to handle login queries to database
            $model = new LoginModel();

            //If email and pass match an entry in database
            if($model->isUser($email, $pass)){

                //Get all user information and store in the session
                $model->getUser($email, $pass);

                //Redirect
                return redirect()->to('http://rrivera.greenriverdev.com/natural-resources/public/profile');
            }
        }

        return view('pages/login.html');
    }
}