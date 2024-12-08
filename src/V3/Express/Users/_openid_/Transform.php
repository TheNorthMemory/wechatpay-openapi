<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Express\Users\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Transform
{
    /**
     * 用户openid转换(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/express/users/%7Bopenid%7D/transform
     */
    public function post(array $options = [
        'openid' => 'xsd3434454567676',
        'json' => [
            'appid' => 'wxaaaa1a123b456c7d',
        ],
    ]): ResponseInterface;

    /**
     * 用户openid转换(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/express/users/%7Bopenid%7D/transform
     */
    public function postAsync(array $options = [
        'openid' => 'xsd3434454567676',
        'json' => [
            'appid' => 'wxaaaa1a123b456c7d',
        ],
    ]): PromiseInterface;
}
