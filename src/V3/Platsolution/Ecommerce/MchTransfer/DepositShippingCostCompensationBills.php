<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DepositShippingCostCompensationBills\OutBillNo $outBillNo
 */
interface DepositShippingCostCompensationBills
{
    /**
     * 发起保证金赔付用户运费(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-shipping-cost-compensation-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'receiver' => [
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
                'user_info' => [
                    'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
        ],
    ]): ResponseInterface;

    /**
     * 发起保证金赔付用户运费(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-shipping-cost-compensation-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'receiver' => [
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                    'type' => 'WXPAY',
                ],
                'user_info' => [
                    'sp_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'transfer_scene_id' => '1001',
            'user_recv_perception' => '退货运费补偿',
        ],
    ]): PromiseInterface;
}
