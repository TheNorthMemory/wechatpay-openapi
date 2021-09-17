<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Permissions\Openid $openid
 * @property-read Permissions\AuthorizationCode $authorizationCode
 */
interface Permissions
{
    /**
     * 商户预授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_2.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter9_2.shtml#async
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
