<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\BankTransfer\Batches\BatchId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _batch_id_\Details $details
 */
interface _batch_id_
{
    /**
     * 微信支付批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_2_2.shtml
     */
    public function get(array $options = [
        'batch_id' => '1130000071100999991182020050700019480001',
        'query' => [
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'FAIL',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'batch_id' => '1130000071100999991182020050700019480001',
        'query' => [
            'need_query_detail' => true,
            'offset' => 0,
            'limit' => 20,
            'detail_state' => 'FAIL',
        ],
    ]): PromiseInterface;
}
