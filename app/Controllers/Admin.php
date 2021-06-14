<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function index()
    {
        //get user session data
        $userData = $this->session->get('user');
        $adminName = dot_array_search('first', $userData) . " " . dot_array_search('last', $userData);
        $data['adminName'] = $adminName;

        //Instantiate LoginModel
        $model = new AdminModel();

        $data['acceptedApplicationCount'] = $model->getAcceptedApplicationCount();
        $data['waitListedApplicationCount'] = $model->getWaitListedApplicationCount();
        $data['rejectedApplicationCount'] = $model->getRejectedApplicationCount();
        $data['allApplicationCount'] = $model->getAllApplicationCount();

        $data['acceptedApplications'] = $model->getAcceptedApplications();
        $data['waitListedApplications'] = $model->getWaitListedApplications();
        $data['rejectedApplications'] = $model->getRejectedApplications();
        $data['allApplications'] = $model->getAllApplications();

        echo view('pages/admin.php', $data);
        echo view('templates/footer');
    }
}
