<?php

namespace App;

use Mail;

class PostCardSendingService
{
    private $country;

    private $width;

    private $height;

    public function __construct($country, $width, $height)
    {
        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email)
    {
        Mail::raw($message, function ($message) use ($email) {
            /** @var Mail $message */
            $message->to($email);
        });

        dump('Postcard was sent with the message: '.$message);
    }
}
