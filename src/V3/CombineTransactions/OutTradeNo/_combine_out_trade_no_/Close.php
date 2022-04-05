<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions\OutTradeNo\_combine_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Close
{
    /**
     * 合单关闭订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_4.shtml
     */
    public function post(array $options = [
        'combine_out_trade_no' => '',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 合单关闭订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_4.shtml#async
     */
    public function postAsync(array $options = [
        'combine_out_trade_no' => '',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
        ],
    ]): PromiseInterface;
}
