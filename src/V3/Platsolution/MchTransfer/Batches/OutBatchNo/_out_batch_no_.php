<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\OutBatchNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_batch_no_\Details $details
 */
interface _out_batch_no_
{
    /**
     * 商户转账批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-by-out-code.html
     */
    public function get(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'query' => [
            'sub_mchid' => '1900102208',
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'ALL',
        ],
    ]): ResponseInterface;

    /**
     * 商户转账批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-by-out-code.html#async
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'query' => [
            'sub_mchid' => '1900102208',
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'ALL',
        ],
    ]): PromiseInterface;
}
