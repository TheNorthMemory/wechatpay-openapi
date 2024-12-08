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
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons/%7Bcoupon_id%7D
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
     * @link https://wechatpay.im/openapi/v3/marketing/favor/users/%7Bopenid%7D/coupons/%7Bcoupon_id%7D
     */
    public function getAsync(array $options = [
        'openid' => '',
        'coupon_id' => '',
        'query' => [
            'appid' => '',
        ],
    ]): PromiseInterface;
}
