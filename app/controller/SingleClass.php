<?php

/**
 * 单例模式，样板
 */

namespace app\controller;

/**
 * Description of SingleClass
 *
 * @author Asus
 */
class SingleClass {
    //put your code here
    /**
     *
     * @var obj instance;
     * 
     */
    private  static $instance;
    /**
     * 私有化构造函数
     */
    private function __construct() {
        
    }
    /**
     * 私有化克隆方法
     */
    private function __clone() {
        
    }
    /**
     * 私有化反序列化，反序列化能够获取到对象实例
     */
    private function __wakeup() {
        
    }
    public static function getInstance() {
        
    
        
       if(!(static::$instance instanceof  static)){
           static::$instance=new static;
       }
       return static::$instance;
    }
}
