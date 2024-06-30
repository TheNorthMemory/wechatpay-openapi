<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\BatchId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _batch_id_\Details $details
 */
interface _batch_id_
{
    /**
     * 微信支付转账批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-by-id.html
     */
    public function get(array $options = [
        'batch_id' => '131000011085109987515042023022300246500006',
        'query' => [
            'sub_mchid' => '1900102208',
            'need_query_detail' => true,
            'detail_state' => 'FAIL',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 微信支付转账批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-batch/transfer-batch-get-by-id.html#async
     */
    public function getAsync(array $options = [
        'batch_id' => '131000011085109987515042023022300246500006',
        'query' => [
            'sub_mchid' => '1900102208',
            'need_query_detail' => true,
            'detail_state' => 'FAIL',
            'offset' => 0,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
