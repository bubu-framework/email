<?php

namespace Bubu\Mail;

class MailTemplate
{
    public static function emailVerification(string $emailCode): string
    {
            return <<<HTML
                <html>
                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    </head>
                    <body>
                        <p>
                            Follow the link for validate email address 
                            <a href="http://{$_SERVER['SERVER_NAME']}/validEmail?code={$emailCode}">
                            http://{$_SERVER['SERVER_NAME']}/validEmail?code={$emailCode}
                            </a>
                        </p>
                        <p>Thank's!</p>
                    </body>
                </html>
            HTML;
    }

    public static function sendEmailVerification(string $email, string $emailCode)
    {
        Mail::send(
            $email,
            'Verification code',
            self::emailVerification($emailCode)
        );
    }
}
