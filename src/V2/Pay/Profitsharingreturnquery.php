<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingreturnquery
{
    /**
     * 回退结果查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingreturnquery
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
        ],
    ]): ResponseInterface;

    /**
     * 回退结果查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingreturnquery
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
        ],
    ]): PromiseInterface;
}
