<?php

namespace App\Controllers;

use App\Models\RegisterModel;

class Register extends BaseController
{
    public function index()
    {

        if($this->request->getMethod() === 'post'){
            //TODO: possibly add model instantiation to base controller?
            $model = new RegisterModel();

            //If email is not in use
            if($model->checkAvail($this->request->getPost('email'))){

                //TODO: add validation for all input fields

                //Send user info to register model to add to database
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

                //Verify addUser was successful
                if(!$model->checkAvail($newUser['email'])){

                    //Redirect back to login
                    return redirect()->to(base_url('/login'));
                }
            }
        }

        return view('pages/register.php');
    }
}