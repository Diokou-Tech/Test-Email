<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $subject = "envoi de mail";
        $message = '<div>
            <h1>Message</h1>
            <p>
                Vous venez de recevoir un email de la part de Tech
            </p>
            </div>';
        $to = "diokoucheikhou@gmail.com"; //recipient

        $headers = array(
            "From: diokoucheikh@gmail.com",
            "Reply-To: diokoucheikh@gmail.com",
            "X-Mailer: PHP/" . PHP_VERSION
        );
        $headers = implode("\r\n", $headers);

        if (mail($subject, $message, $headers)) {
            return "mail envoyé";
        } else {
            return  " mail no send";
        }
    }
}
