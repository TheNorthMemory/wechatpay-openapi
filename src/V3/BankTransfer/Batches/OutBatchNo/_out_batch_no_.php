<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\BankTransfer\Batches\OutBatchNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_batch_no_\Details $details
 */
interface _out_batch_no_
{
    /**
     * 银行批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-transfer/batches/out-batch-no/%7Bout_batch_no%7D
     */
    public function get(array $options = [
        'query' => [
            'out_batch_no' => 'plfk2020042013',
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'FAIL',
        ],
    ]): ResponseInterface;

    /**
     * 银行批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-transfer/batches/out-batch-no/%7Bout_batch_no%7D
     */
    public function getAsync(array $options = [
        'query' => [
            'out_batch_no' => 'plfk2020042013',
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'FAIL',
        ],
    ]): PromiseInterface;
}
