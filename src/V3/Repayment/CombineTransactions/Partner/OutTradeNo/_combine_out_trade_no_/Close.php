<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Repayment\CombineTransactions\Partner\OutTradeNo\_combine_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 商户关单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/repayment/combine-transactions/partner/out-trade-no/%7Bcombine_out_trade_no%7D/close
     */
    public function post(array $options = [
        'combine_out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 商户关单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/repayment/combine-transactions/partner/out-trade-no/%7Bcombine_out_trade_no%7D/close
     */
    public function postAsync(array $options = [
        'combine_out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'sub_orders' => [[
                'mchid' => '1900000109',
                'out_trade_no' => '20150806125346',
                'sub_mchid' => '1900000109',
            ],],
        ],
    ]): PromiseInterface;
}
