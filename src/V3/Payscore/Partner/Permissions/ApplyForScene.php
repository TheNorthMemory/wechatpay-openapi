<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Permissions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ApplyForScene
{
    /**
     * 服务商场景中预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/apply-for-scene
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '实例1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
            'scene' => 'TRANSACTION',
            'transaction_scene_info' => [
                'mchid' => '1230000109',
                'sub_mchid' => '1230000109',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 服务商场景中预授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/permissions/apply-for-scene
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'authorization_code' => '实例1234323JKHDFE1243252',
            'notify_url' => 'http://www.qq.com',
            'scene' => 'TRANSACTION',
            'transaction_scene_info' => [
                'mchid' => '1230000109',
                'sub_mchid' => '1230000109',
            ],
        ],
    ]): PromiseInterface;
}
