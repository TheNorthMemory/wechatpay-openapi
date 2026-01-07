<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\MchTransfer;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read SubMchCompensationBills\_out_bill_no_ $_out_bill_no_
 */
interface SubMchCompensationBills
{
    /**
     * 请求赔付(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/sub-mch-compensation-bills
     */
    public function post(array $options = [
        'json' => [
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mchid' => '1900001108',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'sponsor_mchid' => '1900001109',
        ],
    ]): ResponseInterface;

    /**
     * 请求赔付(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/mch-transfer/sub-mch-compensation-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'receiver' => [
                'type' => 'MERCHANT',
                'mch_info' => [
                    'mchid' => '1900001108',
                ],
            ],
            'out_bill_no' => 'plfk2020042013',
            'amount' => 10000,
            'transfer_remark' => '直播违规扣罚',
            'sponsor_mchid' => '1900001109',
        ],
    ]): PromiseInterface;
}
