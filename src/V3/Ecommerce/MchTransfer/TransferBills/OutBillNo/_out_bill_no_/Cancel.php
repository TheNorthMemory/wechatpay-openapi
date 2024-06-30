<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer\TransferBills\OutBillNo\_out_bill_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 撤销转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-bill/cancel-transfer.html
     */
    public function post(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'json' => [
            'sub_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 撤销转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/platsolution-mch-transfer/transfer-bill/cancel-transfer.html#async
     */
    public function postAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'json' => [
            'sub_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
