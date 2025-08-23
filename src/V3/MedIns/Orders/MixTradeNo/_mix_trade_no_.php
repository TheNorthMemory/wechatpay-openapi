<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MedIns\Orders\MixTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _mix_trade_no_
{
    /**
     * 使用医保自费混合订单号查看下单结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/orders/mix-trade-no/%7Bmix_trade_no%7D
     */
    public function get(array $options = [
        'mix_trade_no' => '1217752501201407033233368318',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 使用医保自费混合订单号查看下单结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/med-ins/orders/mix-trade-no/%7Bmix_trade_no%7D
     */
    public function getAsync(array $options = [
        'mix_trade_no' => '1217752501201407033233368318',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
