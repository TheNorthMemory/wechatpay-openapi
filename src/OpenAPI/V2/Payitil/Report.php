<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Payitil;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Report
{
    /**
     * 交易保障(同步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'interface_url' => 'https://api.mch.weixin.qq.com/pay/batchreport/micropay/total',
            'user_ip' => '8.8.8.8',
            'trades' => '',
        ],
    ]): ResponseInterface;

    /**
     * 交易保障(异步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'interface_url' => 'https://api.mch.weixin.qq.com/pay/batchreport/micropay/total',
            'user_ip' => '8.8.8.8',
            'trades' => '',
        ],
    ]): PromiseInterface;
}
