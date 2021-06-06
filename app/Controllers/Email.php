<?php

    namespace App\Controllers;

    class Email extends BaseController {

        public function displayEmail() {
            $data = session('user');
            $firstName = session('user')['first'];

            $to = "allavore@mail.greenriver.edu";
            $subject = "Application Successfully Submitted";
            $message = "Hello " . $firstName  . ", \n\n" .
                        "Your application was successfully submitted for Green River's Associate of Applied Science: Forestry, Park Management, Water Quality, Wildland Fire, GIS and APP for Natural Resources Program. Please prepare for a speed interview on __/__/____ and we will see you then! \n\n" .
                        "-Natural Resources Team";


            $email = \Config\Services::email();
            $email->setFrom('allavore@mail.greenriver.edu', 'Natural Resources Team');
            $email->setTo($to);

            $email->setSubject($subject);
            $email->setMessage($message);

            if($email->send()){
                echo "Email sent!";
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }

            echo view('templates/header');
            echo view('pages/success.php');
            echo view('templates/footer');
        }

    }