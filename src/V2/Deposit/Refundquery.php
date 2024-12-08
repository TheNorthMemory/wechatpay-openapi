<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Refundquery
{
    /**
     * 查询退款（押金）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/refundquery
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'refund_id' => '1217752501201407033233368018',
            'offset' => '15',
        ],
    ]): ResponseInterface;

    /**
     * 查询退款（押金）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/refundquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'sub_appid' => 'wx8888888888888888',
            'sub_mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'refund_id' => '1217752501201407033233368018',
            'offset' => '15',
        ],
    ]): PromiseInterface;
}
