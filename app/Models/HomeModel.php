<?php

namespace App\Models;

use App\Libraries\User;
use CodeIgniter\Model;

class HomeModel extends Model
{
    /**
     * This method sends a query to the database to determine if an entry exists
     * with a matching email and password.  If the result is empty, there is no
     * matching database entry.
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

        return isset($row);
    }

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

    public function checkAvail($email)
    {
        //Connect to the DB, build query
        $db = db_connect();
        $sql = "SELECT accountID FROM account WHERE email = :email:";

        //Send query then store the results
        $results = $db->query($sql, [
            'email' => $email
        ]);
        $results = $results->getResultArray();

        return empty($results);
    }

    public function addUser($newUser){

        //Connect to the DB, build query
        $db = db_connect();
        $sql = "INSERT INTO account VALUES (null, :email:, :pass:, :first:, :last:, :sid:, :degreePath:, :programInterests:, :role:)";

        //Send query then store the results
        $results = $db->query($sql, [
            'first' => $newUser['first'],
            'last' => $newUser['last'],
            'email' => $newUser['email'],
            'sid' => $newUser['sid'],
            'pass' => $newUser['pass'],
            'degreePath' => $newUser['degreePath'],
            'programInterests' => $newUser['programInterests'],
            'role' => $newUser['role']
        ]);
    }
}