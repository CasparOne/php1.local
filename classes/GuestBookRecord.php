<?php

class GuestBookRecord
{
    /**
     * @var string $message
     */
    protected $message;

    /**
     * GuestBookRecord constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

}

