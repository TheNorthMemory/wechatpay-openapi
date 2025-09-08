<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface DisassociateStores
{
    /**
     * 批次取消关联门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/disassociate-stores
     */
    public function post(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'store_list' => [[
                'store_id' => '100000001',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 批次取消关联门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/disassociate-stores
     */
    public function postAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'store_list' => [[
                'store_id' => '100000001',
            ],],
        ],
    ]): PromiseInterface;
}
