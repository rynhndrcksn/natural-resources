<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Model;


class Login extends BaseController
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Login';


        helper(['form']);
        $rules = [
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email address required',
                    'valid_email' => 'Please enter a valid email address'
                ]
            ],
            'pass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Please enter your password'
                ]
            ]
        ];


        //If request method == POST
        if ($this->request->getMethod() === 'post') {

            //If email and pass are valid
            if($this->validate($rules)){

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
            //Email and pass not valid
            else{
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/login.php', $data);
    }
}