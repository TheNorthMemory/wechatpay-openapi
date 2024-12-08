<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Permissions\Openid $openid
 * @property-read Permissions\AuthorizationCode $authorizationCode
 * @property-read Permissions\AssessUserRiskLevel $assessUserRiskLevel
 */
interface Permissions
{
    /**
     * 商户预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/permissions
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 商户预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/permissions
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): PromiseInterface;
}
