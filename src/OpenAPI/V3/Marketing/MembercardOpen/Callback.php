<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Callback
{
    /**
     * 设置回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter6_1.shtml
     */
    public function patch(array $options = [
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 设置回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter6_1.shtml#async
     */
    public function patchAsync(array $options = [
        'json' => [
            'notify_url' => 'https://pay.weixin.qq.com',
        ],
    ]): PromiseInterface;

    /**
     * 查询回调地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter6_2.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询回调地址(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter6_2.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;
}
