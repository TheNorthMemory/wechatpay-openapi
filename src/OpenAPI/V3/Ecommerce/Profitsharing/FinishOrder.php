<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Profitsharing;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface FinishOrder
{
    /**
     * 完结分账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_5.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'description' => '分账完结',
        ],
    ]): ResponseInterface;

    /**
     * 完结分账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/profitsharing/chapter3_5.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'transaction_id' => '4208450740201411110007820472',
            'out_order_no' => 'P20150806125346',
            'description' => '分账完结',
        ],
    ]): PromiseInterface;
}
