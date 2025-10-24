<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\Budget\_out_budget_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ElectronicReceipts
{
    /**
     * 申请预算出资的电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/budget/%7Bout_budget_no%7D/electronic-receipts
     */
    public function post(array $options = [
        'out_budget_no' => 'budget202506300102',
        'json' => [
            'start_date' => '2025-09-01',
            'end_date' => '2025-09-30',
            'sponsor_mchid' => '1900001109',
            'receiver_mchid' => '1900102209',
        ],
    ]): ResponseInterface;

    /**
     * 申请预算出资的电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/budget/%7Bout_budget_no%7D/electronic-receipts
     */
    public function postAsync(array $options = [
        'out_budget_no' => 'budget202506300102',
        'json' => [
            'start_date' => '2025-09-01',
            'end_date' => '2025-09-30',
            'sponsor_mchid' => '1900001109',
            'receiver_mchid' => '1900102209',
        ],
    ]): PromiseInterface;

    /**
     * 查询预算出资的电子回单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/budget/%7Bout_budget_no%7D/electronic-receipts#get
     */
    public function get(array $options = [
        'out_budget_no' => 'budget202506300102',
        'query' => [
            'accept_id' => 'c2RmYWtqampqampsZmFza2xmanNhbGZqc2FrZmpzbGZqc2tsZmp',
        ],
    ]): ResponseInterface;

    /**
     * 查询预算出资的电子回单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/budget/%7Bout_budget_no%7D/electronic-receipts#get
     */
    public function getAsync(array $options = [
        'out_budget_no' => 'budget202506300102',
        'query' => [
            'accept_id' => 'c2RmYWtqampqampsZmFza2xmanNhbGZqc2FrZmpzbGZqc2tsZmp',
        ],
    ]): PromiseInterface;
}
