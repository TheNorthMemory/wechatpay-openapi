<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Vehicle\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querystate
{
    /**
     * 用户状态查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/pay/querystate
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'trade_scene' => 'PARKING',
            'jump_scene' => 'H5',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'version' => '3.0',
        ],
    ]): ResponseInterface;

    /**
     * 用户状态查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/vehicle/pay/querystate
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'sign_type' => 'HMAC-SHA256',
            'trade_scene' => 'PARKING',
            'jump_scene' => 'H5',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'version' => '3.0',
        ],
    ]): PromiseInterface;
}
