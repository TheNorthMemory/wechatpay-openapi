<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\BankBatchTransfer\Receipt;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SummaryReceipts
{
    /**
     * 受理汇总电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-batch-transfer/receipt/summary-receipts
     */
    public function post(array $options = [
        'json' => [
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
        ],
    ]): ResponseInterface;

    /**
     * 受理汇总电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-batch-transfer/receipt/summary-receipts
     */
    public function postAsync(array $options = [
        'json' => [
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
        ],
    ]): PromiseInterface;

    /**
     * 查询汇总电子回单受理结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-batch-transfer/receipt/summary-receipts#get
     */
    public function get(array $options = [
        'query' => [
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
        ],
    ]): ResponseInterface;

    /**
     * 查询汇总电子回单受理结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/bank-batch-transfer/receipt/summary-receipts#get
     */
    public function getAsync(array $options = [
        'query' => [
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
        ],
    ]): PromiseInterface;
}
