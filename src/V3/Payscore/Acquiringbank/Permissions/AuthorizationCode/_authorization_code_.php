<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Permissions\AuthorizationCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _authorization_code_\Terminate $terminate
 */
interface _authorization_code_
{
    /**
     * 从业机构查询与用户授权记录（授权协议号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/permissions/authorization-code/%7Bauthorization_code%7D
     */
    public function get(array $options = [
        'authorization_code' => '1275342195190894594',
        'query' => [
            'service_id' => '500001',
            'channel_id' => '1230000109',
            'sub_mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 从业机构查询与用户授权记录（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/permissions/authorization-code/%7Bauthorization_code%7D
     */
    public function getAsync(array $options = [
        'authorization_code' => '1275342195190894594',
        'query' => [
            'service_id' => '500001',
            'channel_id' => '1230000109',
            'sub_mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
