<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Orders\_transaction_id_ $_transaction_id_
 */
interface Orders
{
    /**
     * 请求分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'receiver_account' => '1900000109',
                'amount' => 190,
                'description' => '分给商户1900000109',
            ],],
            'finish' => true,
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wx8888888888888888',
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'receiver_account' => '1900000109',
                'amount' => 190,
                'description' => '分给商户1900000109',
            ],],
            'finish' => true,
        ],
    ]): PromiseInterface;

    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders#get
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/profitsharing/orders#get
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '',
            'transaction_id' => '',
            'out_order_no' => '',
        ],
    ]): PromiseInterface;
}
