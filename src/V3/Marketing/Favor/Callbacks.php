<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Callbacks
{
    /**
     * 获取已设置的消息通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_12.shtml
     */
    public function get(array $options = [
        'query' => [
            'mchid' => '9856888',
        ],
    ]): ResponseInterface;

    /**
     * 获取已设置的消息通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_12.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'mchid' => '9856888',
        ],
    ]): PromiseInterface;

    /**
     * 设置消息通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_12.shtml
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '9856888',
            'notify_url' => 'https://pay.weixin.qq.com',
            'switch' => true,
        ],
    ]): ResponseInterface;

    /**
     * 设置消息通知地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_12.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '9856888',
            'notify_url' => 'https://pay.weixin.qq.com',
            'switch' => true,
        ],
    ]): PromiseInterface;
}
