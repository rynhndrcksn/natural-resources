<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
	public function index()
	{
        //Instantiate LoginModel
        $model = new AdminModel();

        $data['applicants'] = $model->getApplicants();

        echo view('pages/admin.php', $data);
        echo view('templates/footer');
    }
}
