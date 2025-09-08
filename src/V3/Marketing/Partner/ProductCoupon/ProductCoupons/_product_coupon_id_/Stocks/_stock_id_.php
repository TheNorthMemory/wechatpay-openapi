<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_\Stocks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _stock_id_\AssociateStores $associateStores
 * @property-read _stock_id_\AssociatedStores $associatedStores
 * @property-read _stock_id_\Deactivate $deactivate
 * @property-read _stock_id_\DisassociateStores $disassociateStores
 * @property-read _stock_id_\UpdateBudget $updateBudget
 * @property-read _stock_id_\UploadCouponCodes $uploadCouponCodes
 */
interface _stock_id_
{
    /**
     * 修改商品券指定批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D
     */
    public function patch(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'remark' => '疯狂星期四项目专用',
            'usage_rule_display_info' => [
                'coupon_usage_method_list' => ['OFFLINE'],
                'mini_program_appid' => 'wx1234567890',
                'mini_program_path' => '/pages/index/product',
                'app_path' => '',
                'usage_description' => '工作日可用',
                'coupon_available_store_info' => [
                    'description' => '所有门店可用，可使用小程序查看门店列表',
                    'mini_program_appid' => 'wx1234567890',
                    'mini_program_path' => '/pages/index/product',
                ],
            ],
            'coupon_display_info' => [
                'code_display_mode' => 'QRCODE',
                'background_color' => 'Color020',
                'entrance_mini_program' => [
                    'appid' => 'wx234545656765876',
                    'path' => '/path/index/index',
                    'entrance_wording' => '欢迎选购',
                    'guidance_wording' => '获取更多优惠',
                ],
                'entrance_official_account' => [
                    'appid' => 'wx1234567890',
                ],
                'entrance_finder' => [
                    'finder_id' => 'gh_12345678',
                    'finder_video_id' => 'UDFsdf24df34dD456Hdf34',
                    'finder_video_cover_image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                ],
            ],
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'store_scope' => 'NONE',
        ],
    ]): ResponseInterface;

    /**
     * 修改商品券指定批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D
     */
    public function patchAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'remark' => '疯狂星期四项目专用',
            'usage_rule_display_info' => [
                'coupon_usage_method_list' => ['OFFLINE'],
                'mini_program_appid' => 'wx1234567890',
                'mini_program_path' => '/pages/index/product',
                'app_path' => '',
                'usage_description' => '工作日可用',
                'coupon_available_store_info' => [
                    'description' => '所有门店可用，可使用小程序查看门店列表',
                    'mini_program_appid' => 'wx1234567890',
                    'mini_program_path' => '/pages/index/product',
                ],
            ],
            'coupon_display_info' => [
                'code_display_mode' => 'QRCODE',
                'background_color' => 'Color020',
                'entrance_mini_program' => [
                    'appid' => 'wx234545656765876',
                    'path' => '/path/index/index',
                    'entrance_wording' => '欢迎选购',
                    'guidance_wording' => '获取更多优惠',
                ],
                'entrance_official_account' => [
                    'appid' => 'wx1234567890',
                ],
                'entrance_finder' => [
                    'finder_id' => 'gh_12345678',
                    'finder_video_id' => 'UDFsdf24df34dD456Hdf34',
                    'finder_video_cover_image_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/xxx',
                ],
            ],
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'store_scope' => 'NONE',
        ],
    ]): PromiseInterface;

    /**
     * 查询商品券指定批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D#get
     */
    public function get(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'query' => [
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 查询商品券指定批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks/%7Bstock_id%7D#get
     */
    public function getAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'stock_id' => '1000000013001',
        'query' => [
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
