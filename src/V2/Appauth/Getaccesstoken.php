<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Appauth;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getaccesstoken
{
    /**
     * 通过code换取accesstoken(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/appauth/getaccesstoken
     */
    public function get(array $options = [
        'query' => [
            'mch_id' => '1200009811',
            'appid' => 'wxcbda96de0b165486',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'code' => 'wxcbda96de0b165489',
            'grant_type' => 'authorization_code',
            'scope' => 'pay_identity',
            'sign_type' => 'HMAC-SHA256',
            'sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
        ],
    ]): ResponseInterface;

    /**
     * 通过code换取accesstoken(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/appauth/getaccesstoken
     */
    public function getAsync(array $options = [
        'query' => [
            'mch_id' => '1200009811',
            'appid' => 'wxcbda96de0b165486',
            'openid' => 'baf04e6bbbd06f7b1a197d18ed53b7f1',
            'code' => 'wxcbda96de0b165489',
            'grant_type' => 'authorization_code',
            'scope' => 'pay_identity',
            'sign_type' => 'HMAC-SHA256',
            'sign' => 'C380BEC2BFD727A4B6845133519F3AD6',
        ],
    ]): PromiseInterface;
}
