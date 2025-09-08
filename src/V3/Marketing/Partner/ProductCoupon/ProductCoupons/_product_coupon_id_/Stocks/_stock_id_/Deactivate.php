<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Deactivate
{
    /**
     * 失效商品券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/deactivate
     */
    public function post(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'deactivate_reason' => '批次信息有误，重新创建',
        ],
    ]): ResponseInterface;

    /**
     * 失效商品券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/deactivate
     */
    public function postAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'deactivate_reason' => '批次信息有误，重新创建',
        ],
    ]): PromiseInterface;
}
