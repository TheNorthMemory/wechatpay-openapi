<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\StockBundles\_stock_bundle_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AssociateStores
{
    /**
     * 批次组批量关联门店(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stock-bundles/%7Bstock_bundle_id%7D/associate-stores
     */
    public function post(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_bundle_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'store_list' => [[
                'store_id' => '100000001',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 批次组批量关联门店(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stock-bundles/%7Bstock_bundle_id%7D/associate-stores
     */
    public function postAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_bundle_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'store_list' => [[
                'store_id' => '100000001',
            ],],
        ],
    ]): PromiseInterface;
}
