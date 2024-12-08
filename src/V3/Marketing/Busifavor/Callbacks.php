<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Callbacks
{
    /**
     * 设置商家券事件通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/callbacks
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '10000098',
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 设置商家券事件通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/callbacks
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '10000098',
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;

    /**
     * 查询商家券事件通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/callbacks#get
     */
    public function get(array $options = [
        'query' => [
            'mchid' => '10000098',
        ],
    ]): ResponseInterface;

    /**
     * 查询商家券事件通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/busifavor/callbacks#get
     */
    public function getAsync(array $options = [
        'query' => [
            'mchid' => '10000098',
        ],
    ]): PromiseInterface;
}
