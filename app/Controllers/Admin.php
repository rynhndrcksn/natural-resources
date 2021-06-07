<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
	public function index()
	{
        //Instantiate LoginModel
        $model = new AdminModel();

        $data['acceptedApplicationCount'] = $model->getAcceptedApplicationCount();
        $data['waitListedApplications'] = $model->getWaitlistedApplicationCount();
        $data['rejectedApplications'] = $model->getRejectedApplicationCount();
        $data['allApplicationCount'] = $model->getAllApplicationCount();

        $data['acceptedApplications'] = $model->getAcceptedApplications();
        $data['waitListedApplications'] = $model->getWaitListedApplications();
        $data['rejectedApplications'] = $model->getRejectedApplications();
        $data['allApplications'] = $model->getAllApplications();

        echo view('pages/admin.php', $data);
        echo view('templates/footer');
    }
}
