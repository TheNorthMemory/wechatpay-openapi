<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secsvc;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Realnameauth
{
    /**
     * 微信支付实名验证(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secsvc/realnameauth
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1900000109',
            'appid' => 'wx2421b1c4370ec43b',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'real_name' => '刘某某',
            'cred_type' => '1',
            'cred_id' => '440000000000000000',
            'access_token' => '81_...',
            'sign_type' => 'HMAC-SHA256',
        ],
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): ResponseInterface;

    /**
     * 微信支付实名验证(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secsvc/realnameauth
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1900000109',
            'appid' => 'wx2421b1c4370ec43b',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'real_name' => '刘某某',
            'cred_type' => '1',
            'cred_id' => '440000000000000000',
            'access_token' => '81_...',
            'sign_type' => 'HMAC-SHA256',
        ],
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): PromiseInterface;
}
