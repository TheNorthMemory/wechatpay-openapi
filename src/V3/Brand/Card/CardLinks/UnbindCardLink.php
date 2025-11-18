<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card\CardLinks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UnbindCardLink
{
    /**
     * 解除已生效交易连接名片场景(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links/unbind-card-link
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '1004',
            'payment_scene' => 'MINI_PROGRAM',
            'appid' => 'wxea9c30890f48d5ae',
            'card_link_mchid' => '111222333',
            'service_id' => '00005000000000548218251086296300',
        ],
    ]): ResponseInterface;

    /**
     * 解除已生效交易连接名片场景(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links/unbind-card-link
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '1004',
            'payment_scene' => 'MINI_PROGRAM',
            'appid' => 'wxea9c30890f48d5ae',
            'card_link_mchid' => '111222333',
            'service_id' => '00005000000000548218251086296300',
        ],
    ]): PromiseInterface;
}
