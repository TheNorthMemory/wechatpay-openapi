<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DepositInsurancePremiumsCompensationBills\_out_bill_no_ $_out_bill_no_
 */
interface DepositInsurancePremiumsCompensationBills
{
    /**
     * 发起保证金赔付保司保费(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-insurance-premiums-compensation-bills
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mchid' => '1900001108',
                ],
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
        ],
    ]): ResponseInterface;

    /**
     * 发起保证金赔付保司保费(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/deposit-insurance-premiums-compensation-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mchid' => '1900001108',
                ],
                'transaction_info' => [
                    'transaction_id' => '1217752501201407033233368018',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
        ],
    ]): PromiseInterface;
}
