<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Permissions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 解除用户授权关系（openid）(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_22.shtml
     */
    public function post(array $options = [
        'json' => [
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => '',
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'reason' => 'reason',
        ],
    ]): ResponseInterface;

    /**
     * 解除用户授权关系（openid）(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_22.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => '',
            'service_id' => '500001',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1230000109',
            'reason' => 'reason',
        ],
    ]): PromiseInterface;
}
