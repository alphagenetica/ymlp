<?php namespace Alphagenetica\YMLP;

class YMLP
{
    protected $apiKey;
    protected $username;
    protected $output;

    public function __construct($apiKey, $username, $output = 'xml')
    {
        $this->apiKey = $apiKey;
        $this->username = $username;
        $this->output = $output;
    }

    /**
     * Ping the API server.
     *
     * Ping() is the simplest command, doesn't serve any useful purpose but is a great command to
     * understand this API feature and to test your API implementation.
     *
     * When you call this command, it will output "Hello!"
     *
     * @link http://www.ymlp.com/app/api_command.php?command=Ping
     * @todo Under development
     * @return string
     */
    public function ping()
    {
        return 'hello';
    }
}