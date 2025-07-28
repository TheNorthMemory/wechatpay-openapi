<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Transactions\Summary;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface QueryDay
{
    /**
     * 查询单日交易汇总(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/summary/query-day
     */
    public function post(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'query_date' => '2025-01-14',
            'query_type' => 'ORDER_TYPE_TRANSACTION',
            'appliance_id' => 1,
            'cate_state' => 'CATE_STATE_REDEEM',
        ],
    ]): ResponseInterface;

    /**
     * 查询单日交易汇总(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/summary/query-day
     */
    public function postAsync(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'query_date' => '2025-01-14',
            'query_type' => 'ORDER_TYPE_TRANSACTION',
            'appliance_id' => 1,
            'cate_state' => 'CATE_STATE_REDEEM',
        ],
    ]): PromiseInterface;
}
