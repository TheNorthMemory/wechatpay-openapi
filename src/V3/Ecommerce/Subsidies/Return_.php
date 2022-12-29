<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Subsidies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Return_
{
    /**
     * 请求补差回退(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/subsidies/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20150806125346',
            'transaction_id' => '4208450740201411110007820472',
            'refund_id' => '3008450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
        ],
    ]): ResponseInterface;

    /**
     * 请求补差回退(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/subsidies/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_order_no' => 'P20150806125346',
            'transaction_id' => '4208450740201411110007820472',
            'refund_id' => '3008450740201411110007820472',
            'amount' => 10,
            'description' => '测试备注',
        ],
    ]): PromiseInterface;
}
