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
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-auth/terminate-acquiring-bank-permissions-by-code.html
     */
    public function post(array $options = [
        'authorization_code' => '',
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
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-auth/terminate-acquiring-bank-permissions-by-code.html#async
     */
    public function postAsync(array $options = [
        'authorization_code' => '',
        'json' => [
            'service_id' => '500001',
            'channel_id' => '1230000109',
            'sub_mchid' => '1230000109',
            'reason' => '撤销原因',
        ],
    ]): PromiseInterface;
}
