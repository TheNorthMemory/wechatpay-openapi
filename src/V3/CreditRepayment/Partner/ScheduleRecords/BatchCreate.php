<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\ScheduleRecords;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface BatchCreate
{
    /**
     * 预约还款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/schedule-records/batch-create
     */
    public function post(array $options = [
        'json' => [
            'contract_id' => '20251105000000123456789',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'schedule_items' => [[
                'out_record_id' => '1234567abcde',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxcbda96de0b165489',
                'repayment_amount' => '10000',
                'min_repayment_amount' => '2000',
                'repayment_date' => '2025-11-18',
                'description' => '信贷还款',
                'attach' => '备注信息',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 预约还款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/schedule-records/batch-create
     */
    public function postAsync(array $options = [
        'json' => [
            'contract_id' => '20251105000000123456789',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'schedule_items' => [[
                'out_record_id' => '1234567abcde',
                'sub_mchid' => '1900000109',
                'sub_appid' => 'wxcbda96de0b165489',
                'repayment_amount' => '10000',
                'min_repayment_amount' => '2000',
                'repayment_date' => '2025-11-18',
                'description' => '信贷还款',
                'attach' => '备注信息',
            ],],
        ],
    ]): PromiseInterface;
}
