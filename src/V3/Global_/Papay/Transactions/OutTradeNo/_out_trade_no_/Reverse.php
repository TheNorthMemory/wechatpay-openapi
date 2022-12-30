<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Papay\Transactions\OutTradeNo\_out_trade_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Reverse
{
    /**
     * 查询订单(商户订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_10.shtml
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(商户订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter5_1_10.shtml#async
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
