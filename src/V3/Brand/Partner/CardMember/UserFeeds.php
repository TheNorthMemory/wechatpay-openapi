<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UserFeeds
{
    /**
     * 创建用户动态信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-feeds
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'user_card_code' => '478515832665',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'out_request_no' => '100002322019090134234sfdf',
            'cell_message' => '15_1200_1',
        ],
    ]): ResponseInterface;

    /**
     * 创建用户动态信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-feeds
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'user_card_code' => '478515832665',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'out_request_no' => '100002322019090134234sfdf',
            'cell_message' => '15_1200_1',
        ],
    ]): PromiseInterface;
}
