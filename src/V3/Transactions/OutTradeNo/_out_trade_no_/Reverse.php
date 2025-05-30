<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transactions\OutTradeNo\_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Reverse
{
    /**
     * 撤销订单(商户订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/out-trade-no/%7Bout_trade_no%7D/reverse
     */
    public function post(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'sub_mchid' => '1900000109',
        ],
        'out_trade_no' => '1217752501201407033233368018',
    ]): ResponseInterface;

    /**
     * 撤销订单(商户订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/out-trade-no/%7Bout_trade_no%7D/reverse
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'json' => [
            'mchid' => '1900000109',
            'sp_mchid' => '1900000100',
            'sub_mchid' => '1900000109',
        ],
        'out_trade_no' => '1217752501201407033233368018',
    ]): PromiseInterface;
}
