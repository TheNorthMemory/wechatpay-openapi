<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\CombinePapay\Transactions\_combine_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Reverse
{
    /**
     * 电商合单委托代扣撤销订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_5.shtml
     */
    public function post(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6787',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 电商合单委托代扣撤销订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_5.shtml#async
     */
    public function postAsync(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6787',
            ],],
        ],
    ]): PromiseInterface;
}
