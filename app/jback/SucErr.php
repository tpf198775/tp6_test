<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\jback;

/**
 * 友好反馈
 */
class SucErr {

    /**
     * 
     * @param mixed $data 返回数据
     * @param string $message 返回提示信息
     * @param 状态码 $code 返回状态码
     * @param 状态 $status 状态
     */
    public static function jSuccess($data = '', $message = '', $code = 200, $status = 'success') {
        return json(
        [
        'data' => $data,
        'message' => $message,
        'code' => $code,
        'status' => $status
        ]
        );
    }

}
