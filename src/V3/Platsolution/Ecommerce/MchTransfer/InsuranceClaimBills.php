<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read InsuranceClaimBills\OutBillNo $outBillNo
 * @property-read InsuranceClaimBills\BillId $billId
 * @property-read InsuranceClaimBills\PreTransfer $preTransfer
 */
interface InsuranceClaimBills
{
    /**
     * 请求保险理赔(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/insurance-claim-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'receiver' => [
                'type' => 'MERCHANT',
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
        ],
    ]): ResponseInterface;

    /**
     * 请求保险理赔(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/insurance-claim-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900001109',
            'receiver' => [
                'type' => 'MERCHANT',
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
        ],
    ]): PromiseInterface;
}
