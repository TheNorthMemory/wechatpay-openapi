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
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/out-bill-no/%7Bout_bill_no%7D/cancel
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
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/out-bill-no/%7Bout_bill_no%7D/cancel
     */
    public function postAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'json' => [
            'sub_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
