<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_trade_no_\Close $close
 */
interface _out_trade_no_
{
    /**
     * 查询订单(商户订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(商户订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): PromiseInterface;
}
