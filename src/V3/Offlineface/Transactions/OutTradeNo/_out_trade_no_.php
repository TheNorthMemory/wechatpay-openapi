<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 查单接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html
     */
    public function get(array $options = [
        'out_trade_no' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
            'business_product_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查单接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html#async
     */
    public function getAsync(array $options = [
        'out_trade_no' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
            'business_product_id' => '',
        ],
    ]): PromiseInterface;
}
