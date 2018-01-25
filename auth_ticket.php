<?php

class MediasiteApiClient
{
    /*
    //property declarations
    public $sfapikey;
    public $username;
    public $password;
    public $hostname;
    public $rootVirtualDir;
    public $scheme;
    public $port;
*/
    public function MediasiteApiClient ($_scheme, $_hostname, $_rootVirtualDir, $_port, _$apikey, $_username, $_password) {
        $this->$sfapikey = $_apikey;
        $this->$username = $_username;
        $this->$password = $_password;
        $this->$hostname = $_hostname;
        $this->$rootVirtualDir = $_rootVirtualDir;
        $this->$scheme = $_scheme.toLowerCase();
        $this->$port = $_port;
    }
}

class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}



?>