<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Permissions\AuthorizationCode\_authorization_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 从业机构解除用户授权关系（授权协议号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/permissions/authorization-code/%7Bauthorization_code%7D/terminate
     */
    public function post(array $options = [
        'authorization_code' => '1275342195190894594',
        'json' => [
            'service_id' => '500001',
            'channel_id' => '1230000109',
            'sub_mchid' => '1230000109',
            'reason' => '撤销原因',
        ],
    ]): ResponseInterface;

    /**
     * 从业机构解除用户授权关系（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/permissions/authorization-code/%7Bauthorization_code%7D/terminate
     */
    public function postAsync(array $options = [
        'authorization_code' => '1275342195190894594',
        'json' => [
            'service_id' => '500001',
            'channel_id' => '1230000109',
            'sub_mchid' => '1230000109',
            'reason' => '撤销原因',
        ],
    ]): PromiseInterface;
}
