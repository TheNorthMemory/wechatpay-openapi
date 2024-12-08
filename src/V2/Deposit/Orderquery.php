<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Deposit;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Orderquery
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/orderquery
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1230000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/deposit/orderquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'appid' => 'wxd678efh567hg6787',
            'sub_appid' => 'wx8888888888888888',
            'mch_id' => '1230000109',
            'sub_mch_id' => '1900000100',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}
