<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\Users\_openid_\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _coupon_code_\Confirm $confirm
 * @property-read _coupon_code_\Deactivate $deactivate
 * @property-read _coupon_code_\Return_ $return
 * @property-read _coupon_code_\Use_ $use
 */
interface _coupon_code_
{
    /**
     * 查询用户商品券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D
     */
    public function get(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'coupon_code' => '123446565767',
        'query' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户商品券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/users/%7Bopenid%7D/coupons/%7Bcoupon_code%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oh-394z-6CGkNoJrsDLTTUKiAnp4',
        'coupon_code' => '123446565767',
        'query' => [
            'brand_id' => '120344',
            'product_coupon_id' => '1000000013',
            'stock_id' => '1000000013001',
            'appid' => 'wx233544546545989',
        ],
    ]): PromiseInterface;
}
