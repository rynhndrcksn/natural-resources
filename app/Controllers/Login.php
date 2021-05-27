<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    public function index()
    {
        if($this->request->getMethod() === 'post'){

            //TODO: Create validation method
            //Get email and pass from POST array
            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('pass');

            //Create login model to handle queries to database
            $model = new LoginModel();

            //If email and pass match an entry in database
            //TODO: isUser and getUser are redundant, need to rework or consolidate them
            if($model->isUser($email, $pass)){

                //Start a session
                $session = session();

                //Get the user info and save to session
                $session->set('user', $model->getUser($email, $pass));

                //For testing purposes
                echo "<p>".$session->get('user')->getFirst()."</p>";
                echo "<p>".$session->get('user')->getLast()."</p>";
                echo "<p>".$session->get('user')->getEmail()."</p>";
                $session->destroy();
            }
        }

        return view('pages/login.html');
    }
}