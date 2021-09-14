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
        ],
    ]): ResponseInterface;

    /**
     * 交易保障(异步模式)
     * @param array<string,mixed> $options
     * @link https://share.weiyun.com/5dxUgCw#async
     */
    public function postAsync(array $options = [
        'xml' => [
        ],
    ]): PromiseInterface;
}
