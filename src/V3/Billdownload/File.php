<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Billdownload;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface File
{
    /**
     * 下载账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/billdownload/file
     */
    public function get(array $options = [
        'query' => [
            'token' => '',
            'tartype' => '',
        ],
    ]): ResponseInterface;

    /**
     * 下载账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/billdownload/file
     */
    public function getAsync(array $options = [
        'query' => [
            'token' => '',
            'tartype' => '',
        ],
    ]): PromiseInterface;
}
