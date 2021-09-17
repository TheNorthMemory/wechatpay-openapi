<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Callbacks
{
    /**
     * 设置消息通知地址(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/convention/chapter3_12.shtml
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '9856888',
            'notify_url' => 'https://pay.weixin.qq.com',
            'switch' => '',
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
            'switch' => '',
        ],
    ]): PromiseInterface;
}
