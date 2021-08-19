<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Model;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        //Set Page Title
        $data['title'] = 'Login';

        //Set validation rules
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

        //If POST
        if ($this->request->getMethod() === 'post')
        {
            //Validate email and password with ruleset
            if($this->validate($rules)){
                //Verify login credentials
                $login = new LoginModel();
                $email = $this->request->getPost('email');
                $pass = $this->request->getPost('pass');

                if($login->checkCredentials($email, $pass)){
                    //TODO: SETUP SESSION AND REDIRECT
                    //Set user information to SESSION
                    $userData = $login->getUser($email, $pass);

                    //Redirect to appropriate view

                }
                //Invalid credentials
                else{
                    $data['errorCredentials'] = "The email and/or password you entered are incorrect, please try again.";
                }
            }
            //Email and/or password are not valid
            else{
                //Add validation object to data array to retrieve error messages in view for display
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/login.php', $data);
    }
}

////If request method == POST
//if ($this->request->getMethod() === 'post') {
//
//    //If email and pass are valid
//    if($this->validate($rules)){
//
//        //Get email and pass from POST array
//        $email = $this->request->getPost('email');
//        $pass = $this->request->getPost('pass');
//
//        //Instantiate LoginModel to handle login queries to database
//        $model = new LoginModel();
//
//        //If email and pass match an entry in database
//        if ($model->checkCredentials($email, $pass)) {
//
//            //Get all user information and store in the session
//            $model->getUser($email, $pass);
//
//            $data = $this->session->get('user');
//            $role = dot_array_search('role', $data);
//            //if user is an admin
//            if ($role == 1) {
//                //Redirect
//                return redirect()->to(base_url('/admin'));
//            }
//            //if user is a student
//            else if ($role == 0) {
//                //Redirect
//                return redirect()->to(base_url('/profile'));
//            }
//        }
//        else {
//            //if email is invalid
//            if(!$model->emailExists($email)) {
//                $data['validateEmail'] = 'The email you entered does not belong to any account';
//            }
//            //if pass for valid email is invalid
//            else if($model->emailExists($email) && !$model->checkCredentials($email, $pass)) {
//                $data['validatePass'] = 'The password you entered is incorrect.
//                        Try again or ';
//            }
//        }
//    }
//
//    //Email and pass not valid
//    $data['validation'] = $this->validator;
//
//}