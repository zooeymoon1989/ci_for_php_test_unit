<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/14
 * Time: 下午3:54
 */

namespace DesignPatterns\Structural\DependencyInjection;

class DatabaseConfiguration{

    private $host;

    private $port;

    private $username;

    private $password;

    /**
     * DatabaseConfiguration constructor.
     * @param $host
     * @param $port
     * @param $username
     * @param $password
     */
    public function __construct($host, $port, $username, $password)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }




}