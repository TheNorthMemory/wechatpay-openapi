<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Users\_openid_\Permissions\_service_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 商户解除用户授权关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'appid' => '',
            'reason' => '',
        ],
        'query' => [
            'openid' => '',
            'service_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 商户解除用户授权关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => '',
            'reason' => '',
        ],
        'query' => [
            'openid' => '',
            'service_id' => '',
        ],
    ]): PromiseInterface;
}
