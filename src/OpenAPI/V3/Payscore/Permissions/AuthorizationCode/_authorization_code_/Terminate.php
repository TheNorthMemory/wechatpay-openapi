<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions\AuthorizationCode\_authorization_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Terminate
{
    /**
     * 解除用户授权关系（授权协议号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_4.shtml
     */
    public function post(array $options = [
        'authorization_code' => '',
        'json' => [
            'service_id' => '',
            'reason' => '',
        ],
    ]): ResponseInterface;

    /**
     * 解除用户授权关系（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_4.shtml#async
     */
    public function postAsync(array $options = [
        'authorization_code' => '',
        'json' => [
            'service_id' => '',
            'reason' => '',
        ],
    ]): PromiseInterface;
}
