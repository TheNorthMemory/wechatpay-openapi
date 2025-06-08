<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Webizpay\Employees\_employee_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read QuotaCards\_card_no_ $_card_no_
 */
interface QuotaCards
{
    /**
     * 企业商户为员工下发企业支付额度卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards
     */
    public function post(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'card_template_id' => 'template_123',
            'amount' => 10000,
            'card_name' => '报销额度卡',
            'out_card_no' => 'mch_card_123456',
            'effective_end_time' => '2023-12-31T23:59:59+08:00',
            'card_remark' => '2023年1月差旅报销',
        ],
    ]): ResponseInterface;

    /**
     * 企业商户为员工下发企业支付额度卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/webizpay/employees/%7Bemployee_id%7D/quota-cards
     */
    public function postAsync(array $options = [
        'employee_id' => 'WeBizPay_a968402a-73bb-43e2-9e1a-8371b0ca3d7c',
        'json' => [
            'sp_mchid' => '12341234',
            'sub_mchid' => '43214321',
            'card_template_id' => 'template_123',
            'amount' => 10000,
            'card_name' => '报销额度卡',
            'out_card_no' => 'mch_card_123456',
            'effective_end_time' => '2023-12-31T23:59:59+08:00',
            'card_remark' => '2023年1月差旅报销',
        ],
    ]): PromiseInterface;
}
