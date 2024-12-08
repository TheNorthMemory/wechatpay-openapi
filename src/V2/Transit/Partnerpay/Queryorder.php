<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Transit\Partnerpay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Queryorder
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/partnerpay/queryorder
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/transit/partnerpay/queryorder
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_appid' => 'wxcbda96de0b165489',
            'mch_id' => '10000098',
            'sub_mch_id' => '1900000109',
            'transaction_id' => '1009660380201506130728806387',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
