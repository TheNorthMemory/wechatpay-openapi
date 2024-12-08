<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PartnerTransfer\Batches\OutBatchNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_batch_no_\Details $details
 */
interface _out_batch_no_
{
    /**
     * 商家批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-transfer/batches/out-batch-no/%7Bout_batch_no%7D
     */
    public function get(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'query' => [
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_status' => 'FAIL',
        ],
    ]): ResponseInterface;

    /**
     * 商家批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-transfer/batches/out-batch-no/%7Bout_batch_no%7D
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'query' => [
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_status' => 'FAIL',
        ],
    ]): PromiseInterface;
}
