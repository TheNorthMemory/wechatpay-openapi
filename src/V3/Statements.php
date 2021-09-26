<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Statements
{
    /**
     * 下载对账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_5.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'query' => [
            'date' => '20180130',
            'mchid' => '1900000109',
        ],
        'headers' => [
            'Accept-Encoding' => 'gzip',
        ],
    ]): ResponseInterface;

    /**
     * 下载对账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_5.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'query' => [
            'date' => '20180130',
            'mchid' => '1900000109',
        ],
        'headers' => [
            'Accept-Encoding' => 'gzip',
        ],
    ]): PromiseInterface;
}
