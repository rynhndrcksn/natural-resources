<?php

namespace App\Controllers;


use App\Models\ApplicationModel;

class Application extends BaseController
{
    public function index()
    {

        if ($this->request->getMethod() === 'post') {

            //Instantiate ApplicationModel
            $model = new ApplicationModel();

            //TODO: Check if application is valid

            //Get user's email
            $data = $this->session->get('user');
            $email = dot_array_search('email', $data);

            //Get user's accountID
            $accountID = $model->getAccountID($email);
            $newApplication = [
                'status' => $this->request->getPost('status'),
                'degreeAudit' => $this->request->getPost('degreeAudit'),
                'unofficialTranscript' => $this->request->getPost('unofficialTranscript'),
                'statement' => $this->request->getPost('statement'),
                'evalForm' => $this->request->getPost('evalForm'),
                'accountID' => $this->request->$accountID
            ];

            $model->addApplication($newApplication);
        }

        echo view('templates/header');
        echo view('pages/studentPortal.html');
        echo view('templates/footer');
    }
}