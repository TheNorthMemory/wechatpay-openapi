<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read BillReceipt\_out_batch_no_ $_out_batch_no_
 */
interface BillReceipt
{
    /**
     * 转账电子回单申请受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'out_batch_no' => 'plfk2020042013',
        ],
    ]): ResponseInterface;

    /**
     * 转账电子回单申请受理(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_batch_no' => 'plfk2020042013',
        ],
    ]): PromiseInterface;
}
