<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transfer\Batches\OutBatchNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _out_batch_no_\Details $details
 */
interface _out_batch_no_
{
    /**
     * 商家批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer/chapter3_4.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer/chapter3_4.shtml#async
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
