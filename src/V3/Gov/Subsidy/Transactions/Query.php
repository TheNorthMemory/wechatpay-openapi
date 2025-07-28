<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 交易信息查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/query
     */
    public function post(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'order_number_list' => ['vmall_250120131959_993_4494'],
        ],
    ]): ResponseInterface;

    /**
     * 交易信息查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/transactions/query
     */
    public function postAsync(array $options = [
        'json' => [
            'qualification_region_code' => 310100,
            'order_number_list' => ['vmall_250120131959_993_4494'],
        ],
    ]): PromiseInterface;
}
