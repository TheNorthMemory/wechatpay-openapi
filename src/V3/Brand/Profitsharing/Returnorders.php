<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Returnorders
{
    /**
     * 请求分账回退(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/returnorders
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'out_return_no' => 'R20190516001',
            'return_mchid' => '86693852',
            'amount' => 10,
            'description' => '分账回退',
        ],
    ]): ResponseInterface;

    /**
     * 请求分账回退(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/returnorders
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'order_id' => '3008450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'out_return_no' => 'R20190516001',
            'return_mchid' => '86693852',
            'amount' => 10,
            'description' => '分账回退',
        ],
    ]): PromiseInterface;

    /**
     * 查询分账回退结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/returnorders#get
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'out_return_no' => 'R20190516001',
            'order_id' => '4208450740201411110007820472',
            'out_order_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询分账回退结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/profitsharing/returnorders#get
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'out_return_no' => 'R20190516001',
            'order_id' => '4208450740201411110007820472',
            'out_order_no' => '',
        ],
    ]): PromiseInterface;
}
