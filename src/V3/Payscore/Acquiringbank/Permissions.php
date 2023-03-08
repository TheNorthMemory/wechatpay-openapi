<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Permissions\AuthorizationCode $authorizationCode
 */
interface Permissions
{
    /**
     * 从业机构预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-auth/apply-acquiring-bank-permissions.html
     */
    public function post(array $options = [
        'json' => [
            'service_id' => 'service_id',
            'channel_id' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 从业机构预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-institution-weixin-pay-score/acquiring-bank-service-auth/apply-acquiring-bank-permissions.html#async
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => 'service_id',
            'channel_id' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): PromiseInterface;
}
