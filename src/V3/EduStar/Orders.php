<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduStar;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Orders
{
    /**
     * 创建核销订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/orders
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx998877665544wx',
            'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'qq' => '',
            'right_id' => 'qw3Da21QRCNt',
            'create_time' => '2018-05-23T12:13:50+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 创建核销订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/orders
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx998877665544wx',
            'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'qq' => '',
            'right_id' => 'qw3Da21QRCNt',
            'create_time' => '2018-05-23T12:13:50+08:00',
        ],
    ]): PromiseInterface;

    /**
     * 通过QQ账号查询核销订单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/orders#get
     */
    public function get(array $options = [
        'query' => [
            'appid' => 'wx998877665544wx',
            'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'qq' => '',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 通过QQ账号查询核销订单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/edu-star/orders#get
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => 'wx998877665544wx',
            'wechat_openid' => 'oUpF8uMuAJOM2pxb1Q',
            'qq' => '',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
