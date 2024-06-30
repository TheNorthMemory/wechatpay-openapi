<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\OutBatchNo\_out_batch_no_\Details\OutDetailNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_detail_no_
{
    /**
     * 商户明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-detail-by-out-no.html
     */
    public function get(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'out_detail_no' => 'x23zy545Bd5436',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 商户明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-detail-by-out-no.html#async
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'out_detail_no' => 'x23zy545Bd5436',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
