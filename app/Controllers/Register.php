<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [];
        $data['title'] = 'Create Account';

        $data['degreeOptions'] = [
            'Natural Resources Forestry A.A.S.',
            'Natural Resources A-PP (for transfer students)'
        ];

        $data['programOptions'] = [
            'Forestry',
            'Wildland Fire',
            'GIS',
            'Water Quality',
            'Park Management'
        ];

        helper(['form']);
        $rules = [
            'degreeOptions' => [
                'rules' => 'required|in_list[Natural Resources Forestry A.A.S., Natural Resources A-PP (for transfer students)]',
                'errors' => [
                    'required' => 'Please choose a degree path',
                    'in_list' => 'Please choose a degree path'
                ]
            ],

            'fName' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Enter your first name',
                    'alpha_space' => 'Enter only alphabetical letters'
                ]
            ],
            'lName' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Enter your last name',
                    'alpha_space' => 'Enter only alphabetical letters'
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