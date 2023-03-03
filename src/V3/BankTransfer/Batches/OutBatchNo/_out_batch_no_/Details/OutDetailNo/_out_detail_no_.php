<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\BankTransfer\Batches\OutBatchNo\_out_batch_no_\Details\OutDetailNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_detail_no_
{
    /**
     * 银行明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_2_5.shtml
     */
    public function get(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): ResponseInterface;

    /**
     * 银行明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_2_5.shtml#async
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): PromiseInterface;
}
