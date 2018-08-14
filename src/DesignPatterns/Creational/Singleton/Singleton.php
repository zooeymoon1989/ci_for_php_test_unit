<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2018/8/14
 * Time: 下午6:13
 */

namespace DesignPatterns\Creational\Singleton;

final class Singleton{

    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * Singleton constructor.
     * 不允许外部调用，这个可以阻止创建多个实例
     * 如果想要使用实例，那么需要使用静态方法Singleton::getInstance()来获得实例
     */
    private function __construct()
    {
    }


    /**
     * 通过延时加载来获得事例
     * @return Singleton
     */
    public static function getInstance()
    {

        if(null == static::$instance){
            static::$instance = new static();
        }

        return static::$instance;

    }

    /**
     * 防止被反序列化
     */
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * 防止实例被克隆
     * @return mixed
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }


}