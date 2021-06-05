<?php

namespace App\Controllers;

use App\Models\LoginModel;


class Login extends BaseController
{
    public function index()
    {
        //If request method == POST
        if ($this->request->getMethod() === 'post') {

            //TODO: Create validation method for email and password
            //Get email and pass from POST array
            $email = $this->request->getPost('email');
            $pass = $this->request->getPost('pass');

            //Instantiate LoginModel to handle login queries to database
            $model = new LoginModel();

            //If email and pass match an entry in database
            if ($model->isUser($email, $pass)) {

                //Get all user information and store in the session
                $model->getUser($email, $pass);

                $data = $this->session->get('user');
                $role = dot_array_search('role', $data);
                //if user is an admin
                if ($role == 1) {
                    //Redirect
                    return redirect()->to(base_url('/admin'));
                }
                //if user is a student
                else if ($role == 0) {
                    //Redirect
                    return redirect()->to(base_url('/profile'));
                }
            }
        }

        return view('pages/login.php');
    }
}