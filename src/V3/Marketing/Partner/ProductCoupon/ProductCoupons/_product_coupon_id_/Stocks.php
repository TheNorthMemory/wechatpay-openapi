<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\ProductCoupon\ProductCoupons\_product_coupon_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Stocks\_stock_id_ $_stock_id_
 */
interface Stocks
{
    /**
     * 添加商品券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks
     */
    public function post(array $options = [
        'product_coupon_id' => '1000000013',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'stock' => [
                'remark' => '疯狂星期四项目专用',
                'coupon_code_mode' => 'WECHATPAY',
                'stock_send_rule' => [
                    'max_count' => 100000,
                    'max_count_per_day' => 100000000,
                    'max_count_per_user' => 5,
                ],
                'single_usage_rule' => [
                    'coupon_available_period' => [
                        'available_begin_time' => '2025-08-01T00:00:00+08:00',
                        'available_end_time' => '2025-08-31T23:59:59+08:00',
                        'available_days' => 30,
                        'wait_days_after_receive' => 1,
                        'weekly_available_period' => [
                            'day_list' => ['MONDAY'],
                            'day_period_list' => [[
                                'begin_time' => 60,
                                'end_time' => 86399,
                            ],],
                        ],
                        'irregular_available_period_list' => [[
                            'begin_time' => '2025-08-01T00:00:00+08:00',
                            'end_time' => '2025-08-31T23:59:59+08:00',
                        ],],
                    ],
                    'normal_coupon' => [
                        'threshold' => 10000,
                        'discount_amount' => 1,
                    ],
                    'discount_coupon' => [
                        'threshold' => 10000,
                        'percent_off' => 20,
                    ],
                    'exchange_coupon' => [
                        'threshold' => 10000,
                        'exchange_price' => 20,
                    ],
                ],
                'sequential_usage_rule' => [
                    'coupon_available_period' => [
                        'available_begin_time' => '2025-08-01T00:00:00+08:00',
                        'available_end_time' => '2025-08-31T23:59:59+08:00',
                        'wait_days_after_receive' => 1,
                        'weekly_available_period' => [
                            'day_list' => ['MONDAY'],
                            'day_period_list' => [[
                                'begin_time' => 60,
                                'end_time' => 86399,
                            ],],
                        ],
                        'irregular_available_period_list' => [[
                            'begin_time' => '2025-08-01T00:00:00+08:00',
                            'end_time' => '2025-08-31T23:59:59+08:00',
                        ],],
                    ],
                    'normal_coupon_list' => [[
                        'threshold' => 10000,
                        'discount_amount' => 1,
                    ],],
                    'discount_coupon_list' => [[
                        'threshold' => 10000,
                        'percent_off' => 20,
                    ],],
                    'exchange_coupon_list' => [[
                        'threshold' => 10000,
                        'exchange_price' => 20,
                    ],],
                    'special_first' => true,
                ],
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
        ],
    ]): ResponseInterface;

    /**
     * 添加商品券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks
     */
    public function postAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'json' => [
            'brand_id' => '120344',
            'out_request_no' => '34657_20250101_123456',
            'stock' => [
                'remark' => '疯狂星期四项目专用',
                'coupon_code_mode' => 'WECHATPAY',
                'stock_send_rule' => [
                    'max_count' => 100000,
                    'max_count_per_day' => 100000000,
                    'max_count_per_user' => 5,
                ],
                'single_usage_rule' => [
                    'coupon_available_period' => [
                        'available_begin_time' => '2025-08-01T00:00:00+08:00',
                        'available_end_time' => '2025-08-31T23:59:59+08:00',
                        'available_days' => 30,
                        'wait_days_after_receive' => 1,
                        'weekly_available_period' => [
                            'day_list' => ['MONDAY'],
                            'day_period_list' => [[
                                'begin_time' => 60,
                                'end_time' => 86399,
                            ],],
                        ],
                        'irregular_available_period_list' => [[
                            'begin_time' => '2025-08-01T00:00:00+08:00',
                            'end_time' => '2025-08-31T23:59:59+08:00',
                        ],],
                    ],
                    'normal_coupon' => [
                        'threshold' => 10000,
                        'discount_amount' => 1,
                    ],
                    'discount_coupon' => [
                        'threshold' => 10000,
                        'percent_off' => 20,
                    ],
                    'exchange_coupon' => [
                        'threshold' => 10000,
                        'exchange_price' => 20,
                    ],
                ],
                'sequential_usage_rule' => [
                    'coupon_available_period' => [
                        'available_begin_time' => '2025-08-01T00:00:00+08:00',
                        'available_end_time' => '2025-08-31T23:59:59+08:00',
                        'wait_days_after_receive' => 1,
                        'weekly_available_period' => [
                            'day_list' => ['MONDAY'],
                            'day_period_list' => [[
                                'begin_time' => 60,
                                'end_time' => 86399,
                            ],],
                        ],
                        'irregular_available_period_list' => [[
                            'begin_time' => '2025-08-01T00:00:00+08:00',
                            'end_time' => '2025-08-31T23:59:59+08:00',
                        ],],
                    ],
                    'normal_coupon_list' => [[
                        'threshold' => 10000,
                        'discount_amount' => 1,
                    ],],
                    'discount_coupon_list' => [[
                        'threshold' => 10000,
                        'percent_off' => 20,
                    ],],
                    'exchange_coupon_list' => [[
                        'threshold' => 10000,
                        'exchange_price' => 20,
                    ],],
                    'special_first' => true,
                ],
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
        ],
    ]): PromiseInterface;

    /**
     * 查询商品券批次列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks#get
     */
    public function get(array $options = [
        'product_coupon_id' => '1000000013',
        'query' => [
            'state' => 'AUDITING | SENDING | PAUSED | STOPPED',
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): ResponseInterface;

    /**
     * 查询商品券批次列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/product-coupon/product-coupons/%7Bproduct_coupon_id%7D/stocks#get
     */
    public function getAsync(array $options = [
        'product_coupon_id' => '1000000013',
        'query' => [
            'state' => 'AUDITING | SENDING | PAUSED | STOPPED',
            'page_size' => 20,
            'page_token' => 'MTIzMjUK',
            'brand_id' => '120344',
        ],
    ]): PromiseInterface;
}
