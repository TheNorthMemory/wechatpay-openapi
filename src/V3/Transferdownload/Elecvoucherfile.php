<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transferdownload;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Elecvoucherfile
{
    /**
     * 下载电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transferdownload/elecvoucherfile
     */
    public function get(array $options = [
        'query' => [
            'token' => 'X8Uk3sD4a4eZVPTBvqNDoUqcYMlZ9uuD',
            'source' => 'elecsign',
        ],
    ]): ResponseInterface;

    /**
     * 下载电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transferdownload/elecvoucherfile
     */
    public function getAsync(array $options = [
        'query' => [
            'token' => 'X8Uk3sD4a4eZVPTBvqNDoUqcYMlZ9uuD',
            'source' => 'elecsign',
        ],
    ]): PromiseInterface;
}
