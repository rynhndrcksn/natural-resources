<?php

namespace App\Models;


use CodeIgniter\Model;

class ApplicationModel extends Model
{
    //Add application to db
    public function addApplication($newApplication){

        //Connect to the DB, build query
        $db = db_connect();
        $sql = "INSERT INTO application (`applicationStatus`, `degreeAudit`, `unofficialTranscript`, `personalStatement`, `evaluationForm`, `applicantID`, `accountID`)
VALUES (null, :applicationStatus:, :degreeAudit:, :unofficalTranscript:, :personalStatement:, :evaluationForm:, :applicantID:, :accountID:)";

        //Send query then store the results
        $results = $db->query($sql, [
            'applicationStatus' => $newApplication['status'],
            'degreeAudit' => $newApplication['degreeAudit'],
            'unofficialTranscript' => $newApplication['unofficialTranscript'],
            'personalStatement' => $newApplication['statement'],
            'evaluationForm' => $newApplication['evalForm'],
            'accountID' => $newApplication['accountID']
        ]);
    }

    //get student's accountID
    public function getAccountID($email) {
        //Connect to the DB, build query
        $db = db_connect();

            $sql = "SELECT accountID FROM account WHERE email = :email:";

            //Send query then store the results
            $results = $db->query($sql, [
                'email' => $email
            ]);
            return $results;
    }
}