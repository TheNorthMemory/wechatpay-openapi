<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CouponStocks
{
    /**
     * 创建代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/coupon-stocks
     */
    public function post(array $options = [
        'json' => [
            'stock_name' => '微信支付代金券批次',
            'available_begin_time' => '2015-05-20T13:29:35.120+08:00',
            'available_end_time' => '2015-05-20T13:29:35.120+08:00',
            'stock_use_rule' => [
                'max_coupons' => 0,
                'max_amount' => 0,
                'max_amount_by_day' => 0,
                'max_coupons_per_user' => 0,
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
            ],
            'no_cash' => true,
            'stock_type' => 'NORMAL | DISCOUNT | EXCHAHGE | RANDOM',
            'comment' => '零售批次',
            'belong_merchant' => '98568865',
            'pattern_info' => [
                'description' => '',
                'merchant_logo' => '',
                'merchant_name' => '',
                'background_color' => 'Color010 | Color020 | Color030 | Color040',
                'coupon_image' => '',
            ],
            'coupon_use_rule' => [
                'coupon_available_time' => [
                    'available_begin_time' => '',
                    'available_end_time' => '',
                    'fix_available_time' => [
                        'available_week_day' => ['integer'],
                        'begin_time' => 3600,
                        'end_time' => 86399,
                    ],
                    'second_day_available' => true,
                    'available_time_after_receive' => 0,
                ],
                'fixed_normal_coupon' => [
                    'coupon_amount' => 0,
                    'transaction_minimum' => 0,
                ],
                'discount_coupon' => [
                    'discount_amount_max' => 0,
                    'discount_percent' => 0,
                    'transaction_minimum' => 0,
                ],
                'exchange_coupon' => [
                    'exchange_price' => 0,
                    'transaction_minimum' => 0,
                ],
                'goods_tag' => ['string'],
                'limit_pay' => ['string'],
                'limit_card' => [
                    'name' => '精粹白金',
                    'bin' => ['string'],
                ],
                'trade_type' => ['string'],
                'available_items' => ['string'],
                'unavailable_items' => ['string'],
                'available_merchants' => ['string'],
            ],
            'out_request_no' => '',
            'ext_info' => '{"exinfo1":"1234","exinfo2":"3456"}',
        ],
    ]): ResponseInterface;

    /**
     * 创建代金券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/coupon-stocks
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_name' => '微信支付代金券批次',
            'available_begin_time' => '2015-05-20T13:29:35.120+08:00',
            'available_end_time' => '2015-05-20T13:29:35.120+08:00',
            'stock_use_rule' => [
                'max_coupons' => 0,
                'max_amount' => 0,
                'max_amount_by_day' => 0,
                'max_coupons_per_user' => 0,
                'natural_person_limit' => true,
                'prevent_api_abuse' => true,
            ],
            'no_cash' => true,
            'stock_type' => 'NORMAL | DISCOUNT | EXCHAHGE | RANDOM',
            'comment' => '零售批次',
            'belong_merchant' => '98568865',
            'pattern_info' => [
                'description' => '',
                'merchant_logo' => '',
                'merchant_name' => '',
                'background_color' => 'Color010 | Color020 | Color030 | Color040',
                'coupon_image' => '',
            ],
            'coupon_use_rule' => [
                'coupon_available_time' => [
                    'available_begin_time' => '',
                    'available_end_time' => '',
                    'fix_available_time' => [
                        'available_week_day' => ['integer'],
                        'begin_time' => 3600,
                        'end_time' => 86399,
                    ],
                    'second_day_available' => true,
                    'available_time_after_receive' => 0,
                ],
                'fixed_normal_coupon' => [
                    'coupon_amount' => 0,
                    'transaction_minimum' => 0,
                ],
                'discount_coupon' => [
                    'discount_amount_max' => 0,
                    'discount_percent' => 0,
                    'transaction_minimum' => 0,
                ],
                'exchange_coupon' => [
                    'exchange_price' => 0,
                    'transaction_minimum' => 0,
                ],
                'goods_tag' => ['string'],
                'limit_pay' => ['string'],
                'limit_card' => [
                    'name' => '精粹白金',
                    'bin' => ['string'],
                ],
                'trade_type' => ['string'],
                'available_items' => ['string'],
                'unavailable_items' => ['string'],
                'available_merchants' => ['string'],
            ],
            'out_request_no' => '',
            'ext_info' => '{"exinfo1":"1234","exinfo2":"3456"}',
        ],
    ]): PromiseInterface;
}
