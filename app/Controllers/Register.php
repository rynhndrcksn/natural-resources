<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Create Account';

        helper(['form']);
        $rules = [
            'fName' => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'Enter your first name',
                    'alpha' => 'Enter only alphabetical letters'
                ]
            ],
            'lName' => [
                'rules' => 'required|alpha',
                'errors' => [
                    'required' => 'Enter your last name',
                    'alpha' => 'Enter only alphabetical letters'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Email address required',
                    'valid_email' => 'Please enter a valid email'
                ]
            ],
            //TODO: Display SID format rules
            'sid' => [
                'rules' => 'required|numeric|exact_length[9]',
                'errors' => [
                    'required' => 'Student ID is required',
                    'numeric' => 'Student ID must only contain numbers',
                    'exact_length' => 'Invalid Student ID length'
                ]
            ],
            //TODO: Need to determine and display rules for password complexity
            'pass' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Enter a password'
                ]
            ],
            'cPass' => [
                'rules' => 'required|matches[pass]',
                'errors' => [
                    'required' => 'Please verify your password',
                    'matches' => 'Passwords do not match'
                ]
            ]

        ];

        //If POST request
        if($this->request->getMethod() === 'post'){

            //Validate input fields
            if($this->validate($rules)){

                //Create Register model
                $model = new RegisterModel();

                //TODO: Add error from checkAvail to validation rules
                //If email is not in use
                if($model->checkAvail($this->request->getPost('email'))){

                    //Send user info to Register model to add to database
                    $newUser = [
                        'first' => $this->request->getPost('fName'),
                        'last' => $this->request->getPost('lName'),
                        'email' => $this->request->getPost('email'),
                        'sid' => $this->request->getPost('sid'),
                        'pass' => $this->request->getPost('pass'),
                        'program' => 'Forestry',
                        'role' => 0
                    ];

                    $model->addUser($newUser);

                    //TODO: add either an intermediate page or delay, show user registration was successful
                    //Verify addUser was successful redirect back to login
                    if(!$model->checkAvail($newUser['email'])){
                        return redirect()->to(base_url('/login'));
                    }
                }
            }
            else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/register.php', $data);
    }
}