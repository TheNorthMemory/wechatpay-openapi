<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\User;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cards
{
    /**
     * 查询用户在品牌下所有会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/user/cards
     */
    public function get(array $options = [
        'query' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'appid' => 'wxea9c30890f48d5ae',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户在品牌下所有会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/user/cards
     */
    public function getAsync(array $options = [
        'query' => [
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'appid' => 'wxea9c30890f48d5ae',
            'offset' => 0,
            'limit' => 0,
        ],
    ]): PromiseInterface;
}
