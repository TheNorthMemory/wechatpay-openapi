<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Insurance\MchTransfer\Batches\DetailReceipts\OutBatchNo\_out_batch_no_\OutDetailNo\_out_detail_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Apply
{
    /**
     * 申请商家转账明细电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/batches/detail-receipts/out-batch-no/%7Bout_batch_no%7D/out-detail-no/%7Bout_detail_no%7D/apply
     */
    public function post(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'out_detail_no' => 'x23zy545Bd5436',
        'json' => [
            'sub_mchid' => '1900102208',
        ],
    ]): ResponseInterface;

    /**
     * 申请商家转账明细电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/insurance/mch-transfer/batches/detail-receipts/out-batch-no/%7Bout_batch_no%7D/out-detail-no/%7Bout_detail_no%7D/apply
     */
    public function postAsync(array $options = [
        'out_batch_no' => 'sjzz20230223',
        'out_detail_no' => 'x23zy545Bd5436',
        'json' => [
            'sub_mchid' => '1900102208',
        ],
    ]): PromiseInterface;
}
