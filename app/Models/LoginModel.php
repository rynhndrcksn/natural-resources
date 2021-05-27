<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'account';

    //Verify user exists
    public function isUser($email, $pass){

        //Connect to the DB
        $db = db_connect();

        //SQL query format
        $sql = "SELECT accountID FROM account WHERE email = :email: AND pass = :pass:";

        //Send query, store results
        $results = $db->query($sql, [
            'email'     => $email,
            'pass' => $pass
        ]);

        $row = $results->getRow();

        return isset($row);
    }

    //Verify password matches user
    public function getUser($email, $pass): User
    {
        //Connect to the DB
        $db = db_connect();

        //SQL query format
        $sql = "SELECT * FROM account WHERE email = :email: AND pass = :pass:";

        //Send query, store results
        $results = $db->query($sql, [
            'email'     => $email,
            'pass' => $pass
        ]);

        $results = $results->getResultArray()[0];

        //If results array is not empty
        if(!empty($results)){
            return new User($results['email'], $results['first'], $results['last'], $results['sid'], $results['role'],
                $results['program']);
        }
    }
}