<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PartnerTransfer\Batches\BatchId\_batch_id_\Details\DetailId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _detail_id_
{
    /**
     * 微信支付明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-transfer/batches/batch-id/%7Bbatch_id%7D/details/detail-id/%7Bdetail_id%7D
     */
    public function get(array $options = [
        'batch_id' => '1030000071100999991182020050700019480001',
        'detail_id' => '1040000071100999991182020050700019500100',
    ]): ResponseInterface;

    /**
     * 微信支付明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/partner-transfer/batches/batch-id/%7Bbatch_id%7D/details/detail-id/%7Bdetail_id%7D
     */
    public function getAsync(array $options = [
        'batch_id' => '1030000071100999991182020050700019480001',
        'detail_id' => '1040000071100999991182020050700019500100',
    ]): PromiseInterface;
}
