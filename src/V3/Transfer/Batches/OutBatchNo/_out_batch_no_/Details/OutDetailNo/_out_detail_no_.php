<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transfer\Batches\OutBatchNo\_out_batch_no_\Details\OutDetailNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_detail_no_
{
    /**
     * 商家明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer/chapter3_5.shtml
     */
    public function get(array $options = [
        'out_detail_no' => 'x23zy545Bd5436',
        'out_batch_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 商家明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'out_detail_no' => 'x23zy545Bd5436',
        'out_batch_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
