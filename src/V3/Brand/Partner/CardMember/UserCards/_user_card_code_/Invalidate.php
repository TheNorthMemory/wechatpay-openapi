<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\UserCards\_user_card_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Invalidate
{
    /**
     * 作废用户会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D/invalidate
     */
    public function post(array $options = [
        'user_card_code' => '478515832665',
        'json' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'invalid_reason' => '传入的自定义作废原因',
        ],
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): ResponseInterface;

    /**
     * 作废用户会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D/invalidate
     */
    public function postAsync(array $options = [
        'user_card_code' => '478515832665',
        'json' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'invalid_reason' => '传入的自定义作废原因',
        ],
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): PromiseInterface;
}
