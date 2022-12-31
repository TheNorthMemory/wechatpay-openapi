<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Paygiftactivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UniqueThresholdActivity
{
    /**
     * 创建全场满额送活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'activity_base_info' => [
                'activity_name' => '',
                'activity_second_title' => '',
                'merchant_logo_url' => '',
                'background_color' => 'Color010 | Color020 | Color030 | Color040',
                'begin_time' => '',
                'end_time' => '',
                'available_periods' => [
                    'available_time' => [[
                        'begin_time' => '',
                        'end_time' => '',
                    ],],
                    'available_day_time' => [[
                        'begin_day_time' => '',
                        'end_day_time' => '',
                    ],],
                ],
                'out_request_no' => '',
                'delivery_purpose' => 'OFF_LINE_PAY | JUMP_MINI_APP',
                'mini_programs_appid' => '',
                'mini_programs_path' => '',
            ],
            'advanced_setting' => [
                'delivery_user_category' => 'BUSIFAVOR',
                'merchant_member_appid' => '',
                'payment_mode' => [
                    'payment_scene_list' => ['string'],
                    'payment_method_information' => [
                        'payment_method' => '',
                        'bank_abbreviation' => '',
                    ],
                ],
                'goods_tags' => ['string'],
            ],
            'award_send_rule' => [
                'award_type' => 'BUSIFAVOR',
                'merchant_option' => 'IN_SEVICE_COUPON_MERCHANT | MANUAL_INPUT_MERCHANT',
                'transaction_amount_minimum' => 0,
                'send_content' => 'SINGLE_COUPON | GIFT_PACKAGE',
                'award_list' => [[
                    'stock_id' => '',
                    'original_image_url' => '',
                    'thumbnail_url' => '',
                ],],
                'merchant_id_list' => ['string'],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 创建全场满额送活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/paygiftactivity/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'activity_base_info' => [
                'activity_name' => '',
                'activity_second_title' => '',
                'merchant_logo_url' => '',
                'background_color' => 'Color010 | Color020 | Color030 | Color040',
                'begin_time' => '',
                'end_time' => '',
                'available_periods' => [
                    'available_time' => [[
                        'begin_time' => '',
                        'end_time' => '',
                    ],],
                    'available_day_time' => [[
                        'begin_day_time' => '',
                        'end_day_time' => '',
                    ],],
                ],
                'out_request_no' => '',
                'delivery_purpose' => 'OFF_LINE_PAY | JUMP_MINI_APP',
                'mini_programs_appid' => '',
                'mini_programs_path' => '',
            ],
            'advanced_setting' => [
                'delivery_user_category' => 'BUSIFAVOR',
                'merchant_member_appid' => '',
                'payment_mode' => [
                    'payment_scene_list' => ['string'],
                    'payment_method_information' => [
                        'payment_method' => '',
                        'bank_abbreviation' => '',
                    ],
                ],
                'goods_tags' => ['string'],
            ],
            'award_send_rule' => [
                'award_type' => 'BUSIFAVOR',
                'merchant_option' => 'IN_SEVICE_COUPON_MERCHANT | MANUAL_INPUT_MERCHANT',
                'transaction_amount_minimum' => 0,
                'send_content' => 'SINGLE_COUPON | GIFT_PACKAGE',
                'award_list' => [[
                    'stock_id' => '',
                    'original_image_url' => '',
                    'thumbnail_url' => '',
                ],],
                'merchant_id_list' => ['string'],
            ],
        ],
    ]): PromiseInterface;
}
