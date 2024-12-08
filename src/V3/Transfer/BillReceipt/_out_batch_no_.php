<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transfer\BillReceipt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_batch_no_
{
    /**
     * 查询转账电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer/bill-receipt/%7Bout_batch_no%7D
     */
    public function get(array $options = [
        'out_batch_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 查询转账电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer/bill-receipt/%7Bout_batch_no%7D
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
