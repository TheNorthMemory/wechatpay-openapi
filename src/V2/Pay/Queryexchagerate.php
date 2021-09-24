<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Queryexchagerate
{
    /**
     * 汇率查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/pay/In-AppPay/chapter8_10.shtml
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'fee_type' => 'USD',
            'date' => '20150807',
        ],
        'nonceless' => true,
    ]): ResponseInterface;

    /**
     * 汇率查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/pay/In-AppPay/chapter8_10.shtml#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxd678efh567hg6787',
            'mch_id' => '1230000109',
            'fee_type' => 'USD',
            'date' => '20150807',
        ],
        'nonceless' => true,
    ]): PromiseInterface;
}
