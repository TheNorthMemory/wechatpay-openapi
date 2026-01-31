<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Appauth;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Authindex
{
    /**
     * 授权获取code(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/appauth/authindex
     */
    public function get(array $options = [
        'base_uri' => 'https://payapp.weixin.qq.com/',
        'query' => [
            'mch_id' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'redirect_uri' => 'https://weixin.qq.com/i-am-a-fake-uri',
            'response_type' => 'code',
            'scope' => 'pay_identity',
            'state' => 'STATE',
        ],
    ]): ResponseInterface;

    /**
     * 授权获取code(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/appauth/authindex
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://payapp.weixin.qq.com/',
        'query' => [
            'mch_id' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'redirect_uri' => 'https://weixin.qq.com/i-am-a-fake-uri',
            'response_type' => 'code',
            'scope' => 'pay_identity',
            'state' => 'STATE',
        ],
    ]): PromiseInterface;
}
