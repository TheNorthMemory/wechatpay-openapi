<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface AssociatedStores
{
    /**
     * 查询批次关联门店列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/associated-stores
     */
    public function get(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'query' => [
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 查询批次关联门店列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D/associated-stores
     */
    public function getAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'query' => [
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
