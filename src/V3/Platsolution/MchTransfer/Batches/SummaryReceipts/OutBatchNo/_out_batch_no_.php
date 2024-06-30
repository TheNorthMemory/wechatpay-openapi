<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\SummaryReceipts\OutBatchNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_batch_no_\Apply $apply
 */
interface _out_batch_no_
{
    /**
     * 查询商家转账批次电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/receipts/receipts-query-by-batch-out-no.html
     */
    public function get(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询商家转账批次电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/receipts/receipts-query-by-batch-out-no.html#async
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
