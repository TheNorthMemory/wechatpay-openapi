<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Permissions\AuthorizationCode $authorizationCode
 * @property-read Permissions\ApplyForScene $applyForScene
 * @property-read Permissions\AssessUserRiskLevel $assessUserRiskLevel
 * @property-read Permissions\Search $search
 * @property-read Permissions\Terminate $terminate
 */
interface Permissions
{
    /**
     * 商户预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions
     */
    public function post(array $options = [
        'json' => [
            'service_id' => 'service_id',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 商户预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => 'service_id',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
        ],
    ]): PromiseInterface;
}
