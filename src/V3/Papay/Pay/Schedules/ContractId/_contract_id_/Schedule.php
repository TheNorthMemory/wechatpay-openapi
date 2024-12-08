<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Pay\Schedules\ContractId\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Schedule
{
    /**
     * 预约扣费(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/pay/schedules/contract-id/%7Bcontract_id%7D/schedule
     */
    public function post(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'schedule_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 预约扣费(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/pay/schedules/contract-id/%7Bcontract_id%7D/schedule
     */
    public function postAsync(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'schedule_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): PromiseInterface;
}
