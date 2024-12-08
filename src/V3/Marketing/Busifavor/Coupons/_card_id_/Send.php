<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 发放消费卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/%7Bcard_id%7D/send
     */
    public function post(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'openid' => '',
            'out_request_no' => '',
            'send_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * 发放消费卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/coupons/%7Bcard_id%7D/send
     */
    public function postAsync(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'openid' => '',
            'out_request_no' => '',
            'send_time' => '',
        ],
    ]): PromiseInterface;
}
