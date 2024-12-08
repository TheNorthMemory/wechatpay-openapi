<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Callback
{
    /**
     * 设置回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/callback
     */
    public function patch(array $options = [
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 设置回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/callback
     */
    public function patchAsync(array $options = [
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;

    /**
     * 查询回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/callback#get
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/callback#get
     */
    public function getAsync(array $options = []): PromiseInterface;
}
