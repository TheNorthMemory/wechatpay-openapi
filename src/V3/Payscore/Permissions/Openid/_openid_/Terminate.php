<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Permissions\Openid\_openid_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 解除用户授权关系（openid）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/permissions/openid/%7Bopenid%7D/terminate
     */
    public function post(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'reason' => 'reason',
        ],
    ]): ResponseInterface;

    /**
     * 解除用户授权关系（openid）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/permissions/openid/%7Bopenid%7D/terminate
     */
    public function postAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'reason' => 'reason',
        ],
    ]): PromiseInterface;
}
