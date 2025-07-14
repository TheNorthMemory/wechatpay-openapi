<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\Cards\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Invalidate
{
    /**
     * 作废会员卡模板(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D/invalidate
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 作废会员卡模板(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/cards/%7Bcard_id%7D/invalidate
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;
}
