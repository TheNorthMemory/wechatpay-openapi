<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Stocks\_stock_id_ $_stock_id_
 */
interface Stocks
{
    /**
     * 创建商家券(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'stock_name' => '8月1日活动券',
            'belong_merchant' => '10000022',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'stock_type' => 'NORMAL',
            'coupon_use_rule' => [
                'coupon_available_time' => [
                    'available_begin_time' => '2015-05-20T13:29:35+08:00',
                    'available_end_time' => '2015-05-20T13:29:35+08:00',
                    'available_day_after_receive' => 3,
                    'available_week' => [
                        'week_day' => [1, 2],
                        'available_day_time' => [[
                            'begin_time' => 3600,
                            'end_time' => 86399,
                        ],],
                    ],
                    'irregulary_avaliable_time' => [[
                        'begin_time' => '2015-05-20T13:29:35+08:00',
                        'end_time' => '2015-05-20T13:29:35+08:00',
                    ],],
                    'wait_days_after_receive' => 7,
                ],
                'fixed_normal_coupon' => [
                    'discount_amount' => 5,
                    'transaction_minimum' => 100,
                ],
                'discount_coupon' => [
                    'discount_percent' => 88,
                    'transaction_minimum' => 100,
                ],
                'exchange_coupon' => [
                    'exchange_price' => 100,
                    'transaction_minimum' => 100,
                ],
                'use_method' => 'OFF_LINE',
                'mini_programs_appid' => 'wx23232232323',
                'mini_programs_path' => '/path/index/index',
            ],
            'stock_send_rule' => [
                'max_coupons' => 100,
                'max_coupons_per_user' => 5,
                'max_coupons_by_day' => 100,
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
                'transferable' => true,
                'shareable' => true,
            ],
            'out_request_no' => '100002322019090134234sfdf',
            'custom_entrance' => [
                'mini_programs_info' => [
                    'mini_programs_appid' => 'wx234545656765876',
                    'mini_programs_path' => '/path/index/index',
                    'entrance_words' => '欢迎选购',
                    'guiding_words' => '获取更多优惠',
                ],
                'appid' => 'wx324345hgfhfghfg',
                'hall_id' => '233455656',
                'store_id' => '233554655',
                'code_display_mode' => 'BARCODE',
            ],
            'display_pattern_info' => [
                'description' => 'xxx门店可用',
                'merchant_logo_url' => 'https://qpic.cn/xxx',
                'merchant_name' => '微信支付',
                'background_color' => 'Color020',
                'coupon_image_url' => 'https://qpic.cn/xxx',
            ],
            'coupon_code_mode' => 'WECHATPAY_MODE',
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'subsidy' => true,
        ],
    ]): ResponseInterface;

    /**
     * 创建商家券(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_name' => '8月1日活动券',
            'belong_merchant' => '10000022',
            'comment' => '活动使用',
            'goods_name' => 'xxx商品使用',
            'stock_type' => 'NORMAL',
            'coupon_use_rule' => [
                'coupon_available_time' => [
                    'available_begin_time' => '2015-05-20T13:29:35+08:00',
                    'available_end_time' => '2015-05-20T13:29:35+08:00',
                    'available_day_after_receive' => 3,
                    'available_week' => [
                        'week_day' => [1, 2],
                        'available_day_time' => [[
                            'begin_time' => 3600,
                            'end_time' => 86399,
                        ],],
                    ],
                    'irregulary_avaliable_time' => [[
                        'begin_time' => '2015-05-20T13:29:35+08:00',
                        'end_time' => '2015-05-20T13:29:35+08:00',
                    ],],
                    'wait_days_after_receive' => 7,
                ],
                'fixed_normal_coupon' => [
                    'discount_amount' => 5,
                    'transaction_minimum' => 100,
                ],
                'discount_coupon' => [
                    'discount_percent' => 88,
                    'transaction_minimum' => 100,
                ],
                'exchange_coupon' => [
                    'exchange_price' => 100,
                    'transaction_minimum' => 100,
                ],
                'use_method' => 'OFF_LINE',
                'mini_programs_appid' => 'wx23232232323',
                'mini_programs_path' => '/path/index/index',
            ],
            'stock_send_rule' => [
                'max_coupons' => 100,
                'max_coupons_per_user' => 5,
                'max_coupons_by_day' => 100,
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
                'transferable' => true,
                'shareable' => true,
            ],
            'out_request_no' => '100002322019090134234sfdf',
            'custom_entrance' => [
                'mini_programs_info' => [
                    'mini_programs_appid' => 'wx234545656765876',
                    'mini_programs_path' => '/path/index/index',
                    'entrance_words' => '欢迎选购',
                    'guiding_words' => '获取更多优惠',
                ],
                'appid' => 'wx324345hgfhfghfg',
                'hall_id' => '233455656',
                'store_id' => '233554655',
                'code_display_mode' => 'BARCODE',
            ],
            'display_pattern_info' => [
                'description' => 'xxx门店可用',
                'merchant_logo_url' => 'https://qpic.cn/xxx',
                'merchant_name' => '微信支付',
                'background_color' => 'Color020',
                'coupon_image_url' => 'https://qpic.cn/xxx',
            ],
            'coupon_code_mode' => 'WECHATPAY_MODE',
            'notify_config' => [
                'notify_appid' => 'wx23232232323',
            ],
            'subsidy' => true,
        ],
    ]): PromiseInterface;
}
