<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Users\_openid_\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _coupon_id_
{
    /**
     * 查询代金券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_6.shtml
     */
    public function get(array $options = [
        'openid' => '',
        'coupon_id' => '',
        'query' => [
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => '',
        'coupon_id' => '',
        'query' => [
            'appid' => '',
        ],
    ]): PromiseInterface;
}
