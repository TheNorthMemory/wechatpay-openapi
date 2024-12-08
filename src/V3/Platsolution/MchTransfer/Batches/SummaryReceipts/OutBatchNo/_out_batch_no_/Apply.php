<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\MchTransfer\Batches\SummaryReceipts\OutBatchNo\_out_batch_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 申请商家转账批次电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/summary-receipts/out-batch-no/%7Bout_batch_no%7D/apply
     */
    public function post(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'json' => [
            'sub_mchid' => '1900102208',
        ],
    ]): ResponseInterface;

    /**
     * 申请商家转账批次电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/mch-transfer/batches/summary-receipts/out-batch-no/%7Bout_batch_no%7D/apply
     */
    public function postAsync(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'json' => [
            'sub_mchid' => '1900102208',
        ],
    ]): PromiseInterface;
}
