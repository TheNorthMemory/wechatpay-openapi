<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\ScheduleRecords;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_record_id_
{
    /**
     * 查询预约还款记录(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/schedule-records/%7Bout_record_id%7D
     */
    public function get(array $options = [
        'out_record_id' => '1234567abcde',
        'query' => [
            'contract_id' => '20251105000000123456789',
        ],
    ]): ResponseInterface;

    /**
     * 查询预约还款记录(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/schedule-records/%7Bout_record_id%7D
     */
    public function getAsync(array $options = [
        'out_record_id' => '1234567abcde',
        'query' => [
            'contract_id' => '20251105000000123456789',
        ],
    ]): PromiseInterface;
}
