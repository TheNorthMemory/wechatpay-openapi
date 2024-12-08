<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\MchTransfer\TransferBills\OutBillNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_bill_no_\Cancel $cancel
 */
interface _out_bill_no_
{
    /**
     * 商户单号查询转账单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/out-bill-no/%7Bout_bill_no%7D
     */
    public function get(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): ResponseInterface;

    /**
     * 商户单号查询转账单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/mch-transfer/transfer-bills/out-bill-no/%7Bout_bill_no%7D
     */
    public function getAsync(array $options = [
        'out_bill_no' => 'plfk2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): PromiseInterface;
}
