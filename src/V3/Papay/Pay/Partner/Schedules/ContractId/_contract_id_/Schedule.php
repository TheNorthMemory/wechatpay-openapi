<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Pay\Partner\Schedules\ContractId\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Schedule
{
    /**
     * 预约扣费(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-schedule-deduction.html
     */
    public function post(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'schedule_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 预约扣费(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-schedule-deduction.html#async
     */
    public function postAsync(array $options = [
        'contract_id' => '123124412412423431',
        'json' => [
            'sp_appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6787',
            'schedule_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): PromiseInterface;
}
