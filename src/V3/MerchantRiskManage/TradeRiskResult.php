<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TradeRiskResult
{
    /**
     * 处置结果回传(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/trade-risk-result
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'risk_type' => 'OTHER_RISK',
            'punish_type' => 'OTHER_PUNISH',
            'additional_punish_type' => 'SUSPEND_SETTLEMENT_NDAYS:10',
            'complaints_information' => '商家说高额返利，支付很大金额之后发现并没有返利，是骗子',
        ],
    ]): ResponseInterface;

    /**
     * 处置结果回传(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/trade-risk-result
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'risk_type' => 'OTHER_RISK',
            'punish_type' => 'OTHER_PUNISH',
            'additional_punish_type' => 'SUSPEND_SETTLEMENT_NDAYS:10',
            'complaints_information' => '商家说高额返利，支付很大金额之后发现并没有返利，是骗子',
        ],
    ]): PromiseInterface;
}
