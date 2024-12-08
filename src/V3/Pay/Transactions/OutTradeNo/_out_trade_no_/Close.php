<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions\OutTradeNo\_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 关单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/out-trade-no/%7Bout_trade_no%7D/close
     */
    public function post(array $options = [
        'out_trade_no' => '',
        'json' => [
            'mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 关单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/transactions/out-trade-no/%7Bout_trade_no%7D/close
     */
    public function postAsync(array $options = [
        'out_trade_no' => '',
        'json' => [
            'mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
