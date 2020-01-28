<?php

/**
 * 工厂类
 */

namespace app\controller;
use app\controller\Cla1;
/**
 * 对象工厂类
 */
class Factory {


    private static function class_conf() {
        return [
            'class1' => 'Cla1',
            'class2' => 'Cla2',
            'class3' => 'Cla3'
        ];
    }
    private function __construct() {
        
    }


    /**
     * 工厂类静态调用方法
     * @param obj $cla
     * @return int
     */
    public static function new_class($cla) {
        if (in_array($cla, self::class_conf())) {
            return new Cla1();
        } else {
           return 2;
        }
    }

}

