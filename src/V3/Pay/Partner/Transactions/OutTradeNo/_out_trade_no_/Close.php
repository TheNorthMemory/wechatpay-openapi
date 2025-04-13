<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions\OutTradeNo\_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 关单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/out-trade-no/%7Bout_trade_no%7D/close
     */
    public function post(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'sp_mchid' => '1230000109',
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 关单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/out-trade-no/%7Bout_trade_no%7D/close
     */
    public function postAsync(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'json' => [
            'sp_mchid' => '1230000109',
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
