<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface PayViewTokens
{
    /**
     * 品牌会员展示付款码组件预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/pay-view-tokens
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
        ],
    ]): ResponseInterface;

    /**
     * 品牌会员展示付款码组件预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/pay-view-tokens
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
        ],
    ]): PromiseInterface;
}
