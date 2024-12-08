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
     * @link https://wechatpay.im/openapi/v3/payscore/users/%7Bopenid%7D/permissions/%7Bservice_id%7D/terminate
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
     * @link https://wechatpay.im/openapi/v3/payscore/users/%7Bopenid%7D/permissions/%7Bservice_id%7D/terminate
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
