<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Facemch\Users;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _face_sid_
{
    /**
     * 查询用户授权的实名信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/android/sid.html
     */
    public function get(array $options = [
        'face_sid' => 'aabbccdd12345',
        'query' => [
            'info_type' => 'ASK_UNIONID',
            'appid' => 'wx2b029c08a6233333',
            'sub_mchid' => '123456789',
            'sub_appid' => 'wx2b029c08a6255555',
            'sub_serial_no' => 'wx2b029c08a6255555',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户授权的实名信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/android/sid.html#async
     */
    public function getAsync(array $options = [
        'face_sid' => 'aabbccdd12345',
        'query' => [
            'info_type' => 'ASK_UNIONID',
            'appid' => 'wx2b029c08a6233333',
            'sub_mchid' => '123456789',
            'sub_appid' => 'wx2b029c08a6255555',
            'sub_serial_no' => 'wx2b029c08a6255555',
        ],
    ]): PromiseInterface;
}
