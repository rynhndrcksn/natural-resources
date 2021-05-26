<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'account';

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

    //Validate user information
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

            //If user exists, add data to new User object and return it
            if(!empty($results)){
                return new User(results['email'], results['first'], results['last'], results['sid'], results['role'],
                    results['program']);
            }
    }
}