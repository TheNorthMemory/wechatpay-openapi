<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PreSendCouponBundle
{
    /**
     * 向用户预发放商品券批次组(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/pre-send-coupon-bundle
     */
    public function post(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_bundle_id' => '100232301',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
        ],
    ]): ResponseInterface;

    /**
     * 向用户预发放商品券批次组(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/pre-send-coupon-bundle
     */
    public function postAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_bundle_id' => '100232301',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
        ],
    ]): PromiseInterface;
}
