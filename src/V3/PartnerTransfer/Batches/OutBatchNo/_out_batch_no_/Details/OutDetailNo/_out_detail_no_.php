<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PartnerTransfer\Batches\OutBatchNo\_out_batch_no_\Details\OutDetailNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_detail_no_
{
    /**
     * 商家明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_5.shtml
     */
    public function get(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): ResponseInterface;

    /**
     * 商家明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): PromiseInterface;
}
