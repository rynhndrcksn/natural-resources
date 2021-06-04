<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'account';

    //return student users (applicants) from table
    function getApplicants()
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT * FROM account WHERE role = :role: ORDER BY accountID DESC";

        //Send query then store the results
        $results = $db->query($sql, [
            'role' => 0
        ]);
        return $results;
    }
}