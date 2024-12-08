<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Permissions\AuthorizationCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _authorization_code_\Terminate $terminate
 */
interface _authorization_code_
{
    /**
     * 查询与用户授权记录（授权协议号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/authorization-code/%7Bauthorization_code%7D
     */
    public function get(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'query' => [
            'service_id' => '500001',
            'sub_mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询与用户授权记录（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/authorization-code/%7Bauthorization_code%7D
     */
    public function getAsync(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'query' => [
            'service_id' => '500001',
            'sub_mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
