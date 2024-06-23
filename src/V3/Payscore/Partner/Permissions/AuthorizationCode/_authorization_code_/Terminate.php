<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Permissions\AuthorizationCode\_authorization_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 解除用户授权关系（授权协议号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-auth/terminate-partner-permissions-by-code.html
     */
    public function post(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '500001',
            'sub_mchid' => '1230000109',
            'reason' => '撤销原因',
        ],
    ]): ResponseInterface;

    /**
     * 解除用户授权关系（授权协议号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-auth/terminate-partner-permissions-by-code.html#async
     */
    public function postAsync(array $options = [
        'authorization_code' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '500001',
            'sub_mchid' => '1230000109',
            'reason' => '撤销原因',
        ],
    ]): PromiseInterface;
}
