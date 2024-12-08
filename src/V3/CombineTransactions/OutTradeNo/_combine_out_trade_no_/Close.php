<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions\OutTradeNo\_combine_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 合单关闭订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/combine-transactions/out-trade-no/%7Bcombine_out_trade_no%7D/close
     */
    public function post(array $options = [
        'combine_out_trade_no' => '',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'individual_auth_id' => '1900000109',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 合单关闭订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/combine-transactions/out-trade-no/%7Bcombine_out_trade_no%7D/close
     */
    public function postAsync(array $options = [
        'combine_out_trade_no' => '',
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'individual_auth_id' => '1900000109',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxd678efh567hg6999',
            ],],
        ],
    ]): PromiseInterface;
}
