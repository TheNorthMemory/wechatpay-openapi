<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read CharityTransferBills\OutTransferNo $outTransferNo
 */
interface CharityTransferBills
{
    /**
     * 发起公益捐赠(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-transfer-bills
     */
    public function post(array $options = [
        'json' => [
            'out_budget_no' => 'budget202506300102',
            'out_transfer_no' => 'trans202506300102',
            'transaction_info' => [
                'transaction_type' => 'WXPAY',
                'transaction_id' => '4217752501201407033233368018',
            ],
            'sponsor_mchid' => '1900001109',
            'receive_mchid' => '1900001109',
            'amount' => 20000000,
            'transfer_remark' => '帮助受助群体爱心捐款',
        ],
    ]): ResponseInterface;

    /**
     * 发起公益捐赠(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/charity-transfer-bills
     */
    public function postAsync(array $options = [
        'json' => [
            'out_budget_no' => 'budget202506300102',
            'out_transfer_no' => 'trans202506300102',
            'transaction_info' => [
                'transaction_type' => 'WXPAY',
                'transaction_id' => '4217752501201407033233368018',
            ],
            'sponsor_mchid' => '1900001109',
            'receive_mchid' => '1900001109',
            'amount' => 20000000,
            'transfer_remark' => '帮助受助群体爱心捐款',
        ],
    ]): PromiseInterface;
}
