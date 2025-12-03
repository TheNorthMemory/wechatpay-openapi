<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CouponBundles\_user_coupon_bundle_id_ $_user_coupon_bundle_id_
 */
interface CouponBundles
{
    /**
     * 向用户发放商品券批次组(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupon-bundles
     */
    public function post(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_bundle_id' => '712315129419284901',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
            'coupon_tag_info' => [
                'coupon_tag_list' => ['MEMBER'],
                'member_tag_info' => [
                    'member_card_id' => '',
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 向用户发放商品券批次组(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupon-bundles
     */
    public function postAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_bundle_id' => '712315129419284901',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
            'coupon_tag_info' => [
                'coupon_tag_list' => ['MEMBER'],
                'member_tag_info' => [
                    'member_card_id' => '',
                ],
            ],
        ],
    ]): PromiseInterface;
}
