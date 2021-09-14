<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions\Openid\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Terminate
{
    /**
     * 解除用户授权关系（openid）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_6.shtml
     */
    public function post(array $options = [
        'openid' => '',
        'json' => [
            'service_id' => '',
            'appid' => '',
            'reason' => '',
        ],
    ]): ResponseInterface;

    /**
     * 解除用户授权关系（openid）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_6.shtml#async
     */
    public function postAsync(array $options = [
        'openid' => '',
        'json' => [
            'service_id' => '',
            'appid' => '',
            'reason' => '',
        ],
    ]): PromiseInterface;
}
