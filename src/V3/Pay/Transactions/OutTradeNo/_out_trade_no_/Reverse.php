<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions\OutTradeNo\_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Reverse
{
    /**
     * 撤销(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/out-trade-no/%7Bout_trade_no%7D/reverse
     */
    public function post(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 撤销(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/out-trade-no/%7Bout_trade_no%7D/reverse
     */
    public function postAsync(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
