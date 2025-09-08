<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UploadCouponCodes
{
    /**
     * 预上传券Code(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/upload-coupon-codes
     */
    public function post(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'code_list' => ['vCode_1234567890'],
        ],
    ]): ResponseInterface;

    /**
     * 预上传券Code(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/upload-coupon-codes
     */
    public function postAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'code_list' => ['vCode_1234567890'],
        ],
    ]): PromiseInterface;
}
