<?php


namespace App\Exceptions;


use Exception;

class ExceptionLogger extends Exception
{
    protected $message;
    protected $code = 0;
    protected $file;
    protected $line;

    public function __construct($exception)
    {
        $this->message = $exception->message;
        $this->code = $exception->code;
        $this->file = $exception->file;
        $this->line = $exception->line;
    }
}
