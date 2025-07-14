<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read UserCards\_user_card_code_ $_user_card_code_
 * @property-read UserCards\ImportByOpenid $importByOpenid
 * @property-read UserCards\ImportByPhone $importByPhone
 */
interface UserCards
{
    /**
     * 查询用户在品牌下所有会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '1004',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_state' => 'UNACTIVATED | EFFECTIVE | EXPIRED | INVALID',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询用户在品牌下所有会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '1004',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_state' => 'UNACTIVATED | EFFECTIVE | EXPIRED | INVALID',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
