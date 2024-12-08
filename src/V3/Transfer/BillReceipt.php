<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read BillReceipt\_out_batch_no_ $_out_batch_no_
 */
interface BillReceipt
{
    /**
     * 转账电子回单申请受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer/bill-receipt
     */
    public function post(array $options = [
        'json' => [
            'out_batch_no' => 'plfk2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 转账电子回单申请受理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer/bill-receipt
     */
    public function postAsync(array $options = [
        'json' => [
            'out_batch_no' => 'plfk2020042013',
        ],
    ]): PromiseInterface;
}
