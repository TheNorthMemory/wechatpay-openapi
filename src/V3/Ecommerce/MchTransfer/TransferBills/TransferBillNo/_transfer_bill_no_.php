<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer\TransferBills\TransferBillNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transfer_bill_no_
{
    /**
     * 微信转账单号查询转账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/transfer-bill-no/%7Btransfer_bill_no%7D
     */
    public function get(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): ResponseInterface;

    /**
     * 微信转账单号查询转账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/transfer-bill-no/%7Btransfer_bill_no%7D
     */
    public function getAsync(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): PromiseInterface;
}
