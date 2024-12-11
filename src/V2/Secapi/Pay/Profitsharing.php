<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharing
{
    /**
     * 请求单次分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/pay/profitsharing
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'brand_mch_id' => '1900000108',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => \json_encode([[
                'type' => 'MERCHANT_ID | PERSONAL_OPENID | PERSONAL_SUB_OPENID',
                'account' => '190001001',
                'amount' => 100,
                'description' => '分到商户',
                'name' => '分到个人',
            ],]),
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 请求单次分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/pay/profitsharing
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'brand_mch_id' => '1900000108',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => \json_encode([[
                'type' => 'MERCHANT_ID | PERSONAL_OPENID | PERSONAL_SUB_OPENID',
                'account' => '190001001',
                'amount' => 100,
                'description' => '分到商户',
                'name' => '分到个人',
            ],]),
        ],
        'security' => true,
    ]): PromiseInterface;
}
