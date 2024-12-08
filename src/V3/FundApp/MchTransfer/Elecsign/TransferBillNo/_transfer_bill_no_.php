<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Elecsign\TransferBillNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _transfer_bill_no_
{
    /**
     * 微信单号查询电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/transfer-bill-no/%7Btransfer_bill_no%7D
     */
    public function get(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
    ]): ResponseInterface;

    /**
     * 微信单号查询电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/elecsign/transfer-bill-no/%7Btransfer_bill_no%7D
     */
    public function getAsync(array $options = [
        'transfer_bill_no' => '1330000071100999991182020050700019480001',
    ]): PromiseInterface;
}
