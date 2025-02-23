<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read TransferBills\OutBillNo $outBillNo
 * @property-read TransferBills\BillId $billId
 */
interface TransferBills
{
    /**
     * 保证金赔付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/transfer-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'business_type' => 'DEPOSIT_COMPENSATION',
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mch_id' => '1900001108',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'receiver_remark' => '小店XXXX直播违规扣罚',
        ],
    ]): ResponseInterface;

    /**
     * 保证金赔付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/transfer-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'business_type' => 'DEPOSIT_COMPENSATION',
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mch_id' => '1900001108',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'receiver_remark' => '小店XXXX直播违规扣罚',
        ],
    ]): PromiseInterface;
}
