<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Contract
{
    /**
     * 通过用户标识查询用户状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_1.shtml
     */
    public function get(array $options = [
        'openid' => 'onqOjjmM1tad-3ROpncN-yUfa6ua',
        'query' => [
            'sub_mchid' => '1900000109',
            'trade_scene' => 'CHARGE',
        ],
    ]): ResponseInterface;

    /**
     * 通过用户标识查询用户状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_1.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => 'onqOjjmM1tad-3ROpncN-yUfa6ua',
        'query' => [
            'sub_mchid' => '1900000109',
            'trade_scene' => 'CHARGE',
        ],
    ]): PromiseInterface;
}
