<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UserServiceState
{
    /**
     * 查询用户授权状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/user-service-state
     */
    public function get(array $options = [
        'query' => [
            'appid' => '',
            'service_id' => '',
            'openid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户授权状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/user-service-state
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => '',
            'service_id' => '',
            'openid' => '',
        ],
    ]): PromiseInterface;
}
