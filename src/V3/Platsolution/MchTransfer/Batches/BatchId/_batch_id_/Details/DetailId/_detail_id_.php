<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\BatchId\_batch_id_\Details\DetailId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _detail_id_
{
    /**
     * 微信支付转账明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/batch-id/%7Bbatch_id%7D/details/detail-id/%7Bdetail_id%7D
     */
    public function get(array $options = [
        'batch_id' => '131000011085109987515042023022300246500006',
        'detail_id' => '132000011085109987515042023022300246521006',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付转账明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/batch-id/%7Bbatch_id%7D/details/detail-id/%7Bdetail_id%7D
     */
    public function getAsync(array $options = [
        'batch_id' => '131000011085109987515042023022300246500006',
        'detail_id' => '132000011085109987515042023022300246521006',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
