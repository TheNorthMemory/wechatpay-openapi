<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _product_coupon_id_\Stocks $stocks
 * @property-read _product_coupon_id_\StockBundles $stockBundles
 * @property-read _product_coupon_id_\Deactivate $deactivate
 */
interface _product_coupon_id_
{
    /**
     * 修改商品券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D
     */
    public function patch(array $options = [
        'product_coupon_id' => '1000000013',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'display_info' => [
                'name' => '全场满100立打8折',
                'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                'background_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                'detail_image_url_list' => ['https://wxpaylogo.qpic.cn/wxpayl'],
                'original_price' => 10000,
                'combo_package_list' => [[
                    'name' => '咖啡2选1',
                    'pick_count' => 3,
                    'choice_list' => [[
                        'name' => '美式',
                        'price' => 10000,
                        'count' => 2,
                        'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                        'mini_program_appid' => 'wx4fd12345678',
                        'mini_program_path' => '/pages/index/index',
                    ],],
                ],],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 修改商品券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D
     */
    public function patchAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'display_info' => [
                'name' => '全场满100立打8折',
                'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                'background_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                'detail_image_url_list' => ['https://wxpaylogo.qpic.cn/wxpayl'],
                'original_price' => 10000,
                'combo_package_list' => [[
                    'name' => '咖啡2选1',
                    'pick_count' => 3,
                    'choice_list' => [[
                        'name' => '美式',
                        'price' => 10000,
                        'count' => 2,
                        'image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                        'mini_program_appid' => 'wx4fd12345678',
                        'mini_program_path' => '/pages/index/index',
                    ],],
                ],],
            ],
        ],
    ]): PromiseInterface;

    /**
     * 查询商品券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D#get
     */
    public function get(array $options = [
        'product_coupon_id' => '1000000013',
        'query' => [
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 查询商品券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D#get
     */
    public function getAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'query' => [
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
