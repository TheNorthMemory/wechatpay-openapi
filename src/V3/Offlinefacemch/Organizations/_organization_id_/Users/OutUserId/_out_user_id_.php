<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch\Organizations\_organization_id_\Users\OutUserId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_user_id_
{
    /**
     * 刷脸用户信息查询接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html
     */
    public function get(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
    ]): ResponseInterface;

    /**
     * 刷脸用户信息查询接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html#async
     */
    public function getAsync(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
    ]): PromiseInterface;

    /**
     * 刷脸用户信息修改接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html
     */
    public function patch(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
        'json' => [
            'user_name' => '',
            'user_type' => 'STUDENT | STUFF',
            'student_info' => [
                'class_name' => '',
            ],
            'staff_info' => [
                'occupation' => '',
            ],
            'status' => 'NORMAL | DISABLED',
            'phone' => '',
        ],
    ]): ResponseInterface;

    /**
     * 刷脸用户信息修改接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/access-specifications.html#async
     */
    public function patchAsync(array $options = [
        'organization_id' => '',
        'out_user_id' => '',
        'json' => [
            'user_name' => '',
            'user_type' => 'STUDENT | STUFF',
            'student_info' => [
                'class_name' => '',
            ],
            'staff_info' => [
                'occupation' => '',
            ],
            'status' => 'NORMAL | DISABLED',
            'phone' => '',
        ],
    ]): PromiseInterface;
}
