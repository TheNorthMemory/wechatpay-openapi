<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CompensateBills\OutBillNo $outBillNo
 * @property-read CompensateBills\BillId $billId
 * @property-read CompensateBills\PreTransfer $preTransfer
 */
interface CompensateBills
{
    /**
     * 请求赔付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills
     */
    public function post(array $options = [
        'json' => [
            'receiver' => [
                'type' => 'TRANSACTION_USER',
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'sponsor_mchid' => '1900001109',
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
        ],
    ]): ResponseInterface;

    /**
     * 请求赔付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/compensate-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'receiver' => [
                'type' => 'TRANSACTION_USER',
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'sponsor_mchid' => '1900001109',
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
        ],
    ]): PromiseInterface;
}
