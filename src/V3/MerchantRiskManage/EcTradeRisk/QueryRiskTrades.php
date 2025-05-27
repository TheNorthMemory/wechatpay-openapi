<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage\EcTradeRisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface QueryRiskTrades
{
    /**
     * 查询风险订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/ec-trade-risk/query-risk-trades
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900009231',
            'mchid' => '1900009231',
            'start_time' => '2025-05-20T13:29:35+08:00',
            'end_time' => '2025-05-20T13:29:35+08:00',
            'page_index' => 1,
            'page_size' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 查询风险订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchant-risk-manage/ec-trade-risk/query-risk-trades
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900009231',
            'mchid' => '1900009231',
            'start_time' => '2025-05-20T13:29:35+08:00',
            'end_time' => '2025-05-20T13:29:35+08:00',
            'page_index' => 1,
            'page_size' => 10,
        ],
    ]): PromiseInterface;
}
