<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\TransferBills\OutBillNo\_out_bill_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 撤销转账(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/transfer-bill/cancel-transfer.html
     */
    public function post(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 撤销转账(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/transfer-bill/cancel-transfer.html#async
     */
    public function postAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
    ]): PromiseInterface;
}