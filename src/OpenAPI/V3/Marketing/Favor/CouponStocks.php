<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface CouponStocks
{
    /**
     * 创建代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_1.shtml
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
            'stock_type' => '',
            'comment' => '零售批次',
            'belong_merchant' => '98568865',
            'pattern_info' => [
                'description' => '',
                'merchant_logo' => '',
                'merchant_name' => '',
                'coupon_image' => '',
            ],
            'coupon_use_rule' => [
                'goods_tag' => ['string'],
                'limit_pay' => ['string'],
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_1.shtml#async
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
            'stock_type' => '',
            'comment' => '零售批次',
            'belong_merchant' => '98568865',
            'pattern_info' => [
                'description' => '',
                'merchant_logo' => '',
                'merchant_name' => '',
                'coupon_image' => '',
            ],
            'coupon_use_rule' => [
                'goods_tag' => ['string'],
                'limit_pay' => ['string'],
                'available_items' => ['string'],
                'unavailable_items' => ['string'],
                'available_merchants' => ['string'],
            ],
            'out_request_no' => '',
            'ext_info' => '{"exinfo1":"1234","exinfo2":"3456"}',
        ],
    ]): PromiseInterface;
}
