<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Coupons\_coupon_code_ $_coupon_code_
 */
interface Coupons
{
    /**
     * 向用户发放商品券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons
     */
    public function post(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'coupon_code' => '123446565767',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
        ],
    ]): ResponseInterface;

    /**
     * 向用户发放商品券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons
     */
    public function postAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'json' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'coupon_code' => '123446565767',
            'appid' => 'wx233544546545989',
            'send_request_no' => '34657_20250101_123456',
            'attach' => 'example_attach',
        ],
    ]): PromiseInterface;

    /**
     * 指定券状态查询用户商品券列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons#get
     */
    public function get(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'query' => [
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
            'coupon_state' => 'CONFIRMING | PENDING | EFFECTIVE | USED',
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 指定券状态查询用户商品券列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons#get
     */
    public function getAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'query' => [
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
            'coupon_state' => 'CONFIRMING | PENDING | EFFECTIVE | USED',
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
