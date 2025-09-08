<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\Users\_openid_\Coupons\_coupon_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Return_
{
    /**
     * 退券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D/return
     */
    public function post(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'coupon_code' => '123446565767',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
            'out_request_no' => '34657_20250101_123456',
            'sequential_coupon_index' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 退券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D/return
     */
    public function postAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'coupon_code' => '123446565767',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
            'out_request_no' => '34657_20250101_123456',
            'sequential_coupon_index' => 0,
        ],
    ]): PromiseInterface;
}
