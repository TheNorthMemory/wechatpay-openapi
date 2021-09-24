<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Settlementquery
{
    /**
     * 查询结算资金(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/pay/In-AppPay/chapter8_9.shtml
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1900000109',
            'sub_mch_id' => '1230000109',
            'usetag' => '1',
            'offset' => '0',
            'limit' => '10',
            'date_start' => '20150807',
            'date_end' => '20150807',
        ],
    ]): ResponseInterface;

    /**
     * 查询结算资金(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/pay/In-AppPay/chapter8_9.shtml#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mchid' => '1900000109',
            'sub_mch_id' => '1230000109',
            'usetag' => '1',
            'offset' => '0',
            'limit' => '10',
            'date_start' => '20150807',
            'date_end' => '20150807',
        ],
    ]): PromiseInterface;
}
