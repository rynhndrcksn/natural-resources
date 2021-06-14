<?php

namespace App\Models;

use CodeIgniter\Model;

class RegisterModel extends Model
{

    /* This method queries the database to check if an email is in use
       and returns a boolean, true if not in use, false otherwise
    */
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
        $sql = "INSERT INTO account VALUES (null, :email:, :pass:, :first:, :last:, :sid:, :degreePath:, :programOptions:, :role:)";

        //Send query then store the results
        $results = $db->query($sql, [
            'first' => $newUser['first'],
            'last' => $newUser['last'],
            'email' => $newUser['email'],
            'sid' => $newUser['sid'],
            'pass' => $newUser['pass'],
            'degreePath' => $newUser['degreePath'],
            'programOptions' => $newUser['programOptions'],
            'role' => $newUser['role']
        ]);
    }
}