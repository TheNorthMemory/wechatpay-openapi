<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DepositAfterSalesCompensationBills\OutBillNo $outBillNo
 * @property-read DepositAfterSalesCompensationBills\BillId $billId
 */
interface DepositAfterSalesCompensationBills
{
    /**
     * 请求保证金售后赔付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-after-sales-compensation-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
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
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): ResponseInterface;

    /**
     * 请求保证金售后赔付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-after-sales-compensation-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
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
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
            'sub_appid' => 'wx8888888888888888',
        ],
    ]): PromiseInterface;
}
