<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Rights
{
    /**
     * 设置会员权益(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/rights
     */
    public function patch(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'before_bonus_value' => 500,
            'bonus_value' => 600,
            'add_bonus_value' => 100,
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 设置会员权益(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/rights
     */
    public function patchAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'before_bonus_value' => 500,
            'bonus_value' => 600,
            'add_bonus_value' => 100,
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;
}
