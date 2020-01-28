<?php

namespace app\controller;

use app\BaseController;
use think\Request;
use app\controller\SingleClass;
use app\controller\Factory;
use think\App;
use think\facade\Config;
use app\jback\SucErr;
use think\Exception;

class Index extends BaseController {

    public function index() {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V6<br/><span style="font-size:30px">13载初心不改 - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP6') {

        return 'hello,' . $name;
    }

    public function swoo(Request $request) {

        return 2;
    }

    public function getobj() {
        $obj1 = SingleClass::getInstance();
        $obj2 = SingleClass::getInstance();
    }

    public function useFactory() {

        throw new Exception('错误信息展示', 500);
//     return   SucErr::jSuccess(['name'=>'lucy','age'=>'19'], '返回的提示信息');
    }



}
