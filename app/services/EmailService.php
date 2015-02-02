<?php

class EmailService extends Eloquent {

    public function send($view = 'default', $email) {
        Mail::send(array('emails.' . $view, 'emails.text'), $email->toArray(), function($message) use ($email) {
            $message->from("test@smak.se", "Smak")->to($email->toEmail, $email->toName)->subject($email->subject);
        });
    }

    public function sendAttachment($view = 'default', $email) {
        Mail::send(array('emails.' . $view, 'emails.text'), $email->toArray(), function($message) use ($email) {
            $message->from("test@smak.se", "Smak")->to($email->toEmail, $email->toName)->subject($email->subject)->attach($email->path);
        });
    }

    public static function signUp($toEmail, $toName) {
        // Create e-mail Object
        $email = New Static;

        // Set the e-mail data
        $email->toEmail = $toEmail;
        $email->toName = $toName;
        $email->subject = '';

        Log::info('Sign Up Email', array('To Emai' => $toEmail, 'Name' => $toName));
        // Send e-mail
        $email->send('signUp', $email);
    }

    public static function ReminderPumpOwner($toEmail, $toName, $serieNr) {
        $email = New Static;
        // Set the e-mail data
        $email->toEmail = $toEmail;
        $email->toName = $toName;
        $email->subject = '';      
    
        // Send e-mail
        $email->send('pumpregistration.reminder', $email);
    }


}
