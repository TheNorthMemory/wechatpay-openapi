<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingreturn
{
    /**
     * 分账回退(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/pay/profitsharingreturn
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'out_return_no' => 'R20190516001',
            'return_account_type' => 'MERCHANT_ID',
            'return_account' => '86693852',
            'return_amount' => '888',
            'description' => '用户退款',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 分账回退(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/pay/profitsharingreturn
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'sign_type' => 'HMAC-SHA256',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'out_return_no' => 'R20190516001',
            'return_account_type' => 'MERCHANT_ID',
            'return_account' => '86693852',
            'return_amount' => '888',
            'description' => '用户退款',
        ],
        'security' => true,
    ]): PromiseInterface;
}
