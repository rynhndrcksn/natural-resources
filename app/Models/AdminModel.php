<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'account';

    //return student users (applicants) from table
    function getAllApplications()
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

    function getAcceptedApplications()
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT account.* FROM account, application, applicant WHERE account.accountID = applicant.accountID AND 
                    applicant.applicantID = application.applicantID AND account.role = :role: AND 
                    application.applicationStatus = :applicationStatus: ORDER BY account.accountID DESC";

        //Send query then store the results
        $results = $db->query($sql, [
            'role' => 0,
            'applicationStatus' => 'A'
        ]);

        return $results;
    }

    function getWaitListedApplications()
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT * FROM account, application, applicant WHERE account.accountID = applicant.accountID AND 
                    applicant.applicantID = application.applicantID AND account.role = :role: AND 
                    application.applicationStatus = :applicationStatus: ORDER BY account.accountID DESC";

        //Send query then store the results
        $results = $db->query($sql, [
            'role' => 0,
            'applicationStatus' => 'W'
        ]);

        return $results;
    }

    function getRejectedApplications()
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT * FROM account, application, applicant WHERE account.accountID = applicant.accountID AND 
                    applicant.applicantID = application.applicantID AND account.role = :role: AND 
                    application.applicationStatus = :applicationStatus: ORDER BY account.accountID DESC";

        //Send query then store the results
        $results = $db->query($sql, [
            'role' => 0,
            'applicationStatus' => 'R'
        ]);

        return $results;
    }
}