<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Sandboxnew\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Downloadbill
{
    /**
     * 下载对账单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Tue May 31 2022 08:00:00 GMT+0800 (China Standard Time)
     * @link https://share.weiyun.com/5dxUgCw
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'bill_date' => '20140603',
            'bill_type' => 'ALL',
            'tar_type' => 'GZIP',
        ],
    ]): ResponseInterface;

    /**
     * 下载对账单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Tue May 31 2022 08:00:00 GMT+0800 (China Standard Time)
     * @link https://share.weiyun.com/5dxUgCw#async
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'bill_date' => '20140603',
            'bill_type' => 'ALL',
            'tar_type' => 'GZIP',
        ],
    ]): PromiseInterface;
}
