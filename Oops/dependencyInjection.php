<?php

class Logger
{
    public function log($message)
    {
        echo "Logging Message :- $message";
    }
}

class userProfiles
{
    public $logger;
    public function createUser()
    {
        $this->logger->log('User Create...');
    }

    public function createUpdate()
    {
        $this->logger->log('User Update...');
    }

    public function createDelete()
    {
        $this->logger->log('User Delete...');
    }

    public function __construct($logger)
    {
        //without parameter so use $this->logger = new Logger();
        $this->logger = $logger;
    }
}

$logger = new Logger;

$user = new userProfiles($logger);
$user->createDelete();


?>