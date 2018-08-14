<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/14
 * Time: 下午3:59
 */

namespace DesignPatterns\Structural\DependencyInjection;

class DatabaseConnection{

    private $configuration;

    /**
     * DatabaseConnection constructor.
     * @param $configuration
     */
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }


    public function getDsn()
    {

        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );

    }


}