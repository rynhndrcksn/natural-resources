<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'account';

    /**
     * This method sends a query to the database to determine if an entry exists
     * with a matching email and password.
     * @param $email
     * @param $pass
     * @return bool True if a match is found, else false
     */
    public function checkCredentials($email, $pass) :bool
    {
        //Connect to the DB
        $db = db_connect();

        //Prepare query
        $sql = "SELECT accountID FROM account WHERE email = :email: AND pass = :pass:";

        //Send query, store results
        $results = $db->query($sql, [
            'email'     => $email,
            'pass' => $pass
        ]);
        $row = $results->getRow();
        echo "TEST";

        return isset($row);
    }

    //Verify email exists
    public function emailExists($email){

        //Connect to the DB
        $db = db_connect();

        //SQL query format
        $sql = "SELECT accountID FROM account WHERE email = :email:";

        //Send query, store results
        $results = $db->query($sql, [
            'email'     => $email
        ]);
        $row = $results->getRow();

        return isset($row);
    }

    //Verify password matches user, then get and store the user info in the session
    public function getUser($email, $pass)
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT * FROM account WHERE email = :email: AND pass = :pass:";

        //Send query then store the results
        $results = $db->query($sql, [
            'email'     => $email,
            'pass' => $pass
        ]);
        $results = $results->getResultArray()[0];

        //Start a session then store the user information in it
        $session = session();
        $session->set('user', [
            'first' => $results['first'],
            'last' => $results['last'],
            'email' => $results['email'],
            'sid' => $results['sid'],
            'role' => $results['role'],
            'degreePath' => $results['degreePath'],
            'programInterests' => $results['programInterests'],
        ]);
    }
}