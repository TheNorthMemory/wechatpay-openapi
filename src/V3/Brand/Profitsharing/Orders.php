<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Profitsharing;

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
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/orders
     */
    public function post(array $options = [
        'json' => [
            'brand_mchid' => '1900000108',
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'account' => '1900000109',
                'amount' => 190,
                'description' => '1900000109分给商户1900000110',
                'name' => 'hu89ohu89ohu89o',
            ],],
            'finish' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/orders
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_mchid' => '1900000108',
            'sub_mchid' => '1900000109',
            'appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888889',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'receivers' => [[
                'type' => 'MERCHANT_ID',
                'account' => '1900000109',
                'amount' => 190,
                'description' => '1900000109分给商户1900000110',
                'name' => 'hu89ohu89ohu89o',
            ],],
            'finish' => true,
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;

    /**
     * 查询分账结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/orders#get
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/orders#get
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
        ],
    ]): PromiseInterface;
}
