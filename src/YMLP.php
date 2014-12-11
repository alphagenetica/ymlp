<?php namespace Alphagenetica\YMLP;

class YMLP
{
    protected $apiKey;
    protected $username;

    public function __construct($apiKey, $username)
    {
        $this->apiKey = $apiKey;
        $this->username = $username;
    }
}