<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Statements
{
    /**
     * 下载对账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_1_6.shtml
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
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
     * @link https://pay.weixin.qq.com/wiki/doc/api_external/ch/apis/chapter3_1_6.shtml#async
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'query' => [
            'date' => '20180130',
            'mchid' => '1900000109',
        ],
        'headers' => [
            'Accept-Encoding' => 'gzip',
        ],
    ]): PromiseInterface;
}
