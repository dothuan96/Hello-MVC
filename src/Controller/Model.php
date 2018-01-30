<?php
namespace App\Controller;

class Model
{
    private $message;
    public function __construct()
    {
        $this->message = 'Hello World!';
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
