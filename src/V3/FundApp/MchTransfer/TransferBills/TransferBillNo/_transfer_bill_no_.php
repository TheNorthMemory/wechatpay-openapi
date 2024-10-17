<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\TransferBills\TransferBillNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transfer_bill_no_
{
    /**
     * 微信转账单号查询转账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/transfer-bill/get-transfer-bill-by-no.html
     */
    public function get(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
    ]): ResponseInterface;

    /**
     * 微信转账单号查询转账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/mch-trans/transfer-bill/get-transfer-bill-by-no.html#async
     */
    public function getAsync(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
    ]): PromiseInterface;
}
