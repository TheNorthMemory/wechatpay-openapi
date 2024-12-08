<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Consume
{
    /**
     * 消费押金(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/consume
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '013467007045764',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'consume_fee' => '888',
            'fee_type' => 'CNY',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 消费押金(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/consume
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '013467007045764',
            'out_trade_no' => '1217752501201407033233368018',
            'total_fee' => '888',
            'consume_fee' => '888',
            'fee_type' => 'CNY',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}
