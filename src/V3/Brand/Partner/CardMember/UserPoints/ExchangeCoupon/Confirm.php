<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\UserPoints\ExchangeCoupon;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Confirm
{
    /**
     * 同步积分兑券结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-points/exchange-coupon/confirm
     */
    public function post(array $options = [
        'json' => [
            'record_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'exchange_coupon_template_id' => '0Flpo7FqTQ',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'state' => 'POINT_EXCHANGE_COUPON_SUCCESS',
            'coupon_code' => '123446565767',
            'fail_reason' => '积分不足',
        ],
    ]): ResponseInterface;

    /**
     * 同步积分兑券结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-points/exchange-coupon/confirm
     */
    public function postAsync(array $options = [
        'json' => [
            'record_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'exchange_coupon_template_id' => '0Flpo7FqTQ',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'state' => 'POINT_EXCHANGE_COUPON_SUCCESS',
            'coupon_code' => '123446565767',
            'fail_reason' => '积分不足',
        ],
    ]): PromiseInterface;
}
