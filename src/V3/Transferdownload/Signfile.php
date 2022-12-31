<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transferdownload;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Signfile
{
    /**
     * 下载电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_15.shtml
     */
    public function get(array $options = [
        'query' => [
            'token' => '',
        ],
    ]): ResponseInterface;

    /**
     * 下载电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_15.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'token' => '',
        ],
    ]): PromiseInterface;
}
