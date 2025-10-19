<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Instal;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Exposure
{
    /**
     * 商户贴息-获取微信分付曝光建议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/instal/exposure
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'user_id_type' => 'OPENID',
            'openid' => '123456789',
            'phone_number_hash' => 'EF879546FFFF',
        ],
    ]): ResponseInterface;

    /**
     * 商户贴息-获取微信分付曝光建议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/instal/exposure
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '1230000109',
            'appid' => 'wxd678efh567hg6787',
            'user_id_type' => 'OPENID',
            'openid' => '123456789',
            'phone_number_hash' => 'EF879546FFFF',
        ],
    ]): PromiseInterface;
}
