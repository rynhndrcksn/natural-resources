<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    /**
     * This method will query the database for a account entry matching an email.  If a result is found,
     * it will then compare the pass parameter with the hashed password returned by the query.
     * @param $email
     * @param $pass
     * @return bool True if a match is found, else false
     */
    public function checkCredentials($email, $pass) :bool
    {
        //Connect to the database
        $db = db_connect();

        //Prepare query
        $sql = "SELECT * FROM account WHERE email = :email:";

        //Send query, store results
        $results = $db->query($sql, [
            'email'     => $email
        ]);
        $row = $results->getResultArray()[0];

        //Verify result is not empty
        if(is_array($row)){
            //Verify input parameter pass === hashed password in database
            return password_verify($pass, $row['pass']);
        }

        return false;
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

        $newUser['pass'] = password_hash($newUser['pass'], PASSWORD_DEFAULT);

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