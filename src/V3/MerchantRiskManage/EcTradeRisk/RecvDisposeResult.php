<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage\EcTradeRisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface RecvDisposeResult
{
    /**
     * 回传处置结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/ec-trade-risk/recv-dispose-result
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900009231',
            'mchid' => '1900009231',
            'out_trade_no' => '20150806125346',
            'final_risk_result' => 1,
            'final_risk_type' => 1,
            'disp_conclusion' => [1, 2, 3],
            'disp_addition' => 'example_disp_addition',
            'exist_complaint' => true,
            'refund_amount' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 回传处置结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/ec-trade-risk/recv-dispose-result
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900009231',
            'mchid' => '1900009231',
            'out_trade_no' => '20150806125346',
            'final_risk_result' => 1,
            'final_risk_type' => 1,
            'disp_conclusion' => [1, 2, 3],
            'disp_addition' => 'example_disp_addition',
            'exist_complaint' => true,
            'refund_amount' => 100,
        ],
    ]): PromiseInterface;
}
