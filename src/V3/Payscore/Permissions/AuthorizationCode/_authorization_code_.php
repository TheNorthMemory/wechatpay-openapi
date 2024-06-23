<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions\AuthorizationCode;

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
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-auth/get-permissions-by-authorization-code.html
     */
    public function get(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'query' => [
            'service_id' => '500001',
        ],
    ]): ResponseInterface;

    /**
     * 查询与用户授权记录（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-auth/get-permissions-by-authorization-code.html#async
     */
    public function getAsync(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'query' => [
            'service_id' => '500001',
        ],
    ]): PromiseInterface;
}
