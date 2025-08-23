<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\UserPoints;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 同步积分余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-points/sync
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'point_balance' => 1000,
        ],
    ]): ResponseInterface;

    /**
     * 同步积分余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-points/sync
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'point_balance' => 1000,
        ],
    ]): PromiseInterface;
}
